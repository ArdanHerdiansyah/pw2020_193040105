<?php

    // Melakukan koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    // Memilih database
    mysqli_select_db($conn, "tubes_193040105") or die("Database salah!");

    // query mengambil objek dari tabel didalam database
    $result = mysqli_query($conn, "SELECT * FROM pakaian");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>latihan 5a</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <table border = "1" cellspacing = 0 cellpadding = 10>
            <!-- Image -->
            <tr class = "r" align="center">
                <td>No</td>
                <td>Gambar</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Brand</td>
                <td>Bahan</td>
                <td>Ukuran</td>
                <td>Warna</td>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr class = "d">
                <td><?= $row["id"] ?></td>
                <td style="text-align: center"> <img src= "assets/img/<?= $row["gambar"]; ?>" height="25%"> </td>
                <td> <?= $row["nama"] ?> </td>
                <td> Rp. <?= $row["harga"] ?></td>
                <td> <?= $row["brand"] ?> </td> 
                <td> <?= $row["bahan"] ?> </td>
                <td> <?= $row["ukuran"] ?> </td> 
                <td> <?= $row["warna"] ?> </td>
            </tr>
            <?php endwhile ?>
        </table>
    </div>
</body>
</html>