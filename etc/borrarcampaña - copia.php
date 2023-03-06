<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
      <link rel="stylesheet" type="text/css" href="../css/borrarcampaña.css">
   </head>
   
   <body>
       <h1>Borrar Campaña</h1>
      <?php
         if(isset($_POST['id'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $id_campaña = $_POST['id'];
            
            $sql = "DELETE FROM campaña WHERE id_campaña = $id_campaña" ;
            mysqli_select_db($conn,'juegoderol');
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               die('No se pudo borrar la Campaña: ' . mysqli_error());
            }
            
            echo "Campaña borrada con éxito.\n";
            
            mysqli_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table>
                     
                     <tr>
                         <td class="id">ID :</td>
                        <td><input name = "id" type = "text" 
                           id = "id"></td>
                     </tr>
                     
                     <tr>
                        <td>
                           <input class="boton" name = "delete" type = "submit" 
                              id = "delete" value = "Borrar">
                        </td>
                        
                        
                     </tr>
                     
                  </table>
               </form>
            <?php
         }
      ?>
       
       <div>
           <a href="../index.php">Regresar</a>
						
					</div>
      
   </body>
</html>