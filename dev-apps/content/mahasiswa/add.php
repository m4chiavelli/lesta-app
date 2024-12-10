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
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php?folder=mahasiswa">Mahasiswa</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div>
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">ADD NEW USER</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" method="post" action="index.php?folder=mahasiswa&page=proses&aksi=insert">
                                    <div class="card-body">
                                        <!-- Form NIM -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">NIM <code>*</code></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nim" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Form Nama -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Form Jenis Kelamin -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Kelamin <code>*</code></label>
                                            <div class="col-sm-10">
                                                <!-- Radio Button Laki-laki -->
                                                <div class="form-check me-4">
                                                    <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" class="form-check-input" required>
                                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                                </div>
                                                <!-- Radio Button Perempuan -->
                                                <div class="form-check">
                                                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" class="form-check-input">
                                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Form TGL Lahir -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tgl Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="tgl_lahir" class="form-control col-sm-3">
                                            </div>
                                        </div>
                                        <!-- Usia -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Usia</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="umur" class="form-control col-sm-3">
                                            </div>
                                        </div>
                                        <!-- Fakultas -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Fakultas</label>
                                            <div class="col-sm-10">
                                                <select name="fakultas" class="form-control">
                                                    <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
                                                    <option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
                                                    <option value="Fakultas Teknik Industri">Fakultas Teknik Industri</option>
                                                    <option value="Fakultas Teknik Sipil">Fakultas Teknik Sipil</option>
                                                    <option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Program Studi -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Program Studi</label>
                                            <div class="col-sm-10">
                                                <select name="program_studi" class="form-control">
                                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                                    <option value="Teknik Komputer">Teknik Komputer</option>
                                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Alamat -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea name="alamat" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <!-- end -->
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">SUBMIT</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
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