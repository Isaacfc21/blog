document.addEventListener('DOMContentLoaded', () => {
  const themeButtons = document.querySelectorAll('[data-bs-theme-value]');
  const themeIconUse = document.querySelector('#bd-theme .theme-icon-active use');
  const html = document.documentElement;

  const icons = {
    light: '#sun-fill',
    dark: '#moon-stars-fill',
    auto: '#circle-half'
  };

  themeButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const selectedTheme = btn.getAttribute('data-bs-theme-value');

      // Troca o tema no HTML
      html.setAttribute('data-bs-theme', selectedTheme);

      // Troca o ícone do botão principal
      themeIconUse.setAttribute('href', icons[selectedTheme]);

      // Atualiza o visual dos botões no menu
      themeButtons.forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-pressed', 'false');
        b.querySelector('svg:last-child').classList.add('d-none');
      });

      btn.classList.add('active');
      btn.setAttribute('aria-pressed', 'true');
      btn.querySelector('svg:last-child').classList.remove('d-none');
    });
  });
});

