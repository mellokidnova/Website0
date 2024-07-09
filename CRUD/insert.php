<?php
    include 'connect.php';


    extract($_POST);

if(isset($_POST['usernameSend']) && isset($_POST['emailSend']) && isset($_POST['passwordSend']){
    $username = $_POST['usernameSend'];
    $email = $_POST['emailSend'];
    $password = $_POST['passwordSend'];

    $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES ('$username','$email','$password')";

    $result = mysql_query($con,$sql);

}





?>
