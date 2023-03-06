<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/creardb.css">
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
  echo "Base de datos creada.<br><br> ";
} else {
  echo "No se puede crear la base de datos. " . $conn->error;
}

$conn->close();
?>
    
   <!-- CREAR CAMAPAÑA -->    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juegoderol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Campaña (
  id_campaña SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_campaña)

)";


if ($conn->query($sql) === TRUE) {
  echo "Tabla Campaña creada.<br><br>";
} else {
  echo "No se pudo crear la tabla de Camapaña: " . $conn->error;
}

$conn->close();
?>

 
    
    
    <!-- ######################## PERSONAJE ############################# -->    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juegoderol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Personajes (
  id_personaje SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_campaña SMALLINT UNSIGNED NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  raza VARCHAR(50) NOT NULL,
  sexo VARCHAR(50) NOT NULL,
  clase VARCHAR(50) NOT NULL,
  deidad VARCHAR(50) NOT NULL,
  pais VARCHAR(50) NOT NULL,
  retrato VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_personaje),
  CONSTRAINT FK_Campaña_Personajes FOREIGN KEY (id_campaña) REFERENCES Campaña(id_campaña) ON DELETE CASCADE

)";


if ($conn->query($sql) === TRUE) {
  echo "Tabla de Personajes creada.<br><br>";
} else {
  echo "No se pudo crear la tabla de Personajes: " . $conn->error;
}

$conn->close();
?>
    
    <!-- ######################## EQUIPAMIENTO ############################# --> 
    
    
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juegoderol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Equipamiento (
  id_equipamiento SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_personaje SMALLINT UNSIGNED NOT NULL,
  mano_izquierda VARCHAR(50) NOT NULL,
  mano_derecha VARCHAR(50) NOT NULL,
  yelmo VARCHAR(50) NOT NULL,
  torso VARCHAR(50) NOT NULL,
  hombreras VARCHAR(50) NOT NULL,
  guantes VARCHAR(50) NOT NULL,
  piernas VARCHAR(50) NOT NULL,
  pies VARCHAR(50) NOT NULL,
  abalorio VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_equipamiento),
  CONSTRAINT FK_Personajes_Equipamiento FOREIGN KEY (id_personaje) REFERENCES Personajes(id_personaje) ON DELETE CASCADE

)";


if ($conn->query($sql) === TRUE) {
  echo "Tabla de Inventario creada.<br><br>";
} else {
  echo "No se pudo crear la tabla Inventario: " . $conn->error;
}

$conn->close();
?>  
 
    <!-- ######################## TABLA USUARIO ############################# -->    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juegoderol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE user_tbl (
  userID SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  PRIMARY KEY (userID)

)";


if ($conn->query($sql) === TRUE) {
  echo "Tabla Usuario creada.<br><br>";
} else {
  echo "No se pudo crear la Tabla Usuario: " . $conn->error;
}

$conn->close();
?>   







   <!-- ######################## CREAR USUARIO ############################# -->    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juegoderol";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO user_tbl (username, password) VALUES ('lndadmin', 'abc');";


if ($conn->query($sql) === TRUE) {
  echo "Usuario creado.<br><br>";
} else {
  echo "No se pudo crear el usuario. " . $conn->error;
}


$conn->close();
?>    

    <div >

           <a href="index.php" class="back">Regresar</a>
						
    </div>    
</body>
</html>