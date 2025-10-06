# Deployment Guide

This guide covers deploying Laravel Starter to production environments.

## Pre-Deployment Checklist

### Environment Configuration

- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Generate strong `APP_KEY` (never reuse from other environments)
- [ ] Set correct `APP_URL` (with https://)
- [ ] Configure production database credentials
- [ ] Set up production mail service
- [ ] Configure queue connection (database or redis)
- [ ] Set appropriate cache driver (redis recommended)
- [ ] Configure session driver (database or redis)
- [ ] Set `LOG_LEVEL=error` or `warning`

### Security

- [ ] Ensure all secrets are in `.env` (not in code)
- [ ] SSL certificate installed and configured
- [ ] Force HTTPS in production
- [ ] Review and update CORS settings if using API
- [ ] Set appropriate rate limiting
- [ ] Configure security headers
- [ ] Review file upload restrictions

### Performance

- [ ] Run `composer install --optimize-autoloader --no-dev`
- [ ] Run `php artisan config:cache`
- [ ] Run `php artisan route:cache`
- [ ] Run `php artisan view:cache`
- [ ] Run `php artisan event:cache`
- [ ] Compile frontend assets: `npm run build`
- [ ] Set up OPcache for PHP
- [ ] Configure Redis for cache/sessions (if using)

### Database

- [ ] Run migrations: `php artisan migrate --force`
- [ ] Set up automated database backups
- [ ] Configure database connection pooling
- [ ] Index frequently queried columns
- [ ] Review query performance

### Infrastructure

- [ ] Set up queue workers with Supervisor
- [ ] Configure log rotation
- [ ] Set up monitoring (uptime, errors, performance)
- [ ] Configure automatic deployments (CI/CD)
- [ ] Set up backup strategy
- [ ] Configure CDN for static assets (optional)

## Deployment Methods

### Method 1: Traditional VPS/Server (Ubuntu/Debian)

#### 1. Server Setup

```bash
# Update system
sudo apt update && sudo apt upgrade -y

# Install PHP 8.3 and extensions
sudo apt install -y php8.3-fpm php8.3-cli php8.3-mysql php8.3-sqlite3 \
  php8.3-mbstring php8.3-xml php8.3-bcmath php8.3-curl php8.3-zip \
  php8.3-gd php8.3-redis

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Install Node.js (via nvm recommended)
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash
nvm install 20
nvm use 20

# Install Nginx
sudo apt install -y nginx

# Install MySQL (or PostgreSQL)
sudo apt install -y mysql-server

# Install Redis (optional but recommended)
sudo apt install -y redis-server

# Install Supervisor (for queue workers)
sudo apt install -y supervisor
```

#### 2. Deploy Application

```bash
# Clone repository
cd /var/www
sudo git clone https://github.com/yourusername/your-app.git
cd your-app

# Set permissions
sudo chown -R www-data:www-data /var/www/your-app
sudo chmod -R 755 /var/www/your-app
sudo chmod -R 775 /var/www/your-app/storage
sudo chmod -R 775 /var/www/your-app/bootstrap/cache

# Install dependencies
composer install --optimize-autoloader --no-dev
npm ci
npm run build

# Set up environment
cp .env.example .env
nano .env  # Edit with production values
php artisan key:generate

# Run migrations
php artisan migrate --force

# Optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# Create storage link
php artisan storage:link
```

#### 3. Configure Nginx

```bash
sudo nano /etc/nginx/sites-available/your-app
```

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name yourdomain.com www.yourdomain.com;
    
    # Redirect to HTTPS
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/your-app/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";
    add_header X-XSS-Protection "1; mode=block";
    add_header Referrer-Policy "strict-origin-when-cross-origin";

    index index.php;

    charset utf-8;

    # SSL Configuration (use Certbot for Let's Encrypt)
    ssl_certificate /etc/letsencrypt/live/yourdomain.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/yourdomain.com/privkey.pem;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers HIGH:!aNULL:!MD5;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
        fastcgi_hide_header X-Powered-By;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }

    # Cache static files
    location ~* \.(jpg|jpeg|gif|png|css|js|ico|xml|svg|woff|woff2|ttf)$ {
        expires 30d;
        add_header Cache-Control "public, immutable";
    }
}
```

Enable site:
```bash
sudo ln -s /etc/nginx/sites-available/your-app /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

#### 4. Install SSL Certificate (Let's Encrypt)

