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
    <title>latihan 6d</title>
    
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
    </style>
</head>
<body>
<div class="container">
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
</div>
</body>
</html>