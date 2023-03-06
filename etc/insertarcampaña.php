<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

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

$sql = "INSERT INTO Campaña (id_campaña, nombre)
VALUES ('1', 'Gibsonland')";

if ($conn->query($sql) === TRUE) {
  echo "La aventura se ha creado con éxito";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
   
    
</body>
</html>