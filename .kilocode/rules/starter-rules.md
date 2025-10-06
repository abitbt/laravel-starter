# Starter Project Guidelines

## Stack
- PHP 8.3.26, Laravel v12, Pest v4, Pint v1, PHPUnit v12

## Core Conventions
- Follow existing code conventions - check sibling files
- Use descriptive names: `isRegisteredForDiscounts()`, not `discount()`
- Reuse existing components
- Don't modify directory structure or dependencies without approval
- Only create docs if explicitly requested
- Be concise - focus on what's important

## Laravel Boost Tools
- Use `search-docs` for version-specific Laravel ecosystem docs (Laravel, Inertia, Livewire, Filament, Pest, etc.)
- Use `list-artisan-commands` before running artisan commands
- Use `tinker` for debugging/querying Eloquent models
- Use `database-query` for read-only database queries
- Use `browser-logs` for frontend errors (recent only)
- Use `get-absolute-url` when sharing project URLs

### Search Docs Tips
- Use multiple broad queries: `['rate limiting', 'routing']`
- Don't add package names to queries
- Search before making code changes

## PHP Rules
- Always use curly braces for control structures
- Use PHP 8 constructor property promotion
- Always use explicit return types and type hints
- Prefer PHPDoc blocks; avoid inline comments
- Enum keys should be TitleCase

## Laravel Best Practices
- Use `php artisan make:` commands (with `--no-interaction`)
- Prefer Eloquent over `DB::`; use `Model::query()`
- Use eager loading to prevent N+1 queries
- Use Form Request classes for validation (not inline)
- Create factories/seeders with models
- Use Eloquent API Resources for APIs
- Queue time-consuming operations with `ShouldQueue`
- Use built-in auth/authorization (gates, policies, Sanctum)
- Use named routes: `route('name')` not hardcoded URLs
- Use `config()` not `env()` outside config files
- Use factories in tests (check for custom states)

### Laravel 12 Structure
- No `app/Http/Middleware/` or `app/Console/Kernel.php`
- Register middleware/exceptions in `bootstrap/app.php`
- Service providers in `bootstrap/providers.php`
- Commands in `app/Console/Commands/` auto-register
- Casts use `casts()` method on models
- When modifying columns in migrations, include all previous attributes

## Testing (Pest v4)
- Write Pest tests to verify features (not verification scripts)
- Use `php artisan make:test --pest <name>` (add `--unit` for unit tests)
- Most tests should be feature tests
- Tests should cover happy, failure, and edge cases
- Run minimal tests with `--filter=testName` after changes
- Use specific assertions: `assertForbidden()` not `assertStatus(403)`
- Use datasets for validation rule tests
- Browser tests go in `tests/Browser/`

## Code Formatting
- Run `vendor/bin/pint --dirty` before finalizing changes

## Troubleshooting
- Vite errors: run `npm run build` or ask user to run `npm run dev`/`composer run dev`
