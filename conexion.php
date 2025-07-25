<?php
$host = 'db.qokxguweyxmgwylvtcgv.supabase.co';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres';
$password = 'tssped131328';

try {
  $conexion = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Conexión exitosa a Supabase PostgreSQL.";
} catch (PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>




