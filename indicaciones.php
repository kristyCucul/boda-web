<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indicaciones para la Boda</title>
  <?php include_once("header.php") ?>
  <style>
    body {
      background-color: #4b0c1d; /* Corinto oscuro */
      color: #fff;
      font-family: 'Cormorant Garamond', serif;
      margin: 0;
      padding: 0;
    }

    .indicaciones {
      max-width: 800px;
      margin: 40px auto;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .indicaciones h2 {
      text-align: center;
      font-size: 2.5em;
      color: #f8e0e6;
      margin-bottom: 20px;
    }

    .indicaciones ul {
      list-style: none;
      padding-left: 0;
    }

    .indicaciones li {
      background-color: rgba(255, 255, 255, 0.15);
      margin-bottom: 15px;
      padding: 15px 20px;
      border-radius: 10px;
      font-size: 1.2em;
      display: flex;
      align-items: center;
    }

    .indicaciones li::before {
      content: "✔";
      margin-right: 15px;
    }

    @media (max-width: 600px) {
      .indicaciones h2 {
        font-size: 1.8em;
      }

      .indicaciones li {
        font-size: 1em;
      }
    }
  </style>
</head>
<body>
<br>
<br>
<br>
  <div class="indicaciones">
    <h2>Indicaciones para el Gran Día</h2>
    <ul>
      <li>Llega con puntualidad para no perderte ningún momento especial.</li>
      <li>Reverencia en todo momento recuerda que estas en la casa de Dios</li>
      <li>Viste con elegancia y decoro, recordando que esta es una celebración sagrada y se realiza en presencia de Dios.</li>
      <li>Evita usar colores similares al vestido de la novia (blanco, beige).</li>
      <li>No olvides confirmar tu asistencia.</li>
      <li>si tienes niños mantente pendiente de cuidarlos.</li>
      <li>Respeta los tiempos y espacios del evento.</li>
      <li>Apaga o silencia tu celular durante la ceremonia.</li>
      <li>Puedes tomar fotos, pero sin interrumpir a los fotógrafos oficiales.</li>
      <li>Comparte las fotos que tomes en la carpeta que hemos preparado para ti 📷</li>
      <li>Sobre todo... ¡disfruta, celebra y comparte con nosotros este día tan especial!</li>
    </ul>
  </div>

</body>
<footer> <?php include_once("fooder.php") ?></footer>
</html>
