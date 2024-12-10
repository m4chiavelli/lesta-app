<?php
// Memasukkan script koneksi
include "koneksi.php";

// Membuat variabel dari FORM
$nim = "G.131.21.0019";
$nama = "Lesta";
$jenis_kelamin = "Perempuan";
$tgl_lahir = "2000-12-18";
$umur = 21;
$fakultas = "Teknik";
$program_studi = "Informatika";
$email = "lestaganteng@gmail.com";
$alamat = "Jl. Raya Ciputat";


// Membuat query ke tabel mahasiswa
$sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, tgl_lahir, umur, fakultas, program_studi, email, alamat) 
        VALUES ('$nim', '$nama', '$jenis_kelamin', '$tgl_lahir', '$umur', '$fakultas', '$program_studi', '$email', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
