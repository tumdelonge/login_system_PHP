<?php
$conn = mysqli_connect('localhost', 'root', '', 'userdb');

if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

// function simpanUser
function simpanUser($data)
{
    global $conn;

    // ambil data dari form
    $name = $data['name'];
    $email = $data['email'];
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // username check
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");

    if (mysqli_fetch_assoc($result) > 0) {
        echo "
        <script>
        alert('username sudah ada !')
        </script>";
        return false;
    }

    // password confirmation
    if ($password !== $password2) {
        echo "
        <script>
        alert('konfirmasi password tidak sesai')
        </script>";
        return false;
    }

    // password encryption
    $password = password_hash($password, PASSWORD_DEFAULT);

    // insert data ke database
    $query = mysqli_query($conn, "INSERT INTO users(name, username, pass, email)VALUES('$name', '$username', '$password', '$email') ");
    if (!$query) {
        die("Input data failed : " . mysqli_error($conn));
    }

    return mysqli_affected_rows($conn);
}
