<?php 
include 'koneksi.php';

$sql = "SELECT *, disposisi_surat.id as sid FROM disposisi_surat
INNER JOIN user on disposisi_surat.user_id=user.id
INNER JOIN surat_masuk on disposisi_surat.surat_masuk_id=surat_masuk.id
";
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
<h1>Disposisi</h1>
    <a href="tambah.php">Tambah</a>
    <table border="1" cellspasing="0">
        <thead>
           
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Surat Masuk</th>
                <th>Disposisi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($querydata as $key => $querydata) {
            ?>
         <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $querydata['username'] ?></td>
            <td><?php echo $querydata['pengirim'] ?></td>
            <td><?php echo $querydata['disposisi'] ?></td>
            <td>
            <a href="edit.php?id=<?php echo $querydata['sid']; ?>">Edit</a>
            <a href="hapus.php?id=<?php echo $querydata['sid']; ?>">Delete</a>
            </td>
         </tr>
        <?php    
        }
        ?>
        </tbody>
    </table>
</body>
</html>