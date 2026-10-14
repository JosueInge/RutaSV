<?php
// Footer Invitados
if (!function_exists('icono')) {
  require_once __DIR__ . '/includes/icons.php';
  require_once __DIR__ . 'footer.css';
}

$ftWhatsapp = isset($whatsapp) ? $whatsapp : '#';
$ftEnlaces = [
  ['Inicio',            'home_invitados.php'],
  ['Explorar',          '#'],
  ['Planear mi visita', '#'],
  ['Para negocios',     '#'],
];
?>
<link rel="stylesheet" href="footer.css">
<footer class="footer">
  <div class="footer__marca">
    <a href="home_invitados.php" aria-label="Ir al inicio">
      <img class="footer__logo" src="assets/imagenes/logo_black.png" alt="Logo" width="186" height="78">
    </a>
    <p class="footer__descripcion">Respondemos personas de la comunidad, no un call center.</p>
    <div class="footer__redes">
      <a class="footer__red" href="#" target="_blank" rel="noopener">Facebook</a>
      <a class="footer__red" href="#" target="_blank" rel="noopener">Instagram</a>
    </div>
  </div>

  <nav class="footer__nav" aria-label="Pie de página">
    <?php foreach ($ftEnlaces as $ftItem): ?>
      <a class="footer__link" href="<?= htmlspecialchars($ftItem[1]) ?>"><?= htmlspecialchars($ftItem[0]) ?></a>
    <?php endforeach; ?>
  </nav>

  <div class="footer__contacto">
    <h2 class="footer__titulo">¿Prefieres hablar con alguien?</h2>
    <a class="footer__btn" href="<?= htmlspecialchars($ftWhatsapp) ?>" target="_blank" rel="noopener">
      <?= icono('whatsapp', 38) ?>
      <span>Escríbenos por WhatsApp</span>
    </a>
  </div>
</footer>