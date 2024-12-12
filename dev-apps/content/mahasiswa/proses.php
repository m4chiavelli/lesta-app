<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <?php
                    // Memulai sesi
                    session_start();

                    // Aktifkan error reporting
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);

                    // Masukkan script koneksi
                    include "koneksi.php";

                    // Validasi apakah data dikirim melalui POST
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Mengambil data dari form
                        $nim = $_POST['nim'] ?? null;
                        $nama = $_POST['nama'] ?? null;
                        $jenis_kelamin = $_POST['jenis_kelamin'] ?? null;
                        $tgl_lahir = $_POST['tgl_lahir'] ?? null;
                        $umur = $_POST['umur'] ?? null;
                        $fakultas = $_POST['fakultas'] ?? null;
                        $program_studi = $_POST['program_studi'] ?? null;
                        $email = $_POST['email'] ?? null;
                        $alamat = $_POST['alamat'] ?? null;

                        // Validasi data wajib
                        if (empty($nim) || empty($nama) || empty($jenis_kelamin)) {
                            $_SESSION['error_message'] = "Field NIM, Nama, dan Jenis Kelamin wajib diisi.";
                            header("Location: index.php?folder=mahasiswa&page=add");
                            exit;
                        }

                        // Membuat query
                        $sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, tgl_lahir, umur, fakultas, program_studi, email, alamat) 
            VALUES ('$nim', '$nama', '$jenis_kelamin', '$tgl_lahir', '$umur', '$fakultas', '$program_studi', '$email', '$alamat')";

                        // Eksekusi query
                        if ($conn->query($sql) === TRUE) {
                            $_SESSION['success_message'] = "Data berhasil ditambahkan.";
                            header("Location: index.php?folder=mahasiswa");
                            exit;
                        } else {
                            $_SESSION['error_message'] = "Error: " . $conn->error;
                            header("Location: index.php?folder=mahasiswa&page=add");
                            exit;
                        }
                    } else {
                        // Jika akses bukan melalui POST
                        $_SESSION['error_message'] = "Akses tidak valid.";
                        header("Location: index.php?folder=mahasiswa");
                        exit;
                    }

                    // Tutup koneksi
                    $conn->close();
                    ?>


                </div><!-- /.col -->
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