<?php
$host = 'postgresql://postgres:[YOUR-PASSWORD]@db.qokxguweyxmgwylvtcgv.supabase.co:5432/postgres';
$dbname = 'postgres'; // cuidado con el carácter especial (&)
$usuario = 'postgres';
$contrasena = 'tssped131328';

try {
  $conexion = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexión exitosa a Supabase PostgreSQL.";
} catch (PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>


