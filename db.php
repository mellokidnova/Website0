<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website0";


    try{
        $con = mysqli_connect($servername,$username,$password,$dbname);


        if(!$con){
            echo "Connection not successful".$con->connect_error;
        }
        else{


        }
    }
    catch(mysqli_sql_exception $e){

    }
?>
