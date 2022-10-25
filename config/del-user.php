<?php
require 'function.php';

// jika id ditemukan
if (isset($_GET['id'])) {

    // ambil data id
    $id = $_GET['id'];

    // query delete data
    $query = mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    if ($query) {
        header('location: list-users.php?status=deletesuccess');
    } else {
        header('location: list-users.php?status=deletegagal');
    }
}
