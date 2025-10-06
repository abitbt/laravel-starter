# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- Initial release of Laravel Starter
- Laravel 12 framework integration
- Complete authentication system via Laravel Fortify
  - Login/Register functionality
  - Password reset
  - Two-factor authentication (2FA)
  - Profile management
- Tabler UI integration with light/dark/auto theme switcher
- Alpine.js for reactive components
- Pest v4 testing framework
- Laravel Boost development CLI tools
- Code formatting with Pint (PHP) and Prettier (Blade/JS/CSS)
- Vite for fast asset bundling
- Concurrent development environment (`composer run dev`)
- SQLite database configuration (default)
- Comprehensive documentation for developers and AI agents
- Pre-configured authentication views
- Example routes and views
- Database migrations and factories

### Changed
- N/A

### Deprecated
- N/A

### Removed
- N/A

### Fixed
- N/A

### Security
- CSRF protection on all routes
- Bcrypt password hashing
- Rate limiting on authentication routes (5 attempts/minute)
- SQL injection prevention via Eloquent ORM
- XSS protection via Blade auto-escaping

## [1.0.0] - 2025-10-06

### Added
- Initial stable release

---

[Unreleased]: https://github.com/aBit-Soft/laravel-starter/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/aBit-Soft/laravel-starter/releases/tag/v1.0.0
