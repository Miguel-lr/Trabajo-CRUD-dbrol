<!DOCTYPE html>
<html>
<head>
	<title>Crear Camapaña</title>
         <link rel="stylesheet" type="text/css" href="../css/campaña.css">
</head>
<body>
	<h1>Crear Campaña</h1>
	<?php
	if (!empty($_POST['nombre'])) {
		include '../resources/conexion.php';
		$nombre = $_POST['nombre'];
		$insert_data = $dbh->prepare("INSERT INTO campaña (nombre) VALUES ('$nombre')");
		$insert_data->execute();
             
          
	}
        
         
	?>
	<form action="" method="POST">
	
            
            
            <table>
  <tr>
    <td>Nombre:</td>
    <td><input type="text" name="nombre" required></td>
  </tr>
  <tr>
    
    <td><input class="boton" type="submit" value="Crear"></td>
    <td><a href="../index.php" class="regresar">Regresar</a></td>
  </tr>
</table>
	

					
</body>
</html>