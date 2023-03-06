<!DOCTYPE html>
<html>
<head>
	<title>Crear Campaña</title>
	<link rel="stylesheet" type="text/css" href="../css/crearpersonaje.css">
</head>
<body>
	<h1>Crear Personaje</h1>
	<?php
	
	include '../resources/conexion.php';
	
	if (isset($_POST['id_personaje']) && isset($_POST['id_campaña']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['raza']) && isset($_POST['sexo']) && isset($_POST['clase']) && isset($_POST['deidad']) && isset($_POST['pais']) && isset($_FILES['retrato'])) {
		$id_personaje = $_POST['id_personaje'];
		$id_campaña = $_POST['id_campaña'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$raza = $_POST['raza'];
		$sexo = $_POST['sexo'];
		$clase = $_POST['clase'];
		$deidad = $_POST['deidad'];
		$pais = $_POST['pais'];
		
		$retrato = $_FILES['retrato']['tmp_name'];
$retrato_name = $_FILES['retrato']['name'];
$retrato_path = '../retratos/' . $retrato_name;

// Mueve el archivo de la carpeta temporal a la carpeta de destino
move_uploaded_file($retrato, $retrato_path);

$insert_data = $dbh->prepare("INSERT INTO personajes (id_personaje, id_campaña, nombre, apellido, raza, sexo, clase, deidad, pais, retrato) VALUES ('$id_personaje', '$id_campaña', '$nombre', '$apellido', '$raza', '$sexo', '$clase', '$deidad', '$pais', '$retrato_path')");
$insert_data->execute();
        }		
	
	
	?>
	<form action="" method="POST" enctype="multipart/form-data">
		
            <table>
            
                <tr>
                    <td> ID Personaje:</td>
		
                    <td><input class="campder" type="text" name="id_personaje" required></td>
                </tr>
               
                <tr>
                <td>ID Campaña:</td>
		
                <td><input class="campder" type="text" name="id_campaña" required></td>
                </tr>
		
                
                <tr>
                    <td>  Nombre:</td>
		
                    <td><input class="campder" type="text" name="nombre" required></td>
                </tr>
		
                <tr>
                    <td>Apellido:</td>
		
                    <td><input class="campder" type="text" name="apellido" required></td>
                </tr>
		
                
                <tr>
                    <td> Raza:</td>
		
                    <td><input class="campder" type="text" name="raza" required></td>
                </tr>
		
                
                <tr>  
                    
                    <td>Sexo:</td>
		
                    <td><input class="campder" type="text" name="sexo" required></td>
                </tr>
		
                
                <tr>
                    <td>Clase:</td>
		
                    <td><input class="campder" type="text" name="clase" required></td>
		
                </tr>
               
                
                
                
                <tr>
                    <td>Deidad:</td>
		
                <td><input class="campder" type="text" name="deidad" required></td>
		
                </tr>
               
                
                
                
                
                <tr>
                    <td> Pais:</td>
		
                    <td><input class="campder" type="text" name="pais" required></td>
                </tr> 
              
                
                
                <tr>
                    <td> Retrato:</td>
		
                    <td class="espacio" ><input  type="file" name="retrato" accept="image/jpeg" required></td>
		
                </tr>
                
                <tr><td class="espacio"></td></tr>
                
                <tr>
                    <td> <input class="boton" type="submit" value="Crear"></td>
                    
                    
                
          
                
                    <td> <a href="../index.php" class="regresar">Regresar</a></td>
                    
                    
                </tr>
                
                </table>
                
		
	</form>
        
      
					
					
</body>
</html>