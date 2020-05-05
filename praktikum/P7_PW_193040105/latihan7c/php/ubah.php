<?php 
	session_start();
	require 'function.php';


	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	  }

	$id = $_GET['id'];
	$pakai = query("SELECT * FROM pakaian WHERE id = $id") [0];


	if (isset($_POST['ubah'])) {
		if (ubah($_POST) >0) {
			echo "<script>
					alert('Data Berhasil diubah!');
					document.location.href = 'admin.php';
				</script>";
		} else {
			echo "<script>
					alert('Data Gagal diubah!');
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
			<input type="hidden" name="id" value="<?= $pakai['id']; ?>">
			<ul>
				<li>
					<label for="gambar">Gambar : </label>
					<input type="text" name="gambar" id="gambar" required value="<?= $pakai['gambar']; ?>"><br><br>
				</li>
				<li>
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama" required value="<?= $pakai['nama']; ?>"><br><br>
				</li>
				<li>
					<label for="harga">Harga : </label>
					<input type="text" name="harga" id="harga" required value="<?= $pakai['harga']; ?>"><br><br>
				</li>
				<li>
					<label for="brand">Brand : </label>
					<input type="text" name="brand" id="brand" required value="<?= $pakai['brand']; ?>"><br><br>
				</li>
				<li>
					<label for="bahan">Bahan : </label>
					<input type="text" name="bahan" id="bahan" required value="<?= $pakai['bahan']; ?>"><br><br>
				</li>
				<li>
					<label for="ukuran">Ukuran : </label>
					<input type="text" name="ukuran" id="ukuran" required value="<?= $pakai['ukuran']; ?>"><br><br>
				</li>
				<li>
					<label for="warna">Warna : </label>
					<input type="text" name="warna" id="warna" required value="<?= $pakai['warna']; ?>"><br><br>
				</li>
				<li>
					<button type="submit" name="ubah">Ubah Data!</button>
					<button type="submit">
						<a href="admin.php" style="text-decoration: none;; color: black;">Kembali</a>
					</button>
				</li>
			</ul>
		</form>
	</div>
</body>
</html>