<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nomor_surat= $_POST['nomor_surat'];
    $tanggal_surat= $_POST['tanggal_surat'];
    $pengirim= $_POST['pengirim'];
    $nomor_agenda= $_POST['nomor_agenda'];
    $tanggal_agenda= $_POST['tanggal_agenda'];
    $buku= $_POST['buku'];
    $status= $_POST['status'];

    $sql= 
    "INSERT INTO surat_masuk(nomor_surat, tanggal_surat, pengirim, nomor_agenda, buku_id, status)
    VALUES('$nomor_surat', '$tanggal_surat', '$pengirim', '$nomor_agenda', '$buku', '$status')";

    $query= mysqli_query($conn, $sql);

    if ($query) {
        echo "berhasil";
        header('location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Masuk Baru</title>
</head>
<body>
<h2>Surat Masuk Baru</h2>
<form action="" method="post">
    <label for="nomor_surat">Nomor Surat</label>
    <input type="number" name="nomor_surat">
    <br>

    <label for="tanggal_surat">Tanggal Surat</label>
    <input type="date" name="tanggal_surat" id="">
    <br>

    <label for="pengirim">Pengirim</label>
    <input type="text" name="pengirim">
    <br>

    <label for="nomor_agenda">Nomor Agenda</label>
    <input type="number" name="nomor_agenda">
    <br>

    <label for="tanggal_agenda">Tanggal Agenda</label>
    <input type="date" name="tanggal_agenda">
    <br>

    <label for="buku">buku</label>
    <select name="buku" id="">
        <?php
        $sql= "SELECT * FROM buku";
        $query= mysqli_query($conn, $sql);

        while ($tampil= mysqli_fetch_object($query)) {
            
        
        ?>
        <option value="<?php echo $tampil->id;?>">
        <?php echo $tampil->nama_buku;?>
        </option>
        <?php
        }
        ?>
    </select>
    <br>

    <label for="status">Status</label>
    <input type="number" name="status">
    <br>

    <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>