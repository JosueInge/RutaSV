<?php
require_once __DIR__ . '/includes/icons.php';

$titulo = 'Inicio';
$paginaActiva = 'inicio';
$whatsapp = 'https://wa.me/50300000000'; // TODO: número real

$beneficios = [
  ['check',    'Información verificada por los negocios'],
  ['whatsapp', 'Contacto directo por WhatsApp'],
  ['heart',    'Tu dinero llega a la comunidad'],
];

$categorias = [
  ['comer',     'Dónde comer',               'Comedores locales · Marisquerías',       '#E7B84B'],
  ['paseo',     'Paseos y pesca',            'Paseo en lancha · Pesca · Kayak y aves', '#4D9BAA'],
  ['comunidad', 'Experiencias comunitarias', 'Talleres · Liberación de tortugas',      '#DCE9DF'],
];

// El primer valor es el nombre real del archivo en assets/imagenes/
// (cambia almuerzo.jpg y artesania.jpg por los nombres de tus imágenes)
$experiencias = [
  ['lancha.jpg',     'Paseo en lancha por el estero',            'Recorre el estero con lancheros de la comunidad.',      '$6.75'],
  ['food.png',  'Almuerzo de mariscos en comedor familiar', 'Pescado y mariscos del día, preparados por la familia.', '$8.00'],
  ['artesanias1.jpg', 'Taller de artesanía con fibras locales',   'Aprende a tejer con artesanas de la zona.',             '$8.00'],
];

$pasos = [
  ['Cuéntanos qué buscas',  'Días, con quién viajas y qué te gusta.'],
  ['Recibe tu ruta',        'Un itinerario con negocios verificados.'],
  ['Disfruta y apoya lo local', 'Lo que gastas queda en la comunidad.'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($titulo) ?> | Puerto El Triunfo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <?php include __DIR__ . '/header.php'; ?>

  <main>
    <!-- Contenedor principal -->
    <section class="hero">
      <div class="hero__texto">
        <h1 class="hero__titulo">Descubre Puerto El Triunfo como lo viven sus comunidades</h1>
        <hr class="hero__separador">
        <p class="hero__subtitulo">Comida y actividades verificadas por quienes las hacen posibles, y tu dinero llega a quien te atiende.</p>
        <div class="hero__botones">
          <a class="btn btn--primario" href="#">Planea mi visita</a>
          <a class="btn btn--secundario" href="#">Explora</a>
        </div>
      </div>

      <div class="hero__imagenes">
        <span class="hero__fondo hero__fondo--1"></span>
        <img class="hero__img hero__img--1" src="assets/imagenes/imagen1.png" alt="Estero de Puerto El Triunfo al atardecer">
        <span class="hero__fondo hero__fondo--2"></span>
        <img class="hero__img hero__img--2" src="assets/imagenes/cocos.jpg" alt="Malecón de Puerto El Triunfo">
      </div>
    </section>

    <!-- Contenedor secundario -->
    <section class="beneficios" aria-label="Beneficios">
      <?php foreach ($beneficios as $i => [$icono, $texto]): ?>
        <div class="beneficio">
          <span class="beneficio__icono"> <?= icono($icono, 39) ?></span>
          <span class="beneficio__texto"><?= htmlspecialchars($texto) ?></span>
        </div>
      <?php endforeach; ?>
    </section>

    <!-- ¿Qué buscas? -->
    <section class="busca">
      <h2 class="busca__titulo">¿Qué buscar?</h2>
      <div class="busca__lista">
        <?php foreach ($categorias as [$icono, $nombre, $detalle, $color]): ?>
          <a class="categoria" href="#">
            <span class="categoria__circulo" style="background:<?= $color ?>"><?= icono($icono, 39) ?></span>
            <span>
              <strong class="categoria__titulo"><?= htmlspecialchars($nombre) ?></strong>
              <span class="categoria__detalle"><?= htmlspecialchars($detalle) ?></span>
            </span>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Rutas -->
    <section class="ruta">
      <div class="ruta__texto">
        <h2 class="ruta__titulo">Pregúntale a la ruta</h2>
        <p class="ruta__descripcion">Cuéntale qué te gusta y cuántos días tienes. El asistente arma tu itinerario solo con negocios verificados.</p>
        <a class="ruta__btn" href="#">Armar mi ruta con el asistente</a>
      </div>
      <img class="ruta__img" src="assets/imagenes/imagen_chat.png" alt="Asistente de rutas" width="626" height="270">
    </section>

    <!-- Experiencias destacadas + Cómo funciona -->
    <section class="experiencias">
      <h2 class="experiencias__titulo">Experiencias destacadas</h2>
      <p class="experiencias__subtitulo">Contenido de ejemplo: se sustituye con los negocios confirmados.</p>

      <div class="experiencias__lista">
        <?php foreach ($experiencias as [$img, $nombre, $descripcion, $precio]): ?>
          <article class="tarjeta">
            <img class="tarjeta__img" src="assets/imagenes/<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($nombre) ?>" width="364" height="166">
            <div class="tarjeta__cuerpo">
              <span class="tarjeta__sello"><?= icono('check', 18) ?> Verificado por la comunidad</span>
              <h3 class="tarjeta__titulo"><?= htmlspecialchars($nombre) ?></h3>
              <p class="tarjeta__descripcion"><?= htmlspecialchars($descripcion) ?></p>
              <p class="tarjeta__precio"><strong>Desde <?= $precio ?> por persona · </strong><span>referencial</span></p>
              <p class="tarjeta__apoyo"><?= icono('heart', 22) ?> <span>Apoya a la cooperativa de lancheros</span></p>
              <a class="tarjeta__btn" href="<?= htmlspecialchars($whatsapp) ?>" target="_blank" rel="noopener"><?= icono('whatsapp', 20) ?> Contactar por WhatsApp</a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <h2 class="como__titulo">Cómo funciona</h2>
      <div class="como__lista">
        <?php foreach ($pasos as $n => [$paso, $detalle]): ?>
          <article class="paso">
            <span class="paso__numero"><?= $n + 1 ?></span>
            <h3 class="paso__titulo"><?= htmlspecialchars($paso) ?></h3>
            <p class="paso__detalle"><?= htmlspecialchars($detalle) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Cada visita 
    <section class="visita">
      <img class="visita__img" src="assets/imagenes/comunidad.png" alt="" width="108" height="108">
      <div class="visita__texto">
        <h2 class="visita__titulo">Cada visita deja más en la comunidad</h2>
        <p class="visita__subtitulo">Lo que gastas llega directamente a las familias, asociaciones y negocios que te atienden.</p>
      </div>
    </section> -->

    <!-- Negocio -->
    <section class="negocio">
      <div class="negocio__texto">
        <h2 class="negocio__titulo">¿Tienes un negocio en Puerto El Triunfo?</h2>
        <p class="negocio__subtitulo">Únete y recibe clientes directos.</p>
      </div>
      <a class="negocio__btn" href="#">Registrar mi negocio</a>
    </section>
  </main>
  <?php include __DIR__ . '/footer.php'; ?>

  <script src="includes/js/header.js"></script>
</body>
</html>