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
		Nombre:
		
		<input class="campder" type="text" name="nombre" required>
		<br><br>
		<input class="boton" type="submit" value="Crear">
                <br>
	</form>
        
      
         <div class="col-sm-offset-2 col-sm-10">
						
             <a href="../index.php" class="btn btn-default">Regresar</a>
						
	</div>  
					
					
</body>
</html>