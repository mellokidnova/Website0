<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'web0';



    $connection = mysqli_connect($server,$username,$password,$dbname);

    if(!$connection){
        die("<script>alert('Error connecting to the database')</script>".mysqli_connect_error());
    }









?>
