<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include_once("header.php") ?>
  <!-- Fuente romántica -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&display=swap" rel="stylesheet">
</head>
  <style>
    body {
      background-color: #4c1424; /* Fondo corinto */
      color: #fff;
      

    }

    .contenedor-principal {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 50px;
      flex-wrap: wrap;
    }

    .contenedor-izquierda img {
      max-width: 600px;
      height: 400px;
      border-radius: 12px;
    }

    .bloque-contador {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .contador {
      display: flex;
      justify-content: center;
      gap: 20px;
      font-size: 28px;
      flex-wrap: wrap;
    }

    .contador div {
      background: #fff;
      color: #7a3b3b;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      min-width: 80px;
      text-align: center;
    }

    .contador span {
      display: block;
      font-size: 18px;
      margin-top: 5px;
    }

    .contador-titulo, .contador-titulo2 {
      font-size: 40px;
      margin: 10px 0;
    }

     .itinerario-boda {
    background: linear-gradient(to bottom right, #f5f1e6, #fff);
    padding: 4rem 2rem;
    color: #2c2c2c;
    font-family: 'Cormorant Garamond', serif;
  }

  .titulo-itinerario {
    text-align: center;
    font-size: 2.5rem;
    color: #7b1e3d; /* corinto */
    margin-bottom: 3rem;
    font-weight: bold;
  }

  .timeline {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    max-width: 800px;
    margin: 0 auto;
    position: relative;
  }

  .timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    width: 4px;
    height: 100%;
    background: #7b1e3d;
    transform: translateX(-50%);
  }

  .timeline-item {
    background: #fff;
    border: 1px solid #d2b48c; /* beige */
    padding: 1.5rem;
    position: relative;
    width: 100%;
    max-width: 360px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  }

  .timeline-item:nth-child(odd) {
    align-self: flex-start;
    margin-left: 0;
  }

  .timeline-item:nth-child(even) {
    align-self: flex-end;
    margin-right: 0;
  }

  .timeline-time {
    font-weight: bold;
    color: #000;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
  }

  .timeline-content {
    color: #7b1e3d;
    font-size: 1.1rem;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .timeline::before {
      left: 8px;
    }

    .timeline-item {
      align-self: flex-start !important;
      margin-left: 2rem;
      max-width: 100%;
    }
  }
  </style>
</head>
<body>
  <main style="margin-top: 30px;">
  <div class="contenedor-principal">
    <div class="contenedor-izquierda">
      <img src="multimedia/3.png" alt="Calendario">
    </div>
    <div class="bloque-contador">
      <h2 class="contador-titulo">Faltan...</h2>
      <div class="contador" id="contador">
        <div><div id="dias">0</div><span>Días</span></div>
        <div><div id="horas">0</div><span>Horas</span></div>
        <div><div id="minutos">0</div><span>Minutos</span></div>
        <div><div id="segundos">0</div><span>Segundos</span></div>
      </div>
      <h2 class="contador-titulo2">Para nuestra boda</h2>
    </div>
  </div>

  <script>
    function actualizarContador() {
      const fechaBoda = new Date('2025-09-28T11:00:00');
      const ahora = new Date();
      const diferencia = fechaBoda - ahora;

      if (diferencia > 0) {
        const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
        const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
        const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

        document.getElementById('dias').innerText = dias;
        document.getElementById('horas').innerText = horas;
        document.getElementById('minutos').innerText = minutos;
        document.getElementById('segundos').innerText = segundos;
      } else {
        document.getElementById('contador').innerHTML = "<p>¡Llegó el gran día! 💍✨</p>";
      }
    }
    actualizarContador();
    setInterval(actualizarContador, 1000);
  </script>

<!-- Sección del itinerario -->
<section class="itinerario-boda">
  <h2 class="titulo-itinerario">Itinerario de Nuestra Boda</h2>

  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-time">10:00 a.m – 10:30 a.m</div>
      <div class="timeline-content">Bienvenida de los invitados</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-time">11:00 a.m – 1:30 p.m</div>
      <div class="timeline-content">Ceremonia de bendición</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-time">1:40 p.m – 2:00 p.m</div>
      <div class="timeline-content">Llegada a la recepción</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-time">2:00 p.m – 2:30 p.m</div>
      <div class="timeline-content">Banquete de celebración</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-time">2:40 p.m – 4:30 p.m</div>
      <div class="timeline-content">Recepción y celebración final</div>
    </div>
  </div>
</section>
 
</main>
</body>
<footer> <?php include_once("fooder.php") ?></footer>
</html>
