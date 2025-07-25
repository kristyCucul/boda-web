<?php
include("conexion.php"); // Asegúrate que este archivo defina $conexion correctamente


// Obtener las fotos
$sql = "SELECT * FROM galeria";
$resultado = $conn->query($sql);
?>

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
    section {
      padding: 40px 15px;
    }
    h2 {
      font-size: 1.8em;
      border-left: 6px solid #b45f5f;
      padding-left: 10px;
      margin-bottom: 20px;
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
      padding: 20px;
    }
    .card {
      background: #fff;
      padding: 10px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .card img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .btn-like {
      background: none;
      border: none;
      font-size: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
      color: black;
      transition: color 0.3s ease;
    }
    .btn-like .heart {
      color: white;
      text-shadow: 1px 1px 0 black;
      transition: color 0.3s ease, text-shadow 0.3s ease;
    }
    .btn-like.liked .heart {
      color: crimson;
      text-shadow: none;
    }
    .btn-like:hover {
      transform: scale(1.2);
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
      font-family: 'Cormorant Garamond', cursive;
      font-size: 18px;
      color: #ffffff;
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
      font-family: 'Cormorant Garamond', serif;
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

    /* Estilos responsive adicionales */
    @media (max-width: 600px) {
      h1 {
        font-size: 1.8em;
      }

      .elegante {
        font-size: 24px;
      }

      .btn-like {
        font-size: 18px;
      }

      .upload-btn {
        font-size: 1.2rem;
        padding: 0.7rem 1.2rem;
      }

      section {
        padding: 30px 10px;
      }
    }


  </style>
</head>
<body>
<main style="margin-top: 60px;">
<header>
  <h1>Galería de Fotos</h1>
  <p class="elegante">" Reproduce Nuestra Cancion "</p>
  <div class="audio-player">
    <audio controls>
      <source src="multimedia/galeria/the risong.mp3" type="audio/mp3">
      Tu navegador no soporta el elemento de audio.
    </audio>
  </div>
</header>
<br>
<div class="gallery">
  <?php while ($row = $resultado->fetch(PDO::FETCH_ASSOC)): ?>
    <div class="card">
      <img src="<?= $row['imagen_url'] ?>" alt="Foto">
      <form method="POST" class="like-form" data-id="<?= $row['id'] ?>">
        <button type="submit" class="btn-like">
          <span class="heart">❤️</span> <span class="like-count"><?= $row['likes'] ?></span>
        </button>
      </form>
    </div>
  <?php endwhile; ?>
</div>

<section>
  <h2>💍 Video del Compromiso</h2>
  <div class="video">
    <video controls>
      <source src="multimedia/galeria/video.mp4" type="video/mp4">
      Tu navegador no soporta el video.
    </video>
  </div>
</section>
<p class="texto">"Hemos creado una carpeta compartida donde podrás descargar todas las fotos de nuestra boda que desees.
  <br>
Si capturaste algún momento especial, ¡nos encantaría que lo compartieras también!
<br> Cada imagen representa un recuerdo que queremos atesorar."</p>
<div class="upload-container">
<a href="https://drive.google.com/drive/folders/1OF7iNC2cSJXRMKPtg_empWnQJRlpzxmT?usp=drive_link" class="upload-btn" target="_blank">
  📤 Sube tus fotos aquí
</a>

</div>


</main>

<script>
document.querySelectorAll('.like-form').forEach(form => {
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const id = this.dataset.id;
    const button = this.querySelector('.btn-like');

    fetch('like.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: 'like_id=' + encodeURIComponent(id)
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        const countSpan = this.querySelector('.like-count');
        countSpan.textContent = data.likes;
        button.classList.add('liked');
      } else {
        alert('Error al dar like');
      }
    });
  });
});
</script>

</body>
<footer> <?php include_once("fooder.php") ?></footer>
</html>


