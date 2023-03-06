<!DOCTYPE html>
<html>
<head>
	<title>Campañas en curso</title>
        
        <link rel="stylesheet" type="text/css" href="../css/mostrarcampaña.css">
</head>
<body>
	<h1>Campañas en curso</h1>
	<?php
	include '../resources/conexion.php';
	
	?>
	<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			
		</tr>
	<?php
		$get_all = $dbh->prepare("SELECT * FROM campaña");
		$get_all->execute();
		while($fila = $get_all->fetch(PDO::FETCH_OBJ)){
			echo "<tr><td>$fila->id_campaña</td><td>$fila->nombre</td></tr>";
		}
	?>
	</table>
        
        
        <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../index.php" class="btn btn-default">Regresar</a>
						
					</div>
</body>
</html>