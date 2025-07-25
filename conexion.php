<?php
$host = 'db.qokxguweyxmgwylvtcgv.supabase.co'; // Solo el host, sin "postgresql://"
$port = '5432';
$dbname = 'postgres'; // nombre de la base de datos
$user = 'postgres';  // usuario correcto
$password = 'tssped131328'; // tu contraseña

try {
  $conexion = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexión exitosa a Supabase PostgreSQL.";
} catch (PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>



