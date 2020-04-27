<?php 
	// menghubungkan dengan file php lainnya
	require 'function.php';

	// melakukan query
	$pakaian = query("SELECT * FROM pakaian");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 6d</title>
 </head>
 <body style="background-color: #008040;">
 	<div class="add">
		<a href="tambah.php" style="background-color: #99ffcc;">Tambah Data</a><br><br>
	</div>
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
 		<?php $i = 1 ?>
 		<?php foreach ($pakaian as $pakai) : ?>
 			<tr style="background-color: #4dffa6;">
 				<td><?= $i; ?></td>
 				<td>
 					<a href="ubah.php?id=<?=$pakai['id']; ?>"><button style="background-color: aqua; color: white;">Ubah</a>
 					<a href="hapus.php?id=<?=$pakai['id']; ?>" onclick="return confirm('Hapus Data??')"><button style="background-color: salmon;"">Hapus</button></a>
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
 	</table>
 </body>
 </html>