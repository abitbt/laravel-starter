# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

Nothing yet.

## [1.1.0] - 2025-10-06

### Added
- GitHub Actions CI/CD: tests.yml and code-quality.yml
- Project documentation: CONTRIBUTING.md, SECURITY.md, ENV.md, DEPLOYMENT.md
- LICENSE (MIT)
- Pint configuration (pint.json)
- API routes file (routes/api.php) and API route registration
- ExampleController for reference patterns
- UserSeeder for example data
- Standard Laravel directories scaffolded: Console/Commands, Events, Listeners, Notifications, Mail

### Changed
- README: refined project description; added storage:link guidance; linked new docs
- composer.json and package.json: updated descriptions
- bootstrap/app.php: registered API routes
- tests/Pest.php: enabled RefreshDatabase by default for Feature tests

### Removed
- .gitkeep placeholders from empty app subdirectories

## [1.0.0] - 2025-10-06

### Added
- Initial stable release

---
[Unreleased]: https://github.com/abitbt/laravel-starter/compare/v1.1.0...HEAD
[1.1.0]: https://github.com/abitbt/laravel-starter/compare/v1.0.0...v1.1.0
[1.0.0]: https://github.com/abitbt/laravel-starter/releases/tag/v1.0.0
