<?php
// memasukkan script koneksi
include "koneksi.php";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mahasiswa</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="index.php?folder=mahasiswa&page=add" class="btn btn-block btn-primary btn-sm">ADD</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>PROGRAM STUDI</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Query untuk mendapatkan semua data mahasiswa
                                    $sql = "SELECT * FROM mahasiswa";
                                    $result = mysqli_query($conn, $sql);
                                    $no = 1;

                                    // Periksa apakah ada data dalam hasil query
                                    if (mysqli_num_rows($result) > 0) {
                                        // Loop melalui setiap baris data
                                        foreach ($result as $value) {
                                    ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['nim'] ?> <br> <?= $value['nama'] ?></td>
                                                <td>
                                                    <?php
                                                    // Pastikan kolom 'jenis_kelamin' ada di array $value
                                                    if (isset($value['jenis_kelamin'])) {
                                                        // Periksa nilai 'jenis_kelamin' dan tampilkan output sesuai
                                                        if ($value['jenis_kelamin'] === 'L' || strtolower($value['jenis_kelamin']) === 'laki-laki') {
                                                            echo "Laki-laki";
                                                        } elseif ($value['jenis_kelamin'] === 'P' || strtolower($value['jenis_kelamin']) === 'perempuan') {
                                                            echo "Perempuan";
                                                        } else {
                                                            // Jika nilai tidak dikenali
                                                            echo "Data tidak valid";
                                                        }
                                                    } else {
                                                        // Jika kolom 'jenis_kelamin' tidak ditemukan
                                                        echo "Jenis kelamin tidak tersedia";
                                                    }
                                                    ?>
                                                </td>

                                                <td>
                                                    <?= $value['fakultas'] ?> <br>
                                                    <?= $value['program_studi'] ?>
                                                </td>
                                                <td>
                                                    <!-- Tombol Edit -->
                                                    <a href="index.php?folder=mahasiswa&page=edit" class="btn btn-warning btn-xs">EDIT</a>
                                                    <!-- Tombol Delete -->
                                                    <a href="index.php?folder=mahasiswa&page=delete" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure ?')">DELETE</a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        // Jika tidak ada data
                                        echo "<tr><td colspan='5' class='text-center'>Data tidak ditemukan.</td></tr>";
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>