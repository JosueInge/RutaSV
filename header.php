<?php

$paginaActiva = $paginaActiva ?? '';
$whatsapp = 'https://wa.me/50300000000';

$enlaces = [
    'explorar' => ['Explorar', '#'],
    
    'negocios' => ['Para negocios', '#'],
];
?>
<header class="header">
    <a class="header_logo" href="home_invitados.php" aria-label="Ir al inicio">
        <img src="assets/imagenes/logo.png" alt="Logo" width="194" height="73">
    </a>

    <button class="header_toggle" type="button" aria-expanded="false" aria-controls="menu-principal" aria-label="Abrir menu">
        <span></span><span></span><span></span>
    </button>

    <nav class="header_nav" id="menu-principal" aria-label="Principal">
        <a class="header_link header_link--activo" href="index.php"
        <?= $paginaActiva === 'inicio' ? 'aria-current="page"' : '' ?>>Inicio</a>

    <?php foreach ($enlaces as $clave => [$texto, $url]): ?>
        <a class="header_link" href="<?= htmlspecialchars($url) ?>"
        <?= $paginaActiva === $clave ? 'aria-current="page"': '' ?>><?= htmlspecialchars($texto) ?></a>
    <?php endforeach; ?>

    <a class="header_btn" href="<?= htmlspecialchars($whatsapp) ?>" target="_black" rel="noopener">
            <path d="M12.04 2a9.93 9.93 0 0 0-8.5 15.07L2 22l5.07-1.5A9.94 9.94 0 1 0 12.04 2Zm0 18.2a8.2 8.2 0 0 1-4.18-1.14l-.3-.18-3 .88.9-2.93-.2-.31a8.2 8.2 0 1 1 6.78 3.68Zm4.5-6.14c-.25-.12-1.46-.72-1.69-.8-.23-.09-.39-.13-.56.12-.16.25-.64.8-.78.97-.14.16-.29.18-.54.06a6.7 6.7 0 0 1-3.3-2.88c-.25-.43.25-.4.72-1.33.08-.16.04-.3-.02-.42-.06-.12-.56-1.35-.76-1.85-.2-.48-.41-.42-.56-.43h-.48c-.16 0-.43.06-.66.31-.23.25-.87.85-.87 2.07s.9 2.4 1.01 2.57c.12.16 1.75 2.67 4.24 3.75 1.58.68 2.2.74 3 .62.49-.07 1.46-.6 1.67-1.17.2-.58.2-1.07.14-1.17-.06-.1-.23-.16-.48-.28Z"/>
        </svg>
        <span>Iniciar Sesión</span>
    </a>
</nav>
</header>

<style>
    
  :root {
  --header-alto: 86px;
  --header-linea: 4px;
  --color-fondo: #fff;
  --color-acento: #C97852;
  --color-linea: #C97852;
  --color-boton: #E7B84B;
  --color-verde: #2F6F63;
  --color-texto: #000;
  --separacion: 32px;
}

*, *::before, *::after { box-sizing: border-box; }
body { margin: 0; font-family: 'Inter', Arial, sans-serif; }

/* Encabezado: 86px de alto (incluye la línea inferior de 4px), ancho completo */
.header {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: var(--header-alto);
  padding: 0 24px;
  background: var(--color-fondo);
  border-bottom: var(--header-linea) solid var(--color-acento);
}

.header_logo { display: block; flex: none; line-height: 0; }
.header_logo img { display: block; width: 194px; height: 73px; }

.header_nav {
  display: flex;
  align-items: center;
  gap: var(--separacion);
}

.header_link {
  font-size: 20px;
  font-weight: 400;
  color: var(--color-texto);
  text-decoration: none;
  white-space: nowrap;
}

/* "Inicio": Inter Extra Bold 20 + línea inferior de 66px */
.header_link--activo {
  font-weight: 800;
  color: var(--color-verde);
}
.header_link--activo::after {
  content: "";
  display: block;
  width: 66px;
  height: 0;
  margin-top: 2px;
  border-bottom: 3px solid var(--color-acento);
}

/* Botón WhatsApp: 153 x 38, radio 5px */
.header_btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  width: 153px;
  height: 38px;
  background: var(--color-boton);
  border-radius: 5px;
  color: var(--color-texto);
  font-size: 20px;
  font-weight: 400;
  text-decoration: none;
}
.header_btn-icon { flex: none; width: 22px; height: 22px; }

.header_link:focus-visible,
.header_btn:focus-visible,
.header_toggle:focus-visible {
  outline: 3px solid var(--color-verde);
  outline-offset: 3px;
}

/* Botón hamburguesa (solo móvil/tablet) */
.header_toggle {
  display: none;
  width: 44px;
  height: 44px;
  padding: 10px;
  background: none;
  border: 0;
  cursor: pointer;
  flex-direction: column;
  justify-content: space-between;
}
.header_toggle span {
  display: block;
  height: 3px;
  background: var(--color-texto);
  border-radius: 2px;
}

/* Móvil y tablet: menú desplegable */
@media (max-width: 1100px) {
  .header { padding: 0 16px; }
  .header_logo img { width: auto; max-width: 150px; height: auto; max-height: 56px; }
  .header_toggle { display: flex; }

  .header_nav {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    z-index: 10;
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
    padding: 24px 16px;
    background: var(--color-fondo);
    border-bottom: var(--header-linea) solid var(--color-linea);
  }
  .header_nav.is-open { display: flex; }
  .header_link { font-size: 18px; }
  .header_btn { font-size: 18px; }
}
</style>
