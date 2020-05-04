<?php
    // function untuk melakukan koneksi ke database
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040105") or die("Database salah!");

        return $conn;
    }

    // function untuk melakukan query ke database
    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows =[];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    // fungsi untuk menambahkan data didalam database
    function tambah($data)
    {
        $conn = koneksi();

        $gambar = htmlspecialchars($data['gambar']);
        $nama = htmlspecialchars($data['nama']);
        $harga = htmlspecialchars($data['harga']);
        $brand = htmlspecialchars($data['brand']);
        $bahan = htmlspecialchars($data['bahan']);
        $ukuran = htmlspecialchars($data['ukuran']);
        $warna = htmlspecialchars($data['warna']);

        $query = "INSERT INTO pakaian
                    VALUES 
                    ('', '$gambar', '$nama', '$harga', '$brand', '$bahan', '$ukuran', '$warna')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // fungsi  hapus
    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    // fungsi ubah
    function ubah($data)
    {
        $conn = koneksi();

        $id = htmlspecialchars($data['id']);
        $gambar = htmlspecialchars($data['gambar']);
        $nama = htmlspecialchars($data['nama']);
        $harga = htmlspecialchars($data['harga']);
        $brand = htmlspecialchars($data['brand']);
        $bahan = htmlspecialchars($data['bahan']);
        $ukuran = htmlspecialchars($data['ukuran']);
        $warna = htmlspecialchars($data['warna']);

        $query = "UPDATE pakaian 
                    SET
                     gambar = '$gambar',
                     nama = '$nama',
                     harga = '$harga',
                     brand = '$brand',
                     bahan = '$bahan',
                     ukuran = '$ukuran',
                     warna = '$warna'
                     WHERE id = '$id' ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // function registrasi
    function registrasi($data)
    {
        $conn = koneksi();
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Username sudah digunakan!')
                </script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);


        // tambah user baru
        $query = "INSERT INTO user
                    VALUES 
                    ('', '$username', '$password')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>