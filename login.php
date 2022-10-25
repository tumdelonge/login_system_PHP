<?php
session_start();
if (isset($_SESSION['login'])) {
    header('location: index.php');
}
require 'config/function.php';

// jika btn login diklik
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek username
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username= '$username'");

    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['pass'])) {

            // set SESSION
            $_SESSION['login'] = true;
            header('location: index.php');
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system</title>
</head>

<body>
    <div class="container">
        <div class="box-form">
            <form-tittle>
                <h2>Login Form</h2>
            </form-tittle>
            <?php if (isset($error)) : ?>
                <p style="font-style: italic; color: crimson;">username / password salah</p>
            <?php endif; ?>
        </div>
        <form action="" method="POST">
            <div style="margin-bottom: 5px;" class="detail-box">
                <label style="display: block;" for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="username">
            </div>
            <div style="margin-bottom: 5px;" class="detail-box">
                <label style="display: block;" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div style="margin-bottom: 5px;" class="detail-box">
                <input type="submit" name="login" value="Login">
            </div>
        </form>
    </div>
</body>

</html>