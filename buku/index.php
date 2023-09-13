<?php
// panggil koneksi db


include "koneksi.php";
$sql = "SELECT * FROM buku ORDER BY id ASC";
$querydata = mysqli_query($conn, $sql);
$no = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>Data Nama Buku</h1>
    <a href="tambah.php" class="btn-tambah"><i><data-father= "sunset"></i>Tambah</a>
    <table border="1" cellspasing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Cread at</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($querydata as $key => $data) { ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['cread_at'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
                        <a href="hapus.php?id=<?= $data['id'] ?>" onclick="return confirm('awas?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>



    </table>
    </tbody>
</body>

</html>