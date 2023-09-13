<?php
require_once '../koneksi.php';

$sql = "SELECT * FROM user ORDER BY ID ASC";
$querydata = mysqli_query($conn,$sql);
$no = 1;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table User</title>
    <style>
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>List Pengguna</h1>
    <a href="tambah.php"> <button>Tambah File</button></a>
    <table border="1" cellspacing="0">
        <thead>
            <th>No.</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Edit</th>
            <th>Tambah</th>
        </thead>
    <?php foreach ($querydata as $key => $data) {?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['username']?></td>
            <td><?= $data['jabatan']?></td>
            <td><a href="edit.php?id=<?= $data['id']?>"><button>Edit</button></a></td>
            <td><a onclick="return confirm('Apakah anda yakin data akan dihapus')" href="hapus.php?id=<?= $data['id'] ?>"><button>Delete</button></a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>