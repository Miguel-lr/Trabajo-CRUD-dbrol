<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$servername = "localhost";

$username = "root";
$password = "";
$dbname = "migueldb";


//CREAR BASE

$sql = "CREATE DATABASE migueldb";

if ($conn->query($sql) === TRUE){
  
    echo "La base se creo.<br>";  
}

else
    
{ echo "Error:" . $conn->error;
      
}



//CREAR CONEXION
$conn = new mysqli($servername, $username, $password, $dbname);  

//COMPROBAR CONEXION
if ($conn->connect_error) {
    
    die("Fallo de conexión:" . $conn->connect_error);    
}
    
echo "Conexión aceptada.<br>";    





//Crear tabla


$sql = "CREATE TABLE IF NOT EXISTS paisanos (

ID_PAISANO SMALLINT UNSIGNED NOT NULL,
NOMBRE VARCHAR(65) NOT NULL,
APELLIDO1 VARCHAR(65) NOT NULL,
APELLIDO2 VARCHAR(65) NOT NULL,
RESIDENCIA VARCHAR(65) NOT NULL,
PRIMARY KEY (ID_PAISANO)

)";


if ($conn->query($sql) === TRUE) {
    
    echo "Tabla creada.";
}        else { 
    echo "No se puede crear tabla." . $conn->error; 
}
        

$conn->close();
    ?>




</body>
</html>