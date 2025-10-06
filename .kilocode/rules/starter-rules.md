# Laravel Starter Rules

## Stack
Laravel 12 | PHP 8.3 | Pest v4 | SQLite | Fortify | Tabler | Alpine | Vite

## Laravel 12 Structure
- No `app/Http/Middleware/` or `app/Console/Kernel.php`
- Middleware/exceptions in `bootstrap/app.php`
- Service providers in `bootstrap/providers.php`
- Model casts use `casts()` method, NOT `$casts` property
- Commands auto-register from `app/Console/Commands/`
- When modifying columns in migrations, include all previous attributes

## Before Making Changes
```bash
search-docs ['feature']        # Search Laravel docs first
list-artisan-commands          # Check available commands
```

## Code Conventions
- Follow existing code patterns - check sibling files
- Descriptive names: `isRegisteredForDiscounts()` not `discount()`
- Reuse existing components
- Be concise - focus on what's important
- Only create docs if explicitly requested

## PHP Rules
**Always:**
- Named routes: `route('products.index')`
- Form Requests for validation (never inline)
- Eager loading: `Product::with(['category'])->get()`
- Explicit return types and type hints
- Curly braces for all control structures
- PHP 8 constructor property promotion
- PHPDoc blocks (avoid inline comments)

**Never:**
- `env()` outside config files
- Hardcoded URLs
- `$request->all()` (use `$request->validated()`)
- N+1 queries
- Skip formatting or tests

## Laravel Best Practices
- Use `php artisan make:` commands with `--no-interaction`
- Prefer Eloquent over `DB::`; use `Model::query()`
- Queue time-consuming operations with `ShouldQueue`
- Use gates/policies for authorization
- Use `config()` not `env()` outside config files
- Create factories/seeders with models
- Use Eloquent API Resources for APIs

## Quick Patterns
**Route:**
```php
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
```

**Controller:**
```php
public function store(StoreProductRequest $request)
{
    $product = Product::create($request->validated());
    return redirect()->route('products.show', $product);
}
```

**Model:**
```php
protected function casts(): array
{
    return ['created_at' => 'datetime', 'is_active' => 'boolean'];
}
```

**View:**
```blade
@extends('layouts.app')
@section('page-title', 'Products')
@section('content')
  <div class="container-xl">...</div>
@endsection
```

**Test:**
```php
test('user can create product', function () {
    actingAs(User::factory()->create())
        ->post(route('products.store'), ['name' => 'Test'])
        ->assertRedirect();
    expect(Product::count())->toBe(1);
});
```

## Testing (Pest v4)
- Write Pest tests to verify features (not verification scripts)
- Use `php artisan make:test --pest <name>` (add `--unit` for unit tests)
- Most tests should be feature tests
- Use specific assertions: `assertOk()` not `assertStatus(200)`
- Test happy path + failures + edge cases
- Use datasets for validation rule tests
- Run minimal tests: `vendor/bin/pest --filter=testName`
- Check factories for custom states

## Workflow: Creating Features
```bash
php artisan make:model Product -mf --no-interaction
php artisan make:controller ProductController --resource --no-interaction
php artisan make:request StoreProductRequest --no-interaction
php artisan make:test ProductTest --pest --no-interaction
php artisan migrate
vendor/bin/pest --filter=ProductTest
vendor/bin/pint --dirty && npm run format
```

## Formatting
```bash
vendor/bin/pint --dirty    # PHP
npm run format             # Blade/JS/CSS
```

## Boost Tools
- `search-docs` - Version-specific Laravel docs
- `list-artisan-commands` - Available artisan commands
- `tinker` - Debug/query Eloquent models
- `database-query` - Read-only database queries
- `browser-logs` - Frontend errors (recent only)
- `pail` - Backend logs
- `get-absolute-url` - Share project URLs

**Search Docs Tips:**
- Use multiple broad queries: `['rate limiting', 'routing']`
- Don't add package names to queries

## Debugging
- Frontend: `browser-logs`
- Backend: `php artisan pail`
- Database: `database-query "SELECT * FROM users"`
- Models: `tinker`
- Clear cache: `php artisan optimize:clear`

## Before Commit
- Tests pass: `vendor/bin/pest`
- Code formatted: `vendor/bin/pint --dirty && npm run format`
- Named routes used
- No N+1 queries
- Form Requests for validation
- No errors: Check `get_errors`

## Troubleshooting
- Vite errors: run `npm run build` or `npm run dev`/`composer run dev`
