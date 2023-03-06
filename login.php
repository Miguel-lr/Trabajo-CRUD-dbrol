<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/creardb.css">
</head>
<body>  

    
<?php

include 'resources/conexion.php';


if(isset($_POST['submit'])) {
   
    $user = $_POST['username'];
    $pass = $_POST['password'];

   
    $query = "SELECT * FROM user_tbl WHERE username = :username AND password = :password";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':username', $user);
    $stmt->bindParam(':password', $pass);
    $stmt->execute();
    $count = $stmt->rowCount();


    if($count == 1) {
      
        session_start();
        $_SESSION['username'] = $user;
        header("Location: index.php");
    } else {
      
        echo "Usuario o contraseña incorrectos";
    }
}
?>



<form method="post">

    <table>
        
        <tr>        
            
            <td>Nombre:</td>
            <td><input type="text" name="username" ></td>
            
        </tr>    
        
        
        
         <tr>        
            
            <td>Contraseña:</td>
            <td><input type="password" name="password"></td>
            
        </tr>    
        
        
        
         <tr>        
            
            
            <td><input type="submit" name="submit" value="Iniciar sesión"></td>
            
        </tr>  

   

    
    </table>
    </form>    


</body>
</html>