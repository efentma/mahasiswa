<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <header>
        <h2>Input Data Mahasiswa</h2>
        <form action="simpan.php" method="POST">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"><br>
            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat"><br>
            <label for="umur">Umur:</label><br>
            <input type="text" id="umur" name="umur">
            <p></p>
            <input type="submit" value="Simpan">
        </form>
        <br>
        <a href="tampil.php">Kembali</a>

        <?php
        require_once 'database.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['nama']) && !empty($_POST['alamat']) && !empty($_POST['umur'])) {
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $umur = $_POST['umur'];

                $db = new Database();
                $db->__construct();

                $db->simpan($nama, $alamat, $umur);

                header("Location: tampil.php");
            } else {
                echo "Nama, Alamat dan Umur harus diisi!";
            }
        }
        ?>
    </header>
</body>

</html>