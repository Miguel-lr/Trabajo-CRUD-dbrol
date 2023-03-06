<!DOCTYPE html>
<html>
<head>
	<title>Equipamiento</title>
        
        <link rel="stylesheet" type="text/css" href="../css/mostrarpersonajes.css">
</head>
<body>
	<h1>Equipamiento</h1>
	<?php
	include '../resources/conexion.php';
	
	?>
	<table>
            <thead>
		<tr>
			<th>Retrato</th>  
                        <th>Nombre</th>
			<th>Mano Izquierda</th>
                        <th>Mano Derecha</th>
			<th>Yelmo</th>
                        <th>Torso</th>
			<th>Hombreras</th>
			<th>Guantes</th>
                        <th>Piernas</th>
                        <th>Pies</th> 
                        <th>Abalorio</th>
                        
            
		</tr>
                </thead>
                <tbody>
	<?php
		$get_all = $dbh->prepare("SELECT personajes.retrato, personajes.nombre, mano_izquierda, mano_derecha, yelmo, torso, hombreras, guantes, piernas, pies, abalorio FROM personajes NATURAL JOIN equipamiento");
		$get_all->execute();
		while($fila = $get_all->fetch(PDO::FETCH_OBJ)){
echo "<tr><td><img src='../retratos/$fila->retrato' alt='retrato de $fila->nombre' style='vertical-align: middle;'></td><td>$fila->nombre</td><td>$fila->mano_izquierda</td><td>$fila->mano_derecha</td><td>$fila->yelmo</td><td>$fila->torso</td><td>$fila->hombreras</td><td>$fila->guantes</td><td>$fila->piernas</td><td>$fila->pies</td><td>$fila->abalorio</td></tr>";
	}
	


?>
	</table>
        
        
        <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../index.php" class="btn btn-default">Regresar</a>
						
					</div>
</body>
</html>