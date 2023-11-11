<?php

include("../koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['nisn']) ){
    header('Location: data_siswa.php');
}

//ambil id dari query string
$nisn = $_GET['nisn'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tb_siswa WHERE nisn=$nisn";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
        <section class="section">
            <div class="row">
                <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Horizontal Form</h5>

                    <div class="modal-body">
                    <form action="edit.php" method="POST" class="row g-3">
                        <input type="hidden" name="nisn" value="<?php echo $data['nisn'] ?>" />

                        <div class="col-md-6">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="id" name="nis" class="form-control" id="nis" value="<?php echo $data['nis'] ?>">
                        </div>
                        <div class="col-md-8">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data['nama'] ?>">
                        </div>
                        <div class="col-md-4">
                        <label for="id_kelas" class="form-label">Kelas</label>
                        <input type="id" name="id_kelas" class="form-control" id="id_kelas" value="<?php echo $data['nama'] ?>">
                        </div>
                        <div class="col-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" id="alamat"><?php echo $data['alamat'] ?></textarea>
                        </div>
                        <div class="col-12">
                        <label for="no_telp" class="form-label">No.Telp</label>
                        <input type="tel" name="no_telp" class="form-control" id="no_telp" value="<?php echo $data['no_telp'] ?>">
                        </div>
                        <div class="col-12">
                        <label for="id_spp" class="form-label">SPP</label>
                        <input type="id" name="id_spp" class="form-control" id="id_spp" value="<?php echo $data['id_spp'] ?>">
                        </div>
                        </div>
                        <div class="modal-footer">
                          <a type="button" href="data_siswa.php" class="btn btn-secondary">Kembali</a>
                          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                  
                  </div>
                  </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>