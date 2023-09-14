<?php
include 'koneksi.php';
$id= $_GET['id'];

if (isset($_POST['submit'])) {
    $nomor_surat= $_POST['nomor_surat'];
    $tanggal_surat= $_POST['tanggal_surat'];
    $tujua= $_POST['tujuan'];
    $nomor_agenda= $_POST['nomor_agenda'];
    $tanggal_agenda= $_POST['tanggal_agenda'];
    $buku= $_POST['buku'];
    $status= $_POST['status'];

    $sql= 
    "UPDATE surat_keluar SET nomor_surat='$nomor_surat', tanggal_surat='$tanggal_surat', tujuan='$tujuan', nomor_agenda='$nomor_agenda', tanggal_agenda='$tanggal_agenda',       buku_id='$buku', status='$status' WHERE id=$id";

    $query= mysqli_query($conn, $sql);

    
    if ($query) {
        header('location: index.php');
    } else {
        echo mysqli_error($conn);
    }
}

$sql_surat= "SELECT * FROM surat_masuk WHERE id=$id";
$query_surat= mysqli_query($conn, $sql_surat);
$surat= mysqli_fetch_object($query_surat);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Edit Surat Masuk</h2>
<form action="edit.php?id=<?php echo $id; ?>" method="post">


    <label for="nomor_surat">Nomor Surat</label>
    <input type="number" name="nomor_surat" value="<?php echo $surat->nomor_surat; ?>">
    <br>

    <label for="tanggal_surat">Tanggal Surat</label>
    <input type="date" name="tanggal_surat" id="" value="<?php echo $surat->tanggal_surat; ?>">
    <br>

    <label for="tujuan">Tujuan</label>
    <input type="text" name="tujuan" value="<?php echo $surat->tujuan; ?>">
    <br>

    <label for="nomor_agenda">Nomor Agenda</label>
    <input type="number" name="nomor_agenda" value="<?php echo $surat->nomor_agenda; ?>">
    <br>

    <label for="tanggal_agenda">Tanggal Agenda</label>
    <input type="date" name="tanggal_agenda" value="<?php echo $surat->tanggal_agenda; ?>">
    <br>

    <label for="buku">buku</label>
    <select name="buku" id="">
        <?php
        $sql= "SELECT * FROM buku";
        $query= mysqli_query($conn, $sql);

        while ($tampil= mysqli_fetch_object($query)) {
            
        
        ?>
        <option value="<?php echo $tampil->id;?>" <?php echo ($surat->buku_id == $tampil->id) ? 'selected' : '' ;?>>
        <?php echo $tampil->nama_buku;?>
        </option>
        <?php
        }
        ?>
    </select>
    <br>

    <label for="status">Status</label>
    <input type="number" name="status" value="<?php echo $surat->status; ?>">
    <br>

    <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>