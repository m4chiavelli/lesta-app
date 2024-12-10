<!-- delete -->
<?php
// Memasukkan script koneksi
include "koneksi.php";

// Membuat variabel dari FORM
$nim = "G.131.21.0019";

// Membuat query delete ke tabel mahasiswa
$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>