<?php

    // Mengecek apak adaid yang dikirimkkan
    // Jika tidak maka akan dikembalikan kehalaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'function.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparel(pakaian)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img class = "ard" src= "../assets/img/<?= $pakaian["gambar"]; ?>" alt = "">
        </div>
        <div class="keterangan">
            <p class = "a"><?= $pakaian["nama"]; ?></b></p>
            <p>Rp. <?= $pakaian["harga"]; ?></p>
            <p><?= $pakaian["brand"]; ?></p>
            <p>Bahan : </p>
            <p><?= $pakaian["bahan"]; ?></p>
            <p>Ukuran : <?= $pakaian["ukuran"]; ?></p>
            <p>Warna : <?= $pakaian["warna"]; ?></p>
        </div>
        
        <button class = "tombol-kembali"><a href="../index.php">Kembali</a></button>

    </div>
    <div class ="footer">
		<p>Copyright &copy; 2020. Ardan Herdiansyah Universitas Pasundan Bandung</p>
    </div>
</body>
</html>