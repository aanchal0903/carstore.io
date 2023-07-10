<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "cari";  
      
    $con = mysqli_connect($host, $name, $password, $cari);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 