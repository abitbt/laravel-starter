# Security Policy

## Supported Versions

We release patches for security vulnerabilities for the following versions:

| Version | Supported          |
| ------- | ------------------ |
| 1.x.x   | :white_check_mark: |
| < 1.0   | :x:                |

## Reporting a Vulnerability

We take the security of Laravel Starter seriously. If you believe you have found a security vulnerability, please report it to us as described below.

### Where to Report

**Please do not report security vulnerabilities through public GitHub issues.**

Instead, please report them via email to:

**security@abitbt.com**

### What to Include

Please include the following information in your report:

- **Type of vulnerability** (e.g., SQL injection, XSS, CSRF, etc.)
- **Full paths of source file(s)** related to the vulnerability
- **Location of the affected source code** (tag/branch/commit or direct URL)
- **Step-by-step instructions** to reproduce the issue
- **Proof-of-concept or exploit code** (if possible)
- **Impact of the vulnerability** and how an attacker might exploit it
- **Any potential solutions** you've identified (optional but appreciated)

### What to Expect

- **Acknowledgment**: We'll acknowledge receipt of your vulnerability report within 48 hours
- **Updates**: We'll send you regular updates about our progress
- **Timeframe**: We aim to address critical vulnerabilities within 7 days
- **Credit**: If you'd like, we'll publicly credit you for the discovery once the fix is released
- **Disclosure**: We follow coordinated disclosure - please give us reasonable time to fix the issue before public disclosure

## Security Best Practices

When using Laravel Starter, follow these security best practices:

### Environment Configuration

```bash
# Production .env settings
APP_ENV=production
APP_DEBUG=false
APP_KEY=<strong-random-key>
```

### Authentication

- **Use strong passwords** - minimum 8 characters recommended
- **Enable 2FA** for admin accounts
- **Rate limiting** is enabled by default (5 login attempts/minute)
- **Session timeout** is set to 120 minutes by default

### Database

- **Use prepared statements** - Eloquent ORM handles this automatically
- **Never expose database credentials** in version control
- **Regular backups** - implement automated backup strategy

### File Upload

If implementing file uploads:
- **Validate file types** and extensions
- **Limit file sizes**
- **Store uploads outside public directory**
- **Scan for malware** in production

### HTTPS

- **Always use HTTPS** in production
- **Enable HSTS** (HTTP Strict Transport Security)
- **Set secure cookie flags**

### Headers

Recommended security headers (configure in middleware):

```php
// Add to middleware
$response->headers->set('X-Frame-Options', 'SAMEORIGIN');
$response->headers->set('X-Content-Type-Options', 'nosniff');
$response->headers->set('X-XSS-Protection', '1; mode=block');
$response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
```

### Dependencies

- **Keep dependencies updated** regularly
- **Run `composer audit`** to check for known vulnerabilities
- **Run `npm audit`** for frontend dependencies

```bash
# Check for security issues
composer audit
npm audit

# Fix automatically where possible
npm audit fix
```

### Code Review

- **Review all pull requests** for security implications
- **Never commit secrets** to version control
- **Use Laravel's built-in security features**:
  - CSRF protection (enabled by default)
  - SQL injection prevention (use Eloquent/Query Builder)
  - XSS protection (Blade auto-escaping)

## Known Security Features

Laravel Starter includes the following security features out of the box:

### ✅ CSRF Protection
All forms include CSRF tokens automatically via Blade

### ✅ Password Hashing
Bcrypt hashing with configurable rounds (default: 12)

### ✅ Rate Limiting
Authentication routes limited to 5 attempts per minute

### ✅ SQL Injection Prevention
Eloquent ORM uses prepared statements

### ✅ XSS Protection
Blade templates auto-escape output

### ✅ Mass Assignment Protection
Models use `$fillable` or `$guarded` properties

### ✅ Authentication
Laravel Fortify provides secure authentication

### ✅ Two-Factor Authentication
Optional 2FA available via Fortify

## Security Checklist for Production

Before deploying to production, ensure:

- [ ] `APP_DEBUG=false` in production
- [ ] `APP_ENV=production` is set
- [ ] Strong `APP_KEY` is generated
- [ ] HTTPS is enabled and enforced
- [ ] Database credentials are secure and not in version control
- [ ] File permissions are correctly set (storage and cache writable)
- [ ] Unnecessary routes are removed or protected
- [ ] Error reporting doesn't expose sensitive information
- [ ] Queue workers are running with proper supervision
- [ ] Logs are monitored and rotated
- [ ] Backups are automated and tested
- [ ] Dependencies are up to date
- [ ] Security headers are configured
- [ ] Rate limiting is configured appropriately
- [ ] Session configuration is secure

## Additional Resources

- [Laravel Security Documentation](https://laravel.com/docs/12.x/security)
- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [PHP Security Best Practices](https://www.php.net/manual/en/security.php)

## Contact

For security concerns, contact: **security@abitbt.com**

For general inquiries: **hello@abitbt.com**

---

Thank you for helping keep Laravel Starter and its users safe!
