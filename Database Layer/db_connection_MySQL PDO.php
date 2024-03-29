<!--========================================================================
    db_connection_MySQLI PDO.php: 
     -- Used to establish connection between HTML documents / webpage 
        to MySQL Database in XAMPP phpMyAdmin through php language 

    Connection Type 3: MySQLi PDO (PhP Data Object)
=========================================================================-->

<?php

    // localhost
    $servername = "localhost";
    
    $username = "root";
    
    $password = "";
    
    //name of database
    $dbname = "bitm2113_project";

    try {
        // create connection
        $conn = new PDO("mysql:host = $servername; dbname = myDB", $username, $password);
        
        // set the PDO error mode to exception
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        echo "Connected to database $dbname successfully"; 
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage(); 
    }
?> 