<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'website';

try {
    $connection = new mysqli($server, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("<script>alert('Error connecting to the database')</script>" . mysqli_connect_error());
    }
}catch(mysqli_sql_exception $e){
    echo "Connection failed: ". $e->getMessage();
}
?>

