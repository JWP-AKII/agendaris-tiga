<?php
require_once '../koneksi.php';
$id = $_GET['id'];

if (isset($_POST['update'])) {
    $nama = $_POST['username'];
    $password = sha1($_POST['password']);
    $jabatan = $_POST['jabatan'];

    $sql = "UPDATE user SET 
    username = '$nama',
    password = '$password',
    jabatan = '$jabatan'
    WHERE id =$id";

    $prosesquery = mysqli_query($conn,$sql);
    if ($prosesquery) {
        header('location:index.php');
    }
    else {
        echo mysqli_error($conn);
    }
}
$sql_user = "SELECT * FROM user WHERE id = $id";
$query = mysqli_query($conn,$sql_user);
$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>

<body>
        <h1>Edit Pengguna</h1>
    <form action="" method="post">
        <table border="1">
            <thead>
                <th>Column</th>
                <th>Value</th>
            </thead>

            <tr>
                <td><label for="username"> Nama Pengguna:</label></td>
                <td><input type="text" id="username" value="<?= $user['username']?>"  name="username" required></td>
            </tr>

            <tr>
            <td><label for="password">Password</label></td>
            <td><input type="text" id="password" value="<?= $user['password']?>"  name="password" required></td>
        </tr>

            <r>
                <td><label for="jabatan"> Jabatan:</label></td>
                <td><input type="" id="jabatan" value="<?= $user['jabatan']?>" name="jabatan" required></td>
            </r>
    </form>
</table>
<button type="submit" name="update">Simpan Data</button>

</body>

</html>