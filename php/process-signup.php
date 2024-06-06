<?php
    if(empty($_POST['firstname'])){
        die("Name is required");
    }

    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        die("Valid Email is required");
    }
    if(strlen($_POST["password"])<8){
        die("Password must be at least 8 characters");
    }
    if(!preg_match("/[a-z]/i",$_POST["password"])){
        die("Password must contain atleast one letter");
    }
    if(!preg_match("/[0-9]/i",$_POST["password"])){
        die("Password must contain atleast one number");
    }
    if ($_POST['password']!==$_POST['confirmPassword']) {
        die("Password don't match");
    }

    $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);



?>
