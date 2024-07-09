<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `users` WHERE `id`=$id";

    if (mysqli_query($conn, $sql)) {
        echo "User deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

