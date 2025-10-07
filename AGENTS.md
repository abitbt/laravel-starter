# Repository Guidelines

## Project Structure & Module Organization
Core code sits in `app/`; database artifacts stay in `database/`; UI assets live in `resources/` with Vite output in `public/build`. Middleware, exception handling, and service providers register via `bootstrap/app.php` and `bootstrap/providers.php`. Artisan commands auto-load from `app/Console/Commands/`, routes live in `routes/web.php`, and tests divide between `tests/Feature` and `tests/Unit`.

## Build, Test, and Development Commands
- `composer run dev` — runs serve, queue listener, Pail, and Vite HMR together.
- `php artisan serve` + `npm run dev` — start backend and Vite separately.
- `npm run build` — compile production assets.
- `vendor/bin/pest` or `php artisan test` (`--coverage` optional) — execute suites.
- `php artisan make:* --no-interaction` — generate Laravel scaffolding.

## Coding Style & Naming Conventions
Format PHP with `vendor/bin/pint --dirty` (Laravel preset: single quotes, ordered imports) and Blade/JS/CSS with `npm run format` (2-space indent, 120-column wrap, Tailwind sorting). Use descriptive names, mirror sibling components, return typed methods, use named routes (`route('products.index')`), Form Requests, constructor property promotion, and braces on every control structure. Avoid `env()` outside config, `$request->all()`, hardcoded URLs, and N+1 queries; prefer `Model::query()` with eager loading and queue work via `ShouldQueue`.

## Testing Guidelines
Pest v4 is standard. Generate tests with `php artisan make:test --pest` (`--unit` as needed). Keep flows in `tests/Feature`, focused logic in `tests/Unit`, name files `*Test.php`, and express intent with `it('...')`. Cover success, failure, and edge cases, use assertions like `assertOk()` and `assertRedirect()`, and use datasets for validation grids. Run `vendor/bin/pest` before pushing; add `--coverage` for auth, billing, or security changes.

## Commit & Pull Request Guidelines
Write imperative, scoped commits (`Add product export job`, `chore(changelog): refresh links`) and isolate formatting when possible. Pull requests need a short summary, linked issues, UI evidence when visuals shift, and the commands run (`vendor/bin/pint --dirty && npm run format`, `vendor/bin/pest`). Confirm named routes, absence of N+1 queries, and migrations before review.

## Security & Configuration Tips
Store secrets in `.env`, consult `ENV.md` before adding keys, and never commit `.env` or `storage/` content. After config, queue, or routing updates, run `php artisan config:cache` and `php artisan route:cache`, then restart listeners (`php artisan queue:listen --tries=1`). Use `config()` instead of `env()` at runtime.

## Agent Workflow Essentials
Begin with `search-docs ['topic']` and `list-artisan-commands`, then use Boost helpers (`tinker`, `database-query`, `browser-logs`, `php artisan pail`, `php artisan optimize:clear`) for diagnostics. Reuse existing Blade components, capture reusable factory states, and add new docs only when requested.
