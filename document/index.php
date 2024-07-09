<?php

    include('../php/conn.php');


?>
<?php
    include('../php/head.php');
?>
<body>
    <div class="main">
        <?php
            include('../php/nav.php');
        ?>
        <div class="info">
            <h1 class="content">Software Development & <br>Network Administrators</span></h1>
            <p>Zero Industries is  multinational conglomerate  owned and chaired by Bertram Brian.The Seven Board Members  make most of the  company decisions on Bertram Chabu's behalf, since Bertram's time is largely occupied by his other duties.</p>
            <a href="register.php"><button class="cn">Join Us</button></a>

            <div class="form">
                <h2>Login Here</h2>
                <input type="text" name="email" placeholder="Enter Email Here">
                <input type="text" name="password" placeholder="Enter Password">
                <button class="btnn"><a href="login.php">Login</a></button>

                <p class="account" >Don't Have an Account<br></p>
                <p class="link"><a href="registration.php"  class="anchor">Sign Up</a></p>
                <p class="liw">Log in with</p><br>
                <div class="icons">
                    <a href="https://www.facebook.com"><ion-icon name="logo-facebook"></ion-icon></ion-icon></a>
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></ion-icon></a>
                    <a href="https://twitter.com/?lang=en"><ion-icon name="logo-twitter"></ion-icon></ion-icon></a>
                    <a href="https://accounts.google.co.ke/"><ion-icon name="logo-google"></ion-icon></ion-icon></a>
                    <a href="https://github.com/"><ion-icon name="logo-github"></ion-icon></ion-icon></a>
                </div>
            </div>
        </div>








    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
<?php

    $username = $_POST['username'];
    $password = $_POST['password'];


    if(isset($_SERVER['REQUEST_METHOD'])== $_POST['submit']){
        $sql = "SELECT * FROM `register` WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) == 1){
            header('location:../document/index.php');
        }else{
            echo "<script>alert('Incorrect Username or Password')</script>";
        }

    }


?>
