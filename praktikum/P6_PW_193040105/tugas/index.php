<?php

    // menghubungkan dengan file php lainnya
    require 'php/function.php';

    // melakukan query
    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $pakaian = query("SELECT * FROM pakaian WHERE
                gambar LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                brand LIKE '%$keyword%' OR
                bahan LIKE '%$keyword%' OR
                ukuran LIKE '%$keyword%' OR
                warna LIKE '%$keyword%'  ");
    } else {
        // melakukan query
        $pakaian = query("SELECT * FROM pakaian");
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tugas</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            background-image : url(assets/img/ardanh.png);
        }

        .card-content {
            min-height : 91px;
        }

        .form-inline {
            width: 400px;
            margin: auto;
        }
        .form-control{
            border-radius: 25px;
        }
    </style>
</head>
<body>

    <button type="">
        <a href="php/admin.php">
        Masuk ke Halaman Admin
        </a>
    </button>

    <form action="" method="get" class="form-inline">
        <input type="text" name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background-color: white;">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
    </form>

    <div class="container">
        <?php if (empty($pakaian)) : ?>
            <h1>Data Tidak ditemukan!</h1>
        <?php else : ?>
            <div class="row">
                <?php foreach ($pakaian as $pakai) : ?>
                    <div class="col s10 m4" style="float: left;">
                        <div class="card">
                            <div class="card-image">
                                <img src= "assets/img/<?= $pakai["gambar"]; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                <p class = "nama">
                                <a href="php/detail.php?id=<?= $pakai['id'] ?>">
                                    <?= $pakai["nama"] ?>
                                </a>
                                </p>
                                </div>
                            </div>
                            <div class="card-action">
                                <a href="#" style="text-align : center;">Beli ?</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    

</body>
</html>