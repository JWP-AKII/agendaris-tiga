<?php
include "koneksi.php";
$id = $_GET['id'];

if (isset($_POST['simpan'])) {
    $user = $_POST['user'];
    $surat_masuk= $_POST['surat_masuk'];
    $disposisi= $_POST['disposisi'];


    $sql = "UPDATE disposisi_surat SET user_id='$user', surat_masuk_id='$surat_masuk', disposisi='$disposisi' WHERE id = $id";
        

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
</head>
<body>
    <div class="pembungkus">
    <h2>Tambah Disposisi</h2>
    <form action="" method="post">
        <label for="user">User</label>
        <select name="user" id="">
            <?php
            $sql= "SELECT * FROM user";
            $query= mysqli_query($conn, $sql);
            while ($tampil= mysqli_fetch_object($query)) {
            
        
                ?>
                <option value="<?php echo $tampil->id;?>">
                <?php echo $tampil->username; ?>
                </option>
                <?php
                }
                ?>
        </select>
        <br>

        <label for="surat_masuk">Surat Masuk</label>
        <select name="surat_masuk" id="">
            <?php
            $sql= "SELECT * FROM surat_masuk";
            $query= mysqli_query($conn, $sql);
            while ($tampil= mysqli_fetch_object($query)) {
            
        
                ?>
                <option value="<?php echo $tampil->id;?>">
                <?php echo $tampil->pengirim; ?>
                </option>
                <?php
                }
                ?>
        </select>
        <br>

        <label for="disposisi">Disposisi</label>
        <input type="text" name= "disposisi">
        <br>
        <button type="submit" name="simpan">Simpan</button>
        </form>
    </div>
</body>
</html>