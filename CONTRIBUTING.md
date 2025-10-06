# Contributing to Laravel Starter

First off, thank you for considering contributing to Laravel Starter! It's people like you that make this project such a great tool.

## Code of Conduct

This project and everyone participating in it is governed by common sense and mutual respect. Please be kind and courteous to others.

## How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check existing issues as you might find that you don't need to create one. When you create a bug report, include as many details as possible:

- **Use a clear and descriptive title**
- **Describe the exact steps to reproduce the problem**
- **Provide specific examples to demonstrate the steps**
- **Describe the behavior you observed and what behavior you expected**
- **Include screenshots if relevant**
- **Include your environment details** (OS, PHP version, Laravel version, etc.)

### Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues. When creating an enhancement suggestion:

- **Use a clear and descriptive title**
- **Provide a detailed description of the suggested enhancement**
- **Provide specific examples to demonstrate the use case**
- **Explain why this enhancement would be useful**

### Pull Requests

1. **Fork the repository** and create your branch from `main`
2. **Follow the coding standards** outlined below
3. **Write tests** for any new features or bug fixes
4. **Ensure all tests pass** (`vendor/bin/pest`)
5. **Format your code** using Pint and Prettier
6. **Update documentation** if needed
7. **Write clear commit messages**

## Development Workflow

### Setting Up Development Environment

```bash
# Clone your fork
git clone https://github.com/YOUR-USERNAME/laravel-starter.git
cd laravel-starter

# Install dependencies
composer install
npm install

# Set up environment
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate

# Start development
composer run dev
```

### Running Tests

```bash
# Run all tests
vendor/bin/pest

# Run specific test suite
vendor/bin/pest tests/Feature
vendor/bin/pest tests/Unit

# Run with coverage
vendor/bin/pest --coverage
```

### Code Formatting

Before committing, ensure your code is properly formatted:

```bash
# Format PHP code
vendor/bin/pint --dirty

# Format Blade/JS/CSS
npm run format

# Check formatting without changes
vendor/bin/pint --test
npm run format:check
```

## Coding Standards

### PHP

- Follow **PSR-12** coding standards
- Use **type hints** wherever possible
- Write **DocBlocks** for classes and complex methods
- Keep methods **focused and small**
- Use **meaningful variable names**
- Laravel Pint will enforce most style rules

### JavaScript

- Use **ES6+** syntax
- Follow **Airbnb JavaScript Style Guide** principles
- Keep functions **small and focused**
- Use **const** and **let**, avoid **var**
- Prettier will handle formatting

### Blade Templates

- Use **kebab-case** for component names
- Keep templates **clean and readable**
- Extract **reusable components**
- Avoid business logic in views
- Prettier will handle formatting

### Database

- Use **descriptive migration names**
- Include **rollback logic** in migrations
- Use **foreign key constraints** where appropriate
- Add **indexes** for frequently queried columns

### Testing

- Write **feature tests** for user-facing functionality
- Write **unit tests** for isolated logic
- Use **descriptive test names** that explain the scenario
- Follow **AAA pattern** (Arrange, Act, Assert)
- Aim for **high test coverage** on critical paths

## Git Commit Messages

- Use the present tense ("Add feature" not "Added feature")
- Use the imperative mood ("Move cursor to..." not "Moves cursor to...")
- Limit the first line to 72 characters or less
- Reference issues and pull requests liberally after the first line
- Consider starting the commit message with an applicable emoji:
  - ✨ `:sparkles:` when adding a new feature
  - 🐛 `:bug:` when fixing a bug
  - 📝 `:memo:` when writing docs
  - 🎨 `:art:` when improving format/structure
  - ⚡ `:zap:` when improving performance
  - ✅ `:white_check_mark:` when adding tests
  - 🔒 `:lock:` when dealing with security
  - ⬆️ `:arrow_up:` when upgrading dependencies
  - ⬇️ `:arrow_down:` when downgrading dependencies
  - 🔧 `:wrench:` when changing configuration

### Example Commit Messages

```
✨ Add user profile editing functionality

- Add ProfileController with update method
- Create profile edit form view
- Add validation for profile fields
- Include tests for profile updates

Closes #123
```

## Branch Naming

- `feature/description` - New features
- `fix/description` - Bug fixes
- `docs/description` - Documentation changes
- `refactor/description` - Code refactoring
- `test/description` - Adding or updating tests
- `chore/description` - Maintenance tasks

## Pull Request Process

1. **Update the README.md** with details of changes if applicable
2. **Update the CHANGELOG.md** following Keep a Changelog format
3. **Ensure CI/CD passes** all checks
4. **Request review** from maintainers
5. **Address review comments** promptly
6. **Squash commits** if requested before merging

## Project Structure Guidelines

### When Adding New Features

- **Controllers**: Keep them thin, delegate to actions/services
- **Models**: Add relationships, scopes, and accessors/mutators
- **Views**: Extract components for reusability
- **Routes**: Group related routes with middleware
- **Tests**: Mirror the app structure in tests folder

### File Organization

```
app/
├── Actions/          # Single-purpose action classes
├── Http/
│   ├── Controllers/  # HTTP controllers
│   └── Middleware/   # Custom middleware
├── Models/           # Eloquent models
├── Services/         # Business logic services
└── Providers/        # Service providers
```

## Questions?

Feel free to open an issue with your question or reach out to the maintainers.

## License

By contributing to Laravel Starter, you agree that your contributions will be licensed under the MIT License.

---

Thank you for contributing! 🎉
