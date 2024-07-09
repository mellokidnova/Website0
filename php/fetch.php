<?php
include 'db_config.php';

$sql = "SELECT `id`, `name`, `email`, `created_at` FROM `users` WHERE 1";
$result = mysqli_query($conn, $sql);

$users = array();
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

echo json_encode($users);

mysqli_close($conn);
?>
