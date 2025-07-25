<?php
// Verifica si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $clave = $_POST['clave'];

  // Verifica la contraseña
  if ($clave === '28092025') {
    header('Location: principal.php');
    exit();
  } else {
    $error = "Contraseña incorrecta. Intenta de nuevo.";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenidos a Nuestra Boda</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('fondo-boda.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Cormorant Garamond', serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #4c1424; /* Corinto */
    }

    .formulario {
      background: rgba(245, 235, 220, 0.95); /* Beige claro */
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.3);
      text-align: center;
      width: 90%;
      max-width: 400px;
    }

    h1 {
      margin-bottom: 15px;
      font-size: 36px;
      color: #4c1424;
    }

    p {
      font-size: 18px;
      color: #222;
    }

    input[type="password"] {
      padding: 12px;
      width: 100%;
      border-radius: 8px;
      border: 1px solid #999;
      font-size: 18px;
      margin-top: 10px;
    }

    button {
      margin-top: 20px;
      background-color: #4c1424; /* Corinto */
      color: #fff;
      border: none;
      padding: 12px 30px;
      border-radius: 8px;
      font-size: 18px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #000; /* Negro */
    }

    .error {
      margin-top: 15px;
      color: #b30000;
      font-size: 16px;
    }

    footer {
      margin-top: 20px;
      text-align: center;
      color: #fff;
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 28px;
      }
      p {
        font-size: 16px;
      }
      .formulario {
        padding: 25px;
      }
    }
  </style>
</head>
<body>

  <div class="formulario">
    <h1>Mario & Ester</h1>
    <p>Ingresa la contraseña para acceder a nuestra página</p>
    <form method="post">
      <input type="password" name="clave" placeholder="Contraseña" required>
      <br>
      <button type="submit">Entrar</button>
    </form>
    <?php if (!empty($error)) : ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
  </div>

</body>
<?php include_once("fooder.php") ?>
</html>