```bash
sudo apt install -y certbot python3-certbot-nginx
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

#### 5. Configure Queue Workers (Supervisor)

```bash
sudo nano /etc/supervisor/conf.d/laravel-worker.conf
```

```ini
[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/your-app/artisan queue:work --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/www/your-app/storage/logs/worker.log
stopwaitsecs=3600
```

Start workers:
```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start laravel-worker:*
```

#### 6. Configure Scheduled Tasks (Cron)

```bash
sudo crontab -e -u www-data
```

Add:
```
* * * * * cd /var/www/your-app && php artisan schedule:run >> /dev/null 2>&1
```

### Method 2: Laravel Forge

Laravel Forge automates most deployment tasks:

1. **Create Server** on Forge (DigitalOcean, AWS, etc.)
2. **Create Site** with your domain
3. **Install Repository** from GitHub/GitLab/Bitbucket
4. **Enable Quick Deploy** for automatic deployments
5. **Configure Environment** variables in Forge UI
6. **Enable Queue Worker** in Forge UI
7. **Configure Scheduler** (automatic with Forge)
8. **Install SSL** with one click (Let's Encrypt)

Deploy script (auto-generated by Forge):
```bash
cd /home/forge/yourdomain.com
git pull origin main
composer install --no-dev --optimize-autoloader
npm ci
npm run build
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan queue:restart
```

### Method 3: Laravel Vapor (Serverless)

For AWS Lambda serverless deployment:

1. Install Vapor CLI: `composer require laravel/vapor-cli`
2. Configure `vapor.yml`
3. Deploy: `vapor deploy production`

### Method 4: Docker (Laravel Sail)

```bash
# Build for production
docker-compose -f docker-compose.prod.yml build

# Run
docker-compose -f docker-compose.prod.yml up -d
```

## Post-Deployment

### Verify Deployment

```bash
# Check application status
curl -I https://yourdomain.com

# Check health endpoint
curl https://yourdomain.com/up

# Test queue workers
php artisan queue:work --once

# Check logs
tail -f storage/logs/laravel.log
```

### Monitoring

#### Set up Log Monitoring

Consider services like:
- **Papertrail** - Centralized logging
- **Sentry** - Error tracking
- **New Relic** - Application performance monitoring
- **Laravel Telescope** (staging only, not production)

#### Database Backups

```bash
# MySQL backup script
#!/bin/bash
DATE=$(date +%Y%m%d_%H%M%S)
mysqldump -u username -p'password' database_name > /backups/db_$DATE.sql
find /backups -name "db_*.sql" -mtime +7 -delete
```

Add to cron:
```
0 2 * * * /path/to/backup-script.sh
```

### Performance Monitoring

```bash
# Enable OPcache
sudo nano /etc/php/8.3/fpm/conf.d/10-opcache.ini
```

```ini
opcache.enable=1
opcache.memory_consumption=256
opcache.interned_strings_buffer=16
opcache.max_accelerated_files=10000
opcache.revalidate_freq=60
opcache.fast_shutdown=1
```

### Troubleshooting

#### 500 Server Error

```bash
# Check logs
tail -f storage/logs/laravel.log
sudo tail -f /var/log/nginx/error.log

# Check permissions
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

#### Queue Not Processing

```bash
# Check supervisor status
sudo supervisorctl status

# Restart workers
sudo supervisorctl restart laravel-worker:*

# Check logs
tail -f storage/logs/worker.log
```

#### Database Connection Issues

```bash
# Test connection
php artisan tinker
> DB::connection()->getPdo();

# Check .env configuration
# Verify database server is running
sudo systemctl status mysql
```

## Zero-Downtime Deployment

Use deployment tools like:
- **Envoyer** (paid, by Laravel)
- **Deployer** (free, open-source)

Example with symlinks:
```bash
/var/www/your-app/
├── current -> releases/20251006120000
├── releases/
│   ├── 20251006120000/
│   ├── 20251006110000/
│   └── 20251006100000/
├── shared/
│   ├── .env
│   └── storage/
```

## Rollback Strategy

```bash
# Keep last 5 releases
# Symlink to previous release if issues occur
cd /var/www/your-app
ln -sfn releases/20251006110000 current
sudo systemctl reload php8.3-fpm
```

## Environment-Specific Tips

### Production
- Use Redis for cache and sessions
- Enable OPcache
- Use CDN for assets
- Set up monitoring and alerts
- Automated backups

### Staging
- Mirror production setup
- Use separate database
- Can enable APP_DEBUG=true
- Test deployments here first

## Additional Resources

- [Laravel Deployment Documentation](https://laravel.com/docs/12.x/deployment)
- [Laravel Forge](https://forge.laravel.com)
- [Laravel Vapor](https://vapor.laravel.com)
- [Envoyer](https://envoyer.io)
