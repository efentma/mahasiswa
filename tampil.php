<?php include("database.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

</head>

<body>

    <header>
        <h2>Data Mahasiswa</h2>
    </header>
    <nav>
        <a href="simpan.php">[+] Input data</a>
    </nav>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th> Alamat</th>
                <th>Usia</th>
                <th>Opsi</th>
            </tr>
            <?php
            require_once 'database.php';

            $db = new Database();
            $db->__construct();
            $data = $db->tampil();

            foreach ($data as $row) {
                echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['umur'] . "</td>";

                echo "<td>";

                echo "<a href='hapus.php?id=" . $row['id'] . "'>Hapus</a>";

                echo "</td>";
                echo "</tr>";
            }
            ?>
        </thead>
    </table>

</body>

</html>