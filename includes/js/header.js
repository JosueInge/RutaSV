(function () {
  var toggle = document.querySelector('.header__toggle');
  var nav = document.getElementById('menu-principal');
  if (!toggle || !nav) return;

  toggle.addEventListener('click', function () {
    var abierto = nav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', abierto);
    toggle.setAttribute('aria-label', abierto ? 'Cerrar menú' : 'Abrir menú');
  });
})();