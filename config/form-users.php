<?php
require 'function.php';

// jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    if (simpanUser($_POST) > 0) {
        echo "
        <script>
        alert('user baru berhasil ditambahkan :)')
        </script>";
    } else {
        echo "
        <script>
        alert('gagal menambahkan user baru :(')
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Users</title>
</head>

<body>
    <div class="container">
        <div class="border-form">
            <div class="title-form">
                <h2>
                    Form User
                </h2>
                <div class="nvgs-btn">
                    <a href="list-users.php">list users</a>
                </div>
            </div>
            <form action="" method="POST">
                <div style="margin-bottom: 5px;" class="detail-box">
                    <label style="display: block;" for="username">username</label>
                    <input type="text" name="username" name="username" placeholder="username" required>
                </div>
                <div style="margin-bottom: 5px;" class="detail-box">
                    <label style="display: block;" for="name">Name</label>
                    <input type="text" name="name" name="name" placeholder="your name" required>
                </div>
                <div style="margin-bottom: 5px;" class="detail-box">
                    <label style="display: block;" for="name">Email</label>
                    <input type="email" name="email" name="email" placeholder="your email" required>
                </div>
                <div style="margin-bottom: 5px;" class="detail-box">
                    <label style="display: block;" for="password">Password</label>
                    <input type="password" name="password" name="password" placeholder="your password" required>
                </div>
                <div style="margin-bottom: 5px;" class="detail-box">
                    <label style="display: block;" for="password2">Password Confirmation</label>
                    <input type="password" name="password2" name="password2" placeholder="confirmation password" required>
                </div>
                <div style="margin-bottom: 5px;" style="margin-bottom: 5px;" class="detail-box">
                    <input type="submit" name="simpan" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</body>

</html>