<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];


    $sql = "INSERT INTO buku(nama)
        VALUES ('$nama')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "DATA BERHASIL DIPERBAIKI";
        header('Location:index.php');
    } else {
        echo "GAGAL MEMPERBARUI DATA :" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data product</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="pembungkus">
    <h2>Data Buku</h2>
    <form action="" method="post">
        <label for="nama">nama</label>
        <input type="text" name= "nama"></input>
        <button type="submit" name="simpan">Simpan</button>
        </form>
    </div>
</body>
</html>