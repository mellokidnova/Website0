<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero Industries</title>
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
    <div class="main">
        <?php
            include('../php/nav.php');
        ?>
        <?php
                include("../php/conn.php");
                if(isset($_POST['submit'])){
                    $firstname = $_POST['firstname'];
                    $Username = $_POST['lastname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $confirmPassword = $_POST['confirmPassword'];

                    $sql =  "INSERT INTO `register`( `firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')";

                    $result = $connection->query($sql);
                    if($result == TRUE){
                        echo "<script>alert('Registeration successful');</script>";
                        header("location:index.php");
                    }
                    else {
                        echo "<script>alert('error');</script>";
                        header("location:register.php");
                    }
                }


                $connection->close();



                    //veryfying if the email is unique
        ?>
        <div class="tech"></div>
        <div class="register">
            <form action="" class="form" method="post" >
                <input name="firstname" type="text" placeholder="First Name">
                <br>
                <input name="lastname" type="text" placeholder="Last Name">
                <br>
                <input name="email" type="email" placeholder="Email">
                <br>
                <input name="password" type="text" placeholder="Password">
                <br>
                <input name="confirmPassword" type="text" placeholder="Confirm Password">
                <br>
                <button name="submit">Sign Up</button>
                <p class="liw">Sign Up with</p><br>
                <div class="icons">
                    <a href="https://www.facebook.com"><ion-icon name="logo-facebook"></ion-icon></ion-icon></a>
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></ion-icon></a>
                    <a href="https://twitter.com/?lang=en"><ion-icon name="logo-twitter"></ion-icon></ion-icon></a>
                    <a href="https://accounts.google.co.ke/"><ion-icon name="logo-google"></ion-icon></ion-icon></a>
                    <a href="https://github.com/"><ion-icon name="logo-github"></ion-icon></ion-icon></a>
                </div>
            </form>
        </div>


    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
