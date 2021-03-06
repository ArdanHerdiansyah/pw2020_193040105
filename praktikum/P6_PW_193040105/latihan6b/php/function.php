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
?>