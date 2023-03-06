<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Crear conexion
$conn = new mysqli($servername, $username, $password);
// Comprobar conexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE juegoderol";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada. ";
} else {
  echo "No se puede crear la base de datos. " . $conn->error;
}

$conn->close();
?>

</body>
</html>