<?php    
    //conectando no servidor
    $servername = "localhost";
    $dbname = "safd";
    $username = "root";
    $password = "lenonr";    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
?>