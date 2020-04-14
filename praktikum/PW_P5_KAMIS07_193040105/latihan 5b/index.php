<?php

    // menghubungkan dengan file php lainnya
    require 'php/function.php';

    // melakukan query
    $pakaian = query("SELECT * FROM pakaian");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>latihan 5b</title>
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
            <?php foreach ($pakaian as $pakai) : ?>
            <tr class = "d">
                <td><?= $pakai["id"] ?></td>
                <td style="text-align: center"> <img src= "assets/img/<?= $pakai["gambar"]; ?>" height="25%"> </td>
                <td> <?= $pakai["nama"] ?> </td>
                <td> Rp. <?= $pakai["harga"] ?></td>
                <td> <?= $pakai["brand"] ?> </td> 
                <td> <?= $pakai["bahan"] ?> </td>
                <td> <?= $pakai["ukuran"] ?> </td> 
                <td> <?= $pakai["warna"] ?> </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>