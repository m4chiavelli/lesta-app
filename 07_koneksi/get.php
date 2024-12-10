<?php
// memasukkan script koneksi
include "koneksi.php";

// membuat variabel id GET --> $_GET['nim'] atau POST --> $_POST['nim']
$nim = 'G.131.21.0018';

// membuat query ke tabel mahasiswa
$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$result = mysqli_query($conn, $sql);
$value = $result->fetch_assoc();
?>

<!-- menampilkan data mahasiswa -->
<table border="1">
    <tr>
        <td>NIM</td>
        <td>: <?= $value['nim'] ?></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td>: <?= $value['nama'] ?></td>
    </tr>
    <tr>
        <td>JENIS KELAMIN</td>
        <td>: <?= $value['jenis_kelamin'] ?></td>
    </tr>
    <tr>
        <td>TGL LAHIR</td>
        <td>: <?= $value['tgl_lahir'] ?></td>
    </tr>
    <tr>
        <td>UMUR</td>
        <td>: <?= $value['umur'] ?></td>
    </tr>
    <tr>
        <td>FAKULTAS</td>
        <td>: <?= $value['fakultas'] ?></td>
    </tr>
    <tr>
        <td>PROGRAM STUDI</td>
        <td>: <?= $value['program_studi'] ?></td>
    </tr>
    <tr>
        <td>EMAIL</td>
        <td>: <?= $value['email'] ?></td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td>: <?= $value['alamat'] ?></td>
    </tr>
</table>