<?php
    require 'php/dbconn.php';
    // IF USER TYPES IN SEARCH BOX RETRIEVE RESULTS LIST
    if($_GET['key']):
        // SANITIZE USER INPUT
        $key=mysqli_real_escape_string($dbConn, $_GET['key']);
        $array = array();
        // BUILD QUERY
        $sql= "select * from products where productName LIKE '%{$key}%'";
        $result = $dbConn->query($sql);
        if ($result->num_rows > 0):
            // BUILD RESULTS ARRAY
            while($row = $result->fetch_assoc()):
                $array[] = $row['productName'];
            endwhile;
            // RETURN RESULTS
            echo json_encode($array);
        endif;
    endif;
?>