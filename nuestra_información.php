<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include_once("header.php") ?>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&display=swap" rel="stylesheet">
</head>
  <style>
    body {
      margin: 0;
      font-family: 'Cormorant Garamond', serif;
      background-color: #4c1424;
      color: #333;
      padding: 20px;
    }

    .info-novios {
      max-width: 1000px;
      margin: auto;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      padding: 30px;
    }
    .foto-novios {
  width: 50%;
  border-radius: 20px;
  object-fit: cover;
  margin: 0 auto 50px auto;
  display: block;
}


    .contenedor-info {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .novio, .novia {
      flex: 1 1 45%;
      background-color: #fafafa;
      padding: 20px;
      border-radius: 15px;
      border: 1px solid #ddd;
    }

    h2 {
      text-align: center;
      font-size: 32px;
      margin-bottom: 10px;
    }

    .titulo {
      font-size: 24px;
      margin-bottom: 15px;
      text-align: center;
      color: #a67c52;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin: 10px 0;
      font-size: 18px;
    }


    @media (max-width: 768px) {
      .contenedor-info {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
      <main style="margin-top: 90px;">
     <section class="info-novios">
    <img src="multimedia/galeria/1.jpg" alt="Foto de los novios" class="foto-novios">

    <h2>📇 Información de los Novios</h2>

<div class="contenedor-info">
  <!-- NOVIO -->
  <div class="novio">
    <h3 class="titulo">💙 Mario Valenzuela</h3>
    <ul>
      <li>
        <a href="https://wa.me/50257607303" target="_blank">
          📞 Teléfono: +502 5760-7303
        </a>
      </li>
      <li>⛪ Iglesia: Guatemala, Iglesia Madre, Zona 8</li>
      <li>🏦 Banco BANTRAB – Cuenta Monetaria: 2860358532</li>
      <li>
        <a href="mailto:mariovalenzuela1998@gmail.com">
          ✉️ Correo: mariovalenzuela1998@gmail.com
        </a>
      </li>
    </ul>
  </div>

      <!-- NOVIA -->
    <div class="novia">
  <h3 class="titulo">💖 Ester Cucul</h3>
  <ul>
    <li>
      <a href="https://wa.me/qr/CIR44VE2V62TF1 " target="_blank">
        📞 Teléfono: +502 5483-4015
      </a>
    </li>
    <li>⛪ Iglesia: San Salvador, Colonia Ferrocarril</li>
    <li>🏦 Banco BANTRAB – Cuenta Monetaria: 2861312270</li>
    <li>
      <a href="mailto:15.esteralejandra@gmail.com">
        ✉️ Correo: 15.esteralejandra@gmail.com
      </a>
    </li>
  </ul>
</div>


  </section>
></main>
</body>
<footer> <?php include_once("fooder.php") ?></footer>
</html>