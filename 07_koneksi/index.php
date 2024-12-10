<?php
// memasukkan script koneksi
include "koneksi.php";

// membuat query ke tabel mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);
?>

<!-- menampilkan data mahasiswa -->
<table border="1">
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>TGL LAHIR</th>
        <th>UMUR</th>
        <th>FAKULTAS</th>
        <th>PROGRAM STUDI</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['nim'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['jenis_kelamin'] . "</td>";
            echo "<td>" . $row['tgl_lahir'] . "</td>";
            echo "<td>" . $row['umur'] . "</td>";
            echo "<td>" . $row['fakultas'] . "</td>";
            echo "<td>" . $row['program_studi'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10'>Tidak ada data</td></tr>";
    }
    ?>
</table>