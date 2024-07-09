<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero Idustries</title>
    <link rel="stylesheet" href="../css/registration.css">
</head>

<body>
    <div class="main">
        <?php
        include('../php/nav.php');
        ?>
        <div class="register">
            <div class="form">
                <form action="" method="post">
                    <input type="text" placeholder="Name">
                    <br>
                    <input type="text" name="usename" id="username" placeholder="username">
                    <br>
                    <input type="email" name="email" id="email" placeholder="email">
                    <br>
                    <input type="password" name="password" placeholder="password">
                    <br>
                    <input type="password" name="re_password" placeholder="re-enter password">
                    <br>
                    <button name="login">Login</button>

                </form>
            </div>
        </div>


    </div>


</body>

</html>
<?php
    include '../php/conn.php';


    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];

        $sql = ""

    }


?>
