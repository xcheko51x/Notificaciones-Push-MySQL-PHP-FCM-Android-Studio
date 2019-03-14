<?php

    if(isset($_POST["Token"])) {
        $token = $_POST["Token"];
        
        $con = mysqli_connect("localhost", "root", "", "notificaciones") or die("Error al conectarse");
        
        $query = "INSERT INTO users (Token) VALUES ( '$token') "
        ." ON DUPLICATE KEY UPDATE Token = '$token';";
        
        mysqli_query($con, $query) or die(mysqli_error($con));
        
        mysqli_close($con);
        
    }
    
?>
