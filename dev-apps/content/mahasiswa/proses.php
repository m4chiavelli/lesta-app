<?php
// Memasukkan script koneksi
include "koneksi.php";

// Mengambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['umur'];
$fakultas = $_POST['fakultas'];
$program_studi = $_POST['program_studi'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

// Membuat query untuk menambahkan data ke tabel mahasiswa
$sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, tgl_lahir, umur, fakultas, program_studi, email, alamat) 
        VALUES ('$nim', '$nama', '$jenis_kelamin', '$tgl_lahir', '$umur', '$fakultas', '$program_studi', '$email', '$alamat')";

if ($conn->query($sql) === TRUE) {
    // Jika berhasil, tampilkan alert dan redirect
    echo "
    <html>
    <head>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>
    </head>
    <body>
        <div class='container mt-5'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Berhasil!</strong> Data berhasil ditambahkan. Anda akan dialihkan ke halaman utama dalam 3 detik.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        </div>
        <script>
            setTimeout(function() {
                window.location.href = 'index.php?folder=mahasiswa';
            }, 3000); // Waktu tunggu 3 detik
        </script>
    </body>
    </html>";
} else {
    // Jika gagal, tampilkan alert dan redirect ke halaman sebelumnya
    echo "
    <html>
    <head>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>
    </head>
    <body>
        <div class='container mt-5'>
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Gagal!</strong> Error: " . $conn->error . ".
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        </div>
        <script>
            setTimeout(function() {
                window.history.back(); // Kembali ke halaman sebelumnya
            }, 3000); // Waktu tunggu 3 detik
        </script>
    </body>
    </html>";
}

// Menutup koneksi
$conn->close();
