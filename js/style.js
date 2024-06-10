document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.querySelector('.menu-toggle input');
  const nav = document.querySelector('nav ul');
  const navLinks = document.querySelectorAll('nav ul li a');

  menuToggle.addEventListener('change', function () {
    nav.classList.toggle('slide', menuToggle.checked);
  });

  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      nav.classList.remove('slide');
      menuToggle.checked = false;
    });
  });
});
