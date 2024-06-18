<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <div class="main">
        <?php
            include('../php/nav.php');
        ?>
        <div class="form">

            <br>
            <form action="">
                <h1>Contact Us</h1>
                <input type="text" name="name" placeholder="Name" max="20" min="4">
                <br>
                <input type="text" name="email" placeholder="Email" max="20" min="4">
                <br>
                <input type="text" name="subject" placeholder="Subject" max="20" min="4">
                <br>
                <input type="text" name="message" placeholder="Message" max="500" min="10">
                <br>
                <button class="submit">Submit</button>
            </form>
        </div>
    </div>




</body>
</html>
