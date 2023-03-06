<!DOCTYPE html>
<html>
<head>
	<title>Personajes Creados</title>
        
        <link rel="stylesheet" type="text/css" href="../css/mostrarpersonajes.css">
</head>
<body>
	<h1>Personajes Creados</h1>
	<?php
	include '../resources/conexion.php';
	
	?>
	<table>
            <thead>
		<tr>
			<th>Retrato</th>
                        <th>ID Personaje</th>
			<th>ID Campaña</th>
                        <th>Nombre</th>
			<th>Apellido</th>
                        <th>Raza</th>
			<th>Sexo</th>
                        <th>Clase</th>
			<th>Deidad</th>
			<th>Pais</th>
                        
            
		</tr>
                </thead>
                <tbody>
	<?php
		$get_all = $dbh->prepare("SELECT * FROM personajes");
		$get_all->execute();
		while($fila = $get_all->fetch(PDO::FETCH_OBJ)){
echo "<tr><td><img src='../retratos/$fila->retrato' alt='retrato de $fila->nombre' style='vertical-align: middle;'></td><td>$fila->id_personaje</td><td>$fila->id_campaña</td><td>$fila->nombre</td><td>$fila->apellido</td><td>$fila->raza</td><td>$fila->sexo</td><td>$fila->clase</td><td>$fila->deidad</td><td>$fila->pais</td></tr>";
	}
	


?>
	</table>
        
        
        <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../index.php" class="btn btn-default">Regresar</a>
						
					</div>
</body>
</html>