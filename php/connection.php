<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "gymcenter";

    $con = mysqli_connect($host, $user, $pass, $db);

    if ($con) {
        
        echo "OK";

    }
    else{
        echo "Not Ok";
    }
    

?>