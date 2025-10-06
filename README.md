# Laravel Starter

Laravel 12 starter kit with Fortify authentication and a Bootstrap 5 Tabler UI—preconfigured for rapid development, testing, and deployment.

## Features

- 🚀 **Laravel 12** - Latest Laravel framework with modern structure
- 🔐 **Authentication** - Complete auth system via Laravel Fortify
  - Login/Register
  - Password Reset
  - Two-Factor Authentication (2FA)
  - Profile Management
- 🎨 **Tabler UI** - Beautiful admin-style interface
- ⚡ **Alpine.js** - Lightweight JavaScript framework
- 🧪 **Pest v4** - Modern testing framework
- 🛠️ **Laravel Boost** - Enhanced development CLI tools
- 💅 **Code Formatting** - Pint (PHP) + Prettier (Blade/JS/CSS)
- 🌓 **Theme Switcher** - Light/Dark/Auto modes
- 📦 **Vite** - Fast, modern asset bundling

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js & npm
- SQLite (default) or MySQL/PostgreSQL

## Installation

### Option 1: Using Laravel Installer

```bash
laravel new your-project --using=abitbt/laravel-starter
cd your-project
```

### Option 2: Manual Installation

```bash
# Clone the repository
git clone https://github.com/abitbt/laravel-starter.git your-project
cd your-project

# Install dependencies
composer install
npm install

# Set up environment
cp .env.example .env
php artisan key:generate

# Create database (SQLite)
touch database/database.sqlite

# Run migrations
php artisan migrate

# Create storage symlink (for public file access)
php artisan storage:link

# Build assets
npm run build
```

## Quick Start

### Development Environment

Start all development services at once:

```bash
composer run dev
```

This starts:
- Laravel dev server (http://127.0.0.1:8000)
- Queue worker
- Log viewer (Pail)
- Vite dev server (HMR)

### Individual Services

Or run services individually:

```bash
php artisan serve          # Start server
npm run dev               # Start Vite dev server
php artisan queue:listen  # Start queue worker
php artisan pail          # View logs
```

## Usage

### Creating Your First Feature

```bash
# Generate model, migration, and factory
php artisan make:model Product -mf --no-interaction

# Generate controller
php artisan make:controller ProductController --resource --no-interaction

# Generate form requests
php artisan make:request StoreProductRequest --no-interaction
php artisan make:request UpdateProductRequest --no-interaction

# Generate tests
php artisan make:test ProductTest --pest --no-interaction

# Run migrations
php artisan migrate

# Run tests
vendor/bin/pest --filter=ProductTest
```

### Code Formatting

```bash
# Format PHP code
vendor/bin/pint

# Format Blade/JS/CSS
npm run format

# Check formatting without changes
vendor/bin/pint --test
npm run format:check
```

### Testing

```bash
# Run all tests
vendor/bin/pest

# Run specific test file
vendor/bin/pest --filter=ProductTest

# Run tests with coverage
vendor/bin/pest --coverage
```

## Project Structure

```
├── app/
│   ├── Actions/Fortify/      # Authentication actions
│   ├── Http/Controllers/     # Application controllers
│   ├── Models/               # Eloquent models
│   └── Providers/            # Service providers
├── bootstrap/
│   ├── app.php              # Application bootstrap
│   └── providers.php        # Service provider registration
├── config/                  # Configuration files
├── database/
│   ├── migrations/          # Database migrations
│   ├── factories/           # Model factories
│   └── seeders/             # Database seeders
├── resources/
│   ├── css/                 # Stylesheets
│   ├── js/                  # JavaScript files
│   └── views/               # Blade templates
│       ├── auth/            # Authentication views
│       ├── layouts/         # Layout templates
│       └── profile/         # Profile management
├── routes/
│   └── web.php             # Web routes
└── tests/
    ├── Feature/            # Feature tests
    └── Unit/               # Unit tests
```

## Default Credentials

After running migrations, you can register a new account or create a user via Tinker:

```bash
php artisan tinker

User::factory()->create([
    'name' => 'Admin User',
    'email' => 'admin@example.com',
    'password' => bcrypt('password')
]);
```

## Laravel Boost Tools

This project includes Laravel Boost for enhanced development:

```bash
search-docs ['query']        # Search Laravel ecosystem docs
list-artisan-commands        # List available artisan commands
database-query "SQL"         # Run database queries
tinker                       # Interactive REPL
browser-logs                 # View frontend errors
get-absolute-url             # Get shareable project URL
```

## Documentation

### Additional Guides

- **[ENV.md](ENV.md)** - Complete environment variables documentation
- **[DEPLOYMENT.md](DEPLOYMENT.md)** - Production deployment guide
- **[CONTRIBUTING.md](CONTRIBUTING.md)** - Contribution guidelines
- **[SECURITY.md](SECURITY.md)** - Security policy and best practices
- **[CHANGELOG.md](CHANGELOG.md)** - Version history and changes

For AI coding agents, see `.github/instructions/` directory.

## Configuration

### Switching to MySQL/PostgreSQL

1. Update `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

2. Run migrations:

```bash
php artisan migrate:fresh
```

### Email Configuration

Update `.env` with your mail settings:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS="noreply@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Queue Configuration

For production, use database or Redis:

```env
QUEUE_CONNECTION=database  # or redis
```

Run the queue worker:

```bash
php artisan queue:work --tries=3
```

## Deployment

For complete deployment instructions, see **[DEPLOYMENT.md](DEPLOYMENT.md)**.

### Quick Production Checklist

```bash
# 1. Set environment to production
APP_ENV=production
APP_DEBUG=false

# 2. Install dependencies
composer install --optimize-autoloader --no-dev
npm ci
npm run build

# 3. Optimize framework
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# 4. Run migrations
php artisan migrate --force

# 5. Create storage link
php artisan storage:link

# 6. Set up queue worker (supervisor)
# 7. Configure web server (Nginx/Apache)
# 8. Set up SSL certificate (Let's Encrypt)
```

## Security

- All routes are protected with CSRF tokens
- Passwords are hashed using bcrypt
- Two-factor authentication available
- Rate limiting on authentication routes (5 attempts/minute)
- SQL injection prevention via Eloquent ORM
- XSS protection via Blade auto-escaping

If you discover a security vulnerability, please email security@abitbt.com. See [SECURITY.md](SECURITY.md) for details.

## Testing

This project uses Pest v4 for testing. Tests are located in `tests/` directory:

```bash
# Run all tests
vendor/bin/pest

# Run with coverage
vendor/bin/pest --coverage

# Run specific test suite
vendor/bin/pest tests/Feature
vendor/bin/pest tests/Unit
```

## Contributing

Contributions are welcome! Please see [CONTRIBUTING.md](CONTRIBUTING.md) for detailed guidelines.

Quick steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Follow existing code conventions
4. Write tests for new features
5. Format code (`vendor/bin/pint` and `npm run format`)
6. Commit changes (`git commit -m 'Add amazing feature'`)
7. Push to branch (`git push origin feature/amazing-feature`)
8. Open a Pull Request

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for recent changes.

## Credits

- Built on [Laravel](https://laravel.com)
- UI by [Tabler](https://tabler.io)
- Icons by [Tabler Icons](https://tabler-icons.io)
- Authentication by [Laravel Fortify](https://github.com/laravel/fortify)

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).

---

**Made with ❤️ by [aBit-Soft](https://github.com/abitbt)**
