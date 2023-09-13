<?php
include 'koneksi.php';
$sql= 
"SELECT *, surat_masuk.id as sid FROM surat_masuk
INNER JOIN buku on surat_masuk.buku_id=buku.id";

$query= mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Surat Masuk</h1>

    <a href="tambah.php" class="fa fa-plus">Tambah Data</a>

    <table border="1"  cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nomor Surat</th>
                <th>Tanggal Surat</th>
                <th>Pengirim</th>
                <th>Nomor Agenda</th>
                <th>Tanggal Agenda</th>
                <th>Buku</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no= 1;
            foreach ($query as $key => $query) {
          
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $query['nomor_surat']; ?></td>
                <td><?php echo $query['tanggal_surat']; ?></td>
                <td><?php echo $query['pengirim']; ?></td>
                <td><?php echo $query['nomor_agenda']; ?></td>
                <td><?php echo $query['tanggal_agenda']; ?></td>
                <td><?php echo $query['nama_buku']; ?></td>
                <td><?php echo $query['status']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $query['sid'];?>" class="fa fa-edit">Edit</a>
                <a href="hapus.php?id=<?php echo $query['sid']; ?>" class="fa fa-trash">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>