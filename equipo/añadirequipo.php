<!DOCTYPE html>
<html>
<head>
	<title>Crear Campaña</title>
        <link rel="stylesheet" type="text/css" href="../css/añadirequipo.css">
</head>
<body>
	<h1>Añadir Equipamiento</h1>
	<?php
	
	include '../resources/conexion.php';
	
if (isset($_POST['id_personaje']) && isset($_POST['mano_izquierda']) && isset($_POST['mano_derecha']) && isset($_POST['yelmo']) && isset($_POST['torso']) && isset($_POST['hombreras']) && isset($_POST['guantes']) && isset($_POST['piernas']) && isset($_POST['pies']) && isset($_POST['abalorio'])) {

                $id_personaje = $_POST['id_personaje'];
		$mano_izquierda = $_POST['mano_izquierda'];
		$mano_derecha = $_POST['mano_derecha'];
		$yelmo = $_POST['yelmo'];
		$torso = $_POST['torso'];
		$hombreras = $_POST['hombreras'];
		$guantes = $_POST['guantes'];
		$piernas = $_POST['piernas'];
		$pies = $_POST['pies'];
                $abalorio = $_POST['abalorio'];
	

$insert_data = $dbh->prepare("INSERT INTO equipamiento (id_personaje, mano_izquierda, mano_derecha, yelmo, torso, hombreras, guantes, piernas, pies, abalorio) VALUES ('$id_personaje', '$mano_izquierda', '$mano_derecha', '$yelmo', '$torso', '$hombreras', '$guantes', '$piernas', '$pies', '$abalorio')");
$insert_data->execute();
        		
 }
	
	?>
	<form action="" method="POST" >
            <table>
                <tr>
                    <td> ID Personaje:</td>
		
                    <td><input class="campder" type="text" name="id_personaje" required></td>
                </tr>
                
                <tr>
                <td>Mano Izquierda:</td>
		
                <td><input class="campder" type="text" name="mano_izquierda" required></td>
		
                </tr>
                
                <tr>
                <td>Mano Derecha:</td>
		
                <td><input class="campder" type="text" name="mano_derecha" required></td>
		
                </tr>
                
                <tr>
                    <td>Yelmo:</td>
		
                    <td><input class="campder" type="text" name="yelmo" required></td>
		
                </tr>
                
                <tr>
                    <td>Torso:</td>
		
                    <td><input class="campder" type="text" name="torso" required></td>
		
                </tr>
                
                <tr>
                    <td>Hombreras:</td>
		
                    <td><input class="campder" type="text" name="hombreras" required></td>
		
                </tr>
                
                <tr>
                    <td>Guantes:</td>
		
                    <td><input class="campder" type="text" name="guantes" required></td>
		
                </tr>
                
                <tr>
                
                    <td>Piernas:</td>
		
                    <td><input class="campder" type="text" name="piernas" required></td>
		
                </tr>
                
                
                <tr>
                
                    <td>Pies:</td>
		
                    <td><input class="campder" type="text" name="pies" required></td>
		
                </tr>
                
                <tr>
                    <td>Abalorio:</td>
		
                    <td><input class="campder" type="text" name="abalorio" required></td>
		
                </tr>    
                
                <tr>
                    <td><input class="boton" type="submit" value="Crear"></td>
        
                    
               
                    <td><a href="../index.php" class="btn btn-default">Regresar</a></td>
            
                </tr>
            </table>
        
        </form>
        
      
        
						
            
						
	 
					
					
</body>
</html>