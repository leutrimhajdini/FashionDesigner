const toggle = document.querySelector('.dropdown-toggle');
const menu = document.querySelector('.dropdown-menu');

toggle.addEventListener('click', () => {
  menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
});
