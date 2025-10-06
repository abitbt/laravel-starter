# Prettier Setup for Laravel Blade Files

This project uses **Prettier** with the **@shufo/prettier-plugin-blade** plugin to format Blade templates automatically.

## ✅ Setup Complete

The following has been configured:

1. **Prettier** and **@shufo/prettier-plugin-blade** installed
2. `.prettierrc` configuration file created
3. `.prettierignore` to exclude certain files
4. npm scripts added to `package.json`
5. VS Code settings configured (requires extension)

## 📋 Requirements

- **Node.js** and **npm** (already installed)
- **PHP 7.4+** must be in your PATH (required by the Blade plugin)
- **VS Code Prettier Extension** (optional, for format-on-save)

## 🚀 Usage

### Format Files Manually

```bash
# Format all Blade, JS, and CSS files
npm run format

# Check formatting without making changes
npm run format:check

# Format only Blade files
npm run format:blade

# Format only JavaScript files
npm run format:js

# Format only CSS files
npm run format:css
```

### VS Code Integration (Recommended)

1. **Install the Prettier extension:**
   - Open VS Code
   - Press `Cmd+Shift+X` to open Extensions
   - Search for "Prettier - Code formatter" (by Prettier)
   - Click Install

2. **Verify settings:**
   - Settings are already configured in `.vscode/settings.json`
   - Blade files will auto-format on save

3. **Format on demand:**
   - Open any `.blade.php` file
   - Press `Shift+Option+F` (or right-click → Format Document)

## ⚙️ Configuration

### `.prettierrc` Settings

```json
{
  "plugins": ["@shufo/prettier-plugin-blade"],
  "printWidth": 120,
  "tabWidth": 2,
  "useTabs": false,
  "semi": true,
  "singleQuote": true,
  "trailingComma": "es5",
  "bracketSpacing": true,
  "arrowParens": "avoid",
  "overrides": [
    {
      "files": ["*.blade.php"],
      "options": {
        "parser": "blade",
        "printWidth": 120,
        "tabWidth": 2,
        "wrapAttributes": "auto",
        "sortTailwindcssClasses": true
      }
    }
  ]
}
```

### Blade-Specific Options

- **`parser: "blade"`** - Uses the Blade parser for `.blade.php` files
- **`printWidth: 120`** - Wraps lines at 120 characters
- **`tabWidth: 2`** - Uses 2 spaces for indentation
- **`wrapAttributes: "auto"`** - Automatically wraps HTML attributes when needed
- **`sortTailwindcssClasses: true`** - Sorts Tailwind CSS classes alphabetically

## 🎯 What Gets Formatted

- ✅ Blade templates (`.blade.php`)
- ✅ JavaScript files (`.js`)
- ✅ CSS files (`.css`)

## 🚫 What's Ignored

- `/node_modules`
- `/vendor`
- `/public/build`
- Minified files (`*.min.js`, `*.min.css`)
- Cache and storage directories

## 💡 Tips

1. **Format before committing:**
   ```bash
   npm run format
   git add .
   git commit -m "Your message"
   ```

2. **Check formatting in CI/CD:**
   ```bash
   npm run format:check
   ```

3. **Customize settings:**
   - Edit `.prettierrc` to change formatting rules
   - Add files/folders to `.prettierignore` to skip formatting

## 🐛 Troubleshooting

### "PHP not found" Error
The Blade plugin requires PHP to be available in your PATH.

**Check if PHP is installed:**
```bash
php --version
```

**If not found, install PHP:**
```bash
# macOS (with Homebrew)
brew install php

# Or use the system PHP
export PATH="/usr/bin:$PATH"
```

### Formatting Not Working in VS Code
1. Make sure the Prettier extension is installed
2. Check that `.blade.php` files are associated with `blade` language
3. Verify VS Code settings in `.vscode/settings.json`

### Slow First Run
The first time you format, the Blade plugin needs to parse PHP. Subsequent runs will be faster.

## 📚 Resources

- [Prettier Documentation](https://prettier.io/docs/en/index.html)
- [@shufo/prettier-plugin-blade](https://github.com/shufo/prettier-plugin-blade)
- [Prettier VS Code Extension](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)

## 🎨 Example

**Before formatting:**
```blade
<div class="card">
<div class="card-header">
<h3>Title</h3>
</div>
</div>
```

**After formatting:**
```blade
<div class="card">
  <div class="card-header">
    <h3>Title</h3>
  </div>
</div>
```

---

**All set!** Your Blade files are now ready to be formatted with Prettier. 🎉
