<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubicación de la Boda</title>
   <?php include_once("header.php") ?>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">
</head>
<style>
  .ubicaciones-section {
  background-color: #f5f0e6; /* beige */
  padding: 40px 20px;
  text-align: center;
  font-family: 'Cormorant Garamond', serif;
}

.ubicaciones-section h2 {
  color: #4b0000; /* corinto oscuro */
  font-size: 42px;
  margin-bottom: 40px;
}

.ubicaciones-container {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}

.ubicacion-card {
  background-color: #ffffff;
  border: 2px solid #4b0000;
  border-radius: 18px;
  padding: 20px;
  width: 100%;
  max-width: 450px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s;
}

.ubicacion-card:hover {
  transform: translateY(-5px);
}

.ubicacion-card h3 {
  color: #4b0000;
  font-size: 28px;
  margin-bottom: 10px;
}

.ubicacion-card p {
  color: #111111; /* negro */
  font-size: 18px;
  margin-bottom: 15px;
}

.ubicacion-card iframe {
  width: 100%;
  height: 250px;
  border: none;
  border-radius: 10px;
}

/* Responsivo */
@media screen and (max-width: 768px) {
  .ubicaciones-container {
    flex-direction: column;
    align-items: center;
  }
}

</style>
<body>
<section class="ubicaciones-section">
  <h2>Ubicación de Nuestra Boda</h2>

  <div class="ubicaciones-container">
    <div class="ubicacion-card">
      <h3>Ceremonia-Iglesia Madre</h3>
      <p>33 calle B 2-21 zona 8</p>
     <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3860.6837482039873!2d-90.528531!3d14.617082999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTTCsDM3JzAxLjUiTiA5MMKwMzEnNDIuNyJX!5e0!3m2!1ses!2ssv!4v1753386784558!5m2!1ses!2ssv" 
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="ubicacion-card">
      <h3>Recepción</h3>
      <p>Club Mariscal Diagonal 20, 763, Zona 11</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.884515633137!2d-90.54936230000001!3d14.6056539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a14d7fcd5e25%3A0x3ba0493a41f957!2sClub%20Mariscal!5e0!3m2!1ses!2ssv!4v1753386913568!5m2!1ses!2ssv" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

</body>
<footer> <?php include_once("fooder.php") ?></footer>
</html>
