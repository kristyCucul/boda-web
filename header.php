<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mario & Ester</title>

  <!-- Ícono de pestaña -->
  <link rel="icon" href="multimedia/pestaña.ico" type="image/x-icon" />

  <!-- Bootstrap y Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Fuente romántica -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet" />

  <style>
    html, body {
      max-width: 100%;
      overflow-x: hidden;
    }

    body {
      background-color: #f8f3eb;
      font-family: 'Cormorant Garamond', serif;
      padding-top: 70px;
      margin: 0;
    }

    .mi-nav {
      background-color: #000;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1050;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .offcanvas {
      background-color: #4c1424;
    }

    .offcanvas .nav-link {
      color: #f8f3eb !important;
      font-size: 17px;
      transition: all 0.3s ease;
    }

    .offcanvas .nav-link:hover {
      color: #d8b37c !important;
      transform: translateX(5px);
    }

    .offcanvas-title {
      color: #d8b37c;
      font-size: 22px;
      letter-spacing: 4px;
    }

    .verse {
      font-style: italic;
      font-size: 20px;
      color: #d8b37c;
    }

    .img-fluid.rounded {
      border: 4px solid #d8b37c;
      border-radius: 12px;
      width: 100%;
      height: auto;
      max-width: 340px;
    }
  </style>
</head>

<body>
  <!-- Barra de navegación con botón visible siempre -->
  <nav class="navbar mi-nav">
    <div class="container-fluid justify-content-between align-items-center">
      <!-- Título o logo opcional -->
      <span class="navbar-brand text-light ms-2 fw-bold">Mario & Ester</span>

      <!-- Botón del menú desplegable (offcanvas) siempre visible -->
      <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <i class="bi bi-list fs-3"></i>
      </button>
    </div>
  </nav>

  <!-- Menú lateral (offcanvas) visible desde cualquier tamaño -->
  <div class="offcanvas offcanvas-end show-on-all" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom" style="border-color: #d8b37c;">
      <h5 class="offcanvas-title fw-bold text-uppercase" id="offcanvasRightLabel">
        <i class="bi bi-info-circle-fill me-2" style="color: #d8b37c;"></i>Más Información
      </h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>

    <div class="offcanvas-body px-4">
      <ul class="navbar-nav">
        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center" href="principal.php">
            <i class="bi bi-house-door-fill me-2"></i>Inicio
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center" href="ubicación.php">
            <i class="bi bi-geo-alt-fill me-2"></i>Ubicación
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center" href="itinerario.php">
            <i class="bi bi-calendar-heart-fill me-2"></i>Itinerario
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center" href="galeria.php">
            <i class="bi bi-images me-2"></i>Galería
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center" href="indicaciones.php">
            <i class="bi bi-map-fill me-2"></i>Indicaciones
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center" href="nuestra_información.php">
            <i class="bi bi-people-fill me-2"></i>Nuestra Información
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center" href="wishlist.php">
            <i class="bi bi-gift-fill me-2"></i>Si deseas Bendecirnos
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center" href="historia.php">
            <i class="bi bi-stars me-2"></i>Nuestra Historia
          </a>
        </li>
      </ul>

      <hr class="my-4" style="border-color: #d8b37c;" />

      <div class="text-center">
        <img src="multimedia/Mario (1).png" alt="Mario y Ester" class="img-fluid rounded shadow" />
        <p class="mt-3 verse">“Mejores son dos que uno, porque tienen mejor paga por su trabajo.”<br> — Eclesiastés 4:9</p>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS + cierre automático del offcanvas -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Cierra el menú cuando se hace clic en cualquier enlace
    document.querySelectorAll('.offcanvas .nav-link').forEach(link => {
      link.addEventListener('click', () => {
        const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('offcanvasRight'));
        if (offcanvas) offcanvas.hide();
      });
    });
  </script>
</body>
</html>
