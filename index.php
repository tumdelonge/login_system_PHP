<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>

<body>
    <div class="container">
        <div class="nav-menu">
            <div class="menu-nav-tittle">
                <h2>Menu System</h2>
            </div>
            <ul>
                <li><a href="config/list-users.php">list users</a></li>
                <li><a href="">tambah users</a></li>
                <li><a href="">logout</a></li>
            </ul>
        </div>
    </div>
</body>

</html>