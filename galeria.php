<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galería de Boda</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <?php include_once("header.php") ?>
  <style>
    body {
      background-color: #4c1424;
      color: #fff;
      margin: 0;
      padding: 0;
      font-family: 'Cormorant Garamond', serif;
    }
    header {
      text-align: center;
      padding: 30px 15px;
      background-color: #4c1424;
      border-bottom: 2px solid #d6a4a4;
    }
    h1 {
      font-size: 2.2em;
      margin-bottom: 10px;
    }
    .elegante {
      font-family: 'Great Vibes', cursive;
      font-size: 28px;
      color: #ffffff;
      text-align: center;
    }
    .audio-player {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      flex-wrap: wrap;
    }
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 40px 20px;
    }
    .card {
      background: #fff;
      padding: 12px;
      border-radius: 16px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      overflow: hidden;
    }
    .card img {
      width: 100%;
      height: auto;
      border-radius: 12px;
      display: block;
    }
    .video video {
      width: 100%;
      max-width: 700px;
      height: auto;
      border-radius: 12px;
      display: block;
      margin: 20px auto;
    }
    .texto {
      font-size: 18px;
      text-align: center;
      margin: 20px;
    }
    .upload-container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1.5rem;
      background-color: #4B0C1F;
      flex-wrap: wrap;
      text-align: center;
    }
    .upload-btn {
      background-color: #EED3D9;
      color: #4B0C1F;
      font-size: 1.5rem;
      padding: 0.8rem 1.5rem;
      border: none;
      border-radius: 1rem;
      cursor: pointer;
      box-shadow: 0 6px 8px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
      text-decoration: none;
    }
    .upload-btn:hover {
      background-color: #F9E6EA;
      transform: scale(1.05);
    }

    @media (max-width: 600px) {
      h1 { font-size: 1.8em; }
      .elegante { font-size: 24px; }
      .upload-btn {
        font-size: 1.2rem;
        padding: 0.7rem 1.2rem;
      }
    }
  </style>
</head>
<body>
<main style="margin-top: 60px;">
<header>
  <h1>Galería de Fotos</h1>
  <p class="elegante">" Reproduce Nuestra Canción "</p>
  <div class="audio-player">
    <audio controls>
      <source src="multimedia/galeria/the risong.mp3" type="audio/mp3">
      Tu navegador no soporta el elemento de audio.
    </audio>
  </div>
</header>

<div class="gallery">
  <!-- Galería de imágenes insertadas directamente -->
  <div class="card"><img src="multimedia/galeria/1.jpg" alt="Foto 1"></div>
  <div class="card"><img src="multimedia/galeria/2.jpg" alt="Foto 2"></div>
  <div class="card"><img src="multimedia/galeria/3.jpg" alt="Foto 3"></div>
  <div class="card"><img src="multimedia/galeria/4.jpg" alt="Foto 4"></div>
  <div class="card"><img src="multimedia/galeria/5.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/6.jpg" alt="Foto 6"></div>
  <div class="card"><img src="multimedia/galeria/7.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/8.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/9.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/10.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/11.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/12.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/13.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/14.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/15.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/16.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/17.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/19.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/20.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/21.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/22.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/23.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/24.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/25.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/26.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/27.jpg" alt="Foto 5"></div>
  <div class="card"><img src="multimedia/galeria/28.jpg" alt="Foto 5"></div>
  <!-- Puedes seguir agregando más imágenes así -->
</div>

<section>
  <h2 style="border-left: 6px solid #b45f5f; padding-left: 10px;">💍 Video del Compromiso</h2>
  <div class="video">
    <video controls>
      <source src="multimedia/galeria/video.mp4" type="video/mp4">
      Tu navegador no soporta el video.
    </video>
  </div>
</section>

<p class="texto">"Hemos creado una carpeta compartida donde podrás descargar todas las fotos de nuestra boda que desees.<br>
Si capturaste algún momento especial, ¡nos encantaría que lo compartieras también!<br>
Cada imagen representa un recuerdo que queremos atesorar."</p>

<div class="upload-container">
  <a href="https://drive.google.com/drive/folders/1OF7iNC2cSJXRMKPtg_empWnQJRlpzxmT?usp=drive_link" class="upload-btn" target="_blank">
    📤 Sube tus fotos aquí
  </a>
</div>
</main>

<footer><?php include_once("fooder.php") ?></footer>
</body>
</html>

