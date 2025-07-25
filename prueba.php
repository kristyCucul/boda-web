<?php
include("conexion.php");

if ($conexion) {
  $stmt = $conexion->query("SELECT NOW()");
  $fila = $stmt->fetch(PDO::FETCH_ASSOC);
  echo "La conexión funciona. Fecha actual desde PostgreSQL: " . $fila['now'];
} else {
  echo "La conexión no se pudo establecer.";
}
?>
