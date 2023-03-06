<html>
   
   <head>
      <title>Borrar Personaje</title>
      <link rel="stylesheet" type="text/css" href="../css/borrarpersonaje.css">
   </head>
   
   <body>
       <h1>Borrar Personaje</h1>
      <?php
         if(isset($_POST['id'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $id_personaje = $_POST['id'];
            
            $sql = "DELETE FROM personajes WHERE id_personaje = $id_personaje" ;
            mysqli_select_db($conn,'juegoderol');
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               die('No se pudo borrar el Personaje: ' . mysqli_error());
            }
            
            echo "Personaje borrado con éxito.\n";
            
            mysqli_close($conn);
         }else {
            ?>
        	<form action="<?php $_PHP_SELF ?>" method="POST">
		
                    <table>
                   
                        <tr>
                            <td class="idb"> ID:</td>
                            <td><input  type="text" name="id" required></td>
                        </tr>
                <br>
                <tr>
                    <td> <input class="boton" name = "delete" type = "submit" id = "delete" value = "Borrar"></td>
                    <td><a href="../index.php" class="regresar">Regresar</a></td>
                </tr>

                    </table>                 
	</form>
                          
                       
                     
                  
               </form>
            <?php
         }
      ?>
       
      
   </body>
</html>