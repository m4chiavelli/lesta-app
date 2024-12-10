<!-- update -->
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
$email = "lestatata@gmail.com";
$alamat = "Jl. Gajah Raya";

// Membuat query insert ke tabel mahasiswa
$sql = "UPDATE mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir', umur='$umur', fakultas='$fakultas', program_studi='$program_studi', email='$email', alamat='$alamat' WHERE nim='$nim'";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>