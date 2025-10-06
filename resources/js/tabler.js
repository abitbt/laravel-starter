// Theme Switcher - handles theme toggle buttons and system preference changes
window.addEventListener('DOMContentLoaded', () => {
  const themeButtons = document.querySelectorAll('[data-bs-theme-value]');
  const themeIcon = document.querySelector('.icon-theme');

  // Function to update the theme icon
  const updateThemeIcon = theme => {
    if (!themeIcon) return;

    // Get the actual theme (resolve 'auto' to light/dark)
    let actualTheme = theme;
    if (theme === 'auto') {
      actualTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }

    // Update icon SVG based on theme
    if (actualTheme === 'dark') {
      // Moon icon for dark mode
      themeIcon.innerHTML =
        '<path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />';
    } else {
      // Sun icon for light mode
      themeIcon.innerHTML =
        '<path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />';
    }
  };

  // Update icon on page load
  const storedTheme = localStorage.getItem('theme') || 'auto';
  updateThemeIcon(storedTheme);

  // Handle theme changes
  themeButtons.forEach(button => {
    button.addEventListener('click', e => {
      e.preventDefault();
      const theme = button.getAttribute('data-bs-theme-value');
      localStorage.setItem('theme', theme);

      if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.setAttribute('data-bs-theme', 'dark');
      } else {
        document.documentElement.setAttribute('data-bs-theme', theme);
      }

      // Update the icon
      updateThemeIcon(theme);
    });
  });

  // Listen for system theme changes when using auto mode
  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    const currentTheme = localStorage.getItem('theme') || 'auto';
    if (currentTheme === 'auto') {
      document.documentElement.setAttribute('data-bs-theme', e.matches ? 'dark' : 'light');
      updateThemeIcon('auto');
    }
  });
});
