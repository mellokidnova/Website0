<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'web0';

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$con) {
        die("Connection failed: ". mysqli_connect_error());
    }
    else{
        echo "<script>alert('Connected to database '".$dbname.")';</script>";
    }
?>
