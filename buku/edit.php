<?php
    include "koneksi.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM buku WHERE id = $id";

    $data = mysqli_query($conn,$sql);
    $test = mysqli_fetch_assoc($data);

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $sql = "UPDATE buku
        SET nama ='$nama'
        WHERE id = $id";
        var_dump($sql);
        $result = mysqli_query($conn,$sql);

        if ($result) {
            header('location:index.php');
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="pembungkus">
    <h2>Edit Data product</h2>
    <form action="" method="post">
        <label for="name">name</label>
        <input type="text" name= 'nama' value="<?php echo $test['nama'];?>"></input>
        <button type="submit" name="submit">Simpan</button>
        </form>
    </div>
</body>
</html>