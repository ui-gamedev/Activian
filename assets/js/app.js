const cookie = {
  get(name) {
    return document.cookie
      .split('; ')
      .find((row) => row.startsWith(`${name}=`))
      ?.split('=')[1];
  },
  set(name, value) {
    document.cookie = `${name}=${value}; path=/; max-age=31536000; SameSite=Lax`;
  },
};

const state = {
  lang: cookie.get('activian_lang') || 'en',
  theme: cookie.get('activian_theme') || 'dark',
  messages: {},
};

const getValue = (path) => path.split('.').reduce((value, key) => value?.[key], state.messages);

function renderList(element, items) {
  element.innerHTML = '';
  if (!Array.isArray(items)) return;

  items.forEach((item) => {
    const listItem = document.createElement('li');
    if (typeof item === 'string') {
      listItem.textContent = item;
    } else {
      const strong = document.createElement('strong');
      strong.textContent = item.title;
      listItem.append(strong, ` — ${item.text}`);
      listItem.classList.add('rule-item');
    }
    element.appendChild(listItem);
  });
}

async function applyLanguage(lang) {
  const response = await fetch(`assets/lang/${lang}.json`, { cache: 'no-cache' });
  state.messages = await response.json();
  state.lang = lang;
  document.documentElement.lang = lang;
  document.querySelector('[data-lang-toggle]').textContent = lang.toUpperCase();
  cookie.set('activian_lang', lang);

  document.querySelectorAll('[data-i18n]').forEach((element) => {
    const value = getValue(element.dataset.i18n);
    if (typeof value === 'string') element.textContent = value;
  });

  document.querySelectorAll('[data-i18n-list]').forEach((element) => {
    renderList(element, getValue(element.dataset.i18nList));
  });
}

function applyTheme(theme) {
  state.theme = theme;
  document.documentElement.dataset.theme = theme;
  document.querySelector('[data-theme-toggle]').textContent = theme === 'dark' ? '🌙' : '☀️';
  cookie.set('activian_theme', theme);
}

function initReveal() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) entry.target.classList.add('is-visible');
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));
}

function initScrollTop() {
  const button = document.querySelector('.scroll-top');
  window.addEventListener('scroll', () => {
    button.classList.toggle('is-visible', window.scrollY > 500);
  });
  button.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

document.addEventListener('DOMContentLoaded', () => {
  applyTheme(state.theme);
  applyLanguage(state.lang).catch(() => applyLanguage('en'));
  initReveal();
  initScrollTop();

  document.querySelector('[data-theme-toggle]').addEventListener('click', () => {
    applyTheme(state.theme === 'dark' ? 'light' : 'dark');
  });

  document.querySelector('[data-lang-toggle]').addEventListener('click', () => {
    applyLanguage(state.lang === 'en' ? 'ru' : 'en');
  });
});
