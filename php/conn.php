<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'web0';



    $connection = new mysqli($server,$username,$password,$dbname);

    if($connection->connect_error) {
        die("<script>alert('Error connecting to the database')</script>".mysqli_connect_error());

    }










?>
