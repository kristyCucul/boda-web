 <?php include_once("header.php") ?>
<?php
include('conexion.php');

// Apartar regalo si se hace clic en el botón
if (isset($_POST['apartado_id'])) {
    $id = intval($_POST['apartado_id']);
    $conn->query("UPDATE regalos SET apartado = true WHERE id = $id");
}

// Obtener regalos
$resultado = $conn->query("SELECT * FROM regalos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Wishlist de Boda</title>
  <style>
    body {
      font-family: 'Georgia', serif;
      background-color: #4c1424;
      margin: 0;
      padding: 40px;
      color: #fff8f2 ;
    }

    h1 {
      text-align: center;
      font-size: 2.5em;
      color: #ffffffff;
      margin-bottom: 40px;
    }
        .elegante {
      font-family: 'Cormorant Garamond', cursive;
      font-size: 18px;
      color: #ffffff;
      text-align: center;
    }

    .lista-regalos {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .regalo {
      background: #fff;
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      text-align: center;
    }

    .regalo img {
      max-width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 15px;
      margin-bottom: 15px;
    }

    .regalo h3 {
      font-size: 1.2em;
      margin-bottom: 10px;
      color: #000000ff;
    }

    .regalo button {
      background-color: #4c1424;
      color: white;
      border: none;
      padding: 10px 18px;
      border-radius: 12px;
      cursor: pointer;
      font-size: 1em;
      transition: background-color 0.3s;
    }

    .regalo button:hover {
      background-color: #944d5a;
    }

    .apartado {
      color: #999;
      font-weight: bold;
    }
  </style>
</head>
<body>
    <main style="margin-top: 80px;">

  <h1>Si deseas bendecirnos 💖</h1>
  <p class="elegante"> Hemos preparado esta lista con algunos detalles que serían de gran ayuda y bendición en nuestra nueva vida juntos. Si en tu corazón deseas apoyarnos con uno de estos regalos, puedes marcarlo como apartado para que no se repita. Cada gesto es una semilla de amor que valoramos profundamente.</p>

  <div class="lista-regalos">
  <?php while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="regalo">
      <img src="<?= htmlspecialchars($row['imagen_url']) ?>" alt="<?= htmlspecialchars($row['nombre']) ?>">
      <h3><?= htmlspecialchars($row['nombre']) ?></h3>

      <?php if ($row['apartado']): ?>
        <div class="apartado">✅ Ya ha sido apartado</div>
      <?php else: ?>
        <form method="post">
          <input type="hidden" name="apartado_id" value="<?= $row['id'] ?>">
          <button type="submit">Apartar</button>
        </form>
      <?php endif; ?>
    </div>
  <?php } ?>
</div>

</main>
</body>
<br>
<footer> <?php include_once("fooder.php") ?></footer>
</html>

