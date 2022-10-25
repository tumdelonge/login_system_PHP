<?php
require 'function.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="border-table">
            <div class="table-tittle">
                <h2>
                    Data Users
                </h2>
            </div>
            <div class="nvgs-btn">
                <a href="form-users.php"> [+] Tambah User</a>
            </div>
            <table border="1">
                <th>No</th>
                <th>username</th>
                <th>Email</th>
                <th>Name</th>
                <th>password</th>
                <th>Options</th>
                <?php
                // sql Tampil data users
                $query = mysqli_query($conn, "SELECT * FROM users");
                $i = 0;
                while ($data = mysqli_fetch_array($query)) {
                    $i++;

                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $data['username'] . "</td>";
                    echo "<td>" . $data['email'] . "</td>";
                    echo "<td>" . $data['name'] . "</td>";
                    echo "<td>" . $data['pass'] . "</td>";

                    echo "<td>";
                    echo "<a href=''>Edit</a>  |  ";
                    echo "<a href='del-user.php?id=" . $data['id'] . "'>hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }

                ?>
            </table>
        </div>
    </div>
</body>

</html>