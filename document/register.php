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
                include("../php/function.php");
                if(isset($_POST['submit'])){
                    $firstname = format($_POST['firstname']);
                    $lastname = format($_POST['lastname']);
                    $email = format($_POST['email']);
                    $password = format($_POST['password']);
                    $confirmPassword = format($_POST['confirmPassword']);


                    if($password == $confirmPassword){
                        $very_email = mysqli_query($connection, "SELECT  `email` FROM `register` WHERE `email` = '$email'");

                        if(mysqli_num_rows($very_email)!=0){
                            echo "<div class='message'>
                            <p>Email is already taken</p>
                            </div>";
                            echo "<a href = 'javascript:self.history.back()'><button class = 'btn'>Go back</button></a>";


                        }
                        else{
                            mysqli_query($connection, "INSERT INTO `register`( `firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')") or die("Error");
                            echo "<div class='message'>
                            <p>Registration successful</p>
                            </div>";
                            echo "<a href = 'index.php'><button class = 'btn'>Login Now</button></a>";
                        }

                    }else{
                        echo "<div class='message'>
                        <p>Passwords do not match</p>
                        </div>";
                        echo "<div class =''message'><a href = 'javascript:self.history.back()'><button class = 'btn'>Go back</button></a></div>";
                    }



                    //veryfying if the email is unique

                }else{


            ?>
        <div class="tech"></div>
        <div class="register">
            <form action="" class="form" method="post" novalidate>
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
        <?php
            }
        ?>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
