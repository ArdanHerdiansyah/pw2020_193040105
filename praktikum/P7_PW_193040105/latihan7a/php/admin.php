<?php 
	// menghubungkan dengan file php lainnya
	require 'function.php';

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
 	<title>Tugas</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>
 <body style="background-color: #008040;">


 	<div class="add">
		<a href="tambah.php" style="background-color: #99ffcc;">Tambah Data</a><br><br>
		<a href="logout.php" style="float: right;">
 			<button type="button" class="btn btn-warning">Logout</button>
 		</a>

	</div>

	<form action="" method="get">
		<input type="text" name="keyword">
		<button type="submit" name="cari">Cari</button>
	</form><br>

 	<table border="1" cellpadding="13" cellspacing="0">
 		<tr style="background-color: #00ff7f;">
 			<th>#</th>
 			<th>Opsi</th>
 			<th>Gambar</th>
 			<th>Nama</th>
 			<th>Harga</th>
 			<th>Brand</th>
 			<th>Bahan</th>
 			<th>Ukuran</th>
 			<th>Warna</th>
 		</tr>
 		<?php if (empty($pakaian)) : ?>
 			<tr>
 				<td colspan="9">
 					<h1>Data Tidak ditemukan!</h1>
 				</td>
 			</tr>
 		<?php else : ?>
	 		<?php $i = 1 ?>
	 		<?php foreach ($pakaian as $pakai) : ?>
	 			<tr style="background-color: #4dffa6;">
	 				<td><?= $i; ?></td>
	 				<td>
	 					<a href="ubah.php?id=<?=$pakai['id']; ?>"><button style="background-color: aqua; color: white;">Ubah</a>
	 					<a href="hapus.php?id=<?=$pakai['id']; ?>" onclick="return confirm('Hapus Data??')"><button style="background-color:
	 					 salmon;"">Hapus</button></a>
	 				</td>
	 				<td><img src="../assets/img/<?= $pakai['gambar']; ?>" alt="" style="height: 250px; width: 250px;"></td>
	 				<td><?=$pakai['nama']; ?></td>
	 				<td><?=$pakai['harga']; ?></td>
	 				<td><?=$pakai['brand']; ?></td>
	 				<td><?=$pakai['bahan']; ?></td>
	 				<td><?=$pakai['ukuran']; ?></td>
	 				<td><?=$pakai['warna']; ?></td>
	 			</tr>
	 			<?php $i++ ?>
	 		<?php endforeach; ?>
	 	<?php endif; ?>
 	</table>
 </body>
 </html>