<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "UPDATE regalos SET apartado = 1 WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
}

header("Location: wishlist.php");
exit();
?>
