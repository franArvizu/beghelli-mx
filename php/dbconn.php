<?php
    
    // DATABASE USER INFORMATION - DEV
    if($_SERVER['HTTP_HOST'] == 'localhost:8000'){
        $db_user = 'root'; 
        $db_pass = '';
        $db_host = '127.0.0.1';
    }
    else if($_SERVER['HTTP_HOST'] == 'beghelli.com.mx' || $_SERVER['HTTP_HOST'] == 'beghelli.ochenta.com.mx'){
        // PROD && STAGING
        $db_user = 'admin'; 
        $db_pass = '5d5ed21082edddfd89a7b4875792cc10c8c0c3ee317921e1';
        $db_host = 'localhost';
    }

    // DATABASE INFORMATION
    $db_port = 3306;
    $db_name = 'beghelli';

    // Create connection
    $dbConn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
    // Check connection
    if ($dbConn->connect_error) {
        die("Connection failed: " . $dbConn->connect_error);
    }

?>
