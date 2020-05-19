<?php 

require '../php/function.php';

$keyword = $_GET["keyword"];


$query = "SELECT * FROM pakaian WHERE
                gambar LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                brand LIKE '%$keyword%' OR
                bahan LIKE '%$keyword%' OR
                ukuran LIKE '%$keyword%' OR
                warna LIKE '%$keyword%'  
                ";;
$pakaian = query($query);

?>

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
							<a href="ubah.php?id=<?= $pakai['id']; ?>"><button style="background-color: aqua; color: white;">Ubah</a>
							<a href="hapus.php?id=<?= $pakai['id']; ?>" onclick="return confirm('Hapus Data??')"><button style="background-color:
		 					 salmon;"">Hapus</button></a>
		 				</td>
		 				<td><img src="../assets/img/<?= $pakai['gambar']; ?>" alt="" style="height: 250px; width: 250px;"></td>
						<td><?= $pakai['nama']; ?></td>
						<td><?= $pakai['harga']; ?></td>
						<td><?= $pakai['brand']; ?></td>
						<td><?= $pakai['bahan']; ?></td>
						<td><?= $pakai['ukuran']; ?></td>
						<td><?= $pakai['warna']; ?></td>
					</tr>
					<?php $i++ ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</table>