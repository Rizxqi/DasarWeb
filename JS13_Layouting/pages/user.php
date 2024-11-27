<?php
include 'lib/Connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
</head>

<body>
    <h1>Daftar Pengguna</h1>
    <a href="add_user.php">Tambah Pengguna</a>
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM user";
        $stmt = $pdo->query($sql);
        $userList = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($userList as $user) {
            echo "<tr>";
            echo "<td>{$user['username']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td>{$user['role']}</td>";
            echo "<td>
                    <a href='edit_user.php?id={$user['id']}'>Edit</a>
                    <a href='?page=user&action=delete&id
                    <a href='?page=user&action=delete&id={$user['id']}'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>