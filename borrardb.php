<!DOCTYPE HTML>  
<html>
<head>
     <link rel="stylesheet" type="text/css" href="css/borrardb.css">
</head>
<body>  

    
<?php
   $servername = "localhost";
$username = "root";
$password = "";
  
$conn = mysqli_connect($servername, $username, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql = 'DROP DATABASE juegoderol';
  
   if (mysqli_query($conn,$sql)) {
       
   echo "Base de datos borrada.";}
   
   else {
       
       echo "" . mysqli_error($conn);
       
   }
      
   
   mysqli_close($conn);
?>

<div>
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						
					</div>

</body>
</html>