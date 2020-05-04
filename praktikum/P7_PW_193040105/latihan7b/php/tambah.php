<?php 
	require 'function.php';

	if (isset($_POST['tambah'])) {
		if (tambah($_POST) >0) {
			echo "<script>
					alert('Data Berhasil ditambahkan!');
					document.location.href = 'admin.php';
				</script>";
		} else {
			echo "<script>
					alert('Data Gagal ditambahkan!');
					document.location.href = 'admin.php';
				</script>";
		}
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pakaian</title>
	<link rel="stylesheet" type="text/css" href="../css/tambah.css">
</head>
<body>
	<div class="container">
		<h1>Tambah Data Pakaian</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required><br><br>
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required><br><br>
			</li>
			<li>
				<label for="harga">Harga : </label>
				<input type="text" name="harga" id="harga" required><br><br>
			</li>
			<li>
				<label for="brand">Brand : </label>
				<input type="text" name="brand" id="brand" required><br><br>
			</li>
			<li>
				<label for="bahan">Bahan : </label>
				<input type="text" name="bahan" id="bahan" required><br><br>
			</li>
			<li>
				<label for="ukuran">Ukuran : </label>
				<input type="text" name="ukuran" id="ukuran" required><br><br>
			</li>
			<li>
				<label for="warna">Warna : </label>
				<input type="text" name="warna" id="warna" required><br><br>
			</li>
			<li>
				<button type="submit" name="tambah">Tambah Data!</button>
				<button type="submit">
					<a href="admin.php" style="text-decoration: none;; color: black;">Kembali</a>
				</button>
			</li>
		</ul>
	</form>
	</div>
</body>
</html>