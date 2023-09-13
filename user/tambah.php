<?php
require_once '../koneksi.php';
if (isset($_POST['submit'])) {
    $user = $_POST["username"];
    $pass = sha1($_POST["password"]);
    $jab = $_POST["jabatan"];
    $sql = "INSERT INTO user VALUES(NULL,'$user','$pass','$jab')";
    $querydata = mysqli_query($conn,$sql);
    if ($querydata) {
        echo "<script>alert('Data berhasil disimpan'): window.location.href = 'index.php':</script>";
        header('location:index.php');
    } else {
        // jika gagal
        $err = mysqli_error($conn);
        echo "<script>alert('Data gagal disimpan' + $err): window.location.href = 'index.php':</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>

<body>
    <form action="" method="post">
    <h1>Tambah Data</h1>
        <table border="1">
            <thead>
                <th>column</th>
                <th>Value</th>
            </thead>
            <tr>
                <td><label for="username">Nama:</label></td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td><label for="jabatan">Jabatan:</label></td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Tambah File</button>
                </td>
            </tr>
    </form>
    </table>

</body>

</html>