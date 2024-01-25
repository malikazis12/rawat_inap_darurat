<?php
include_once("cek_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <?php include_once('navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php include_once('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendaftaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
             
              <li class="breadcrumb-item active">Rawat Inap</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

    <!-- Main content -->
    <section class="content">
        

      <!-- Default box -->
      <div class="card col-md-6 m-auto" >
              <div class="card-header">
                <h3 class="card-title">Masukkan Biodata Anda</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            <form action="proses_form.php" method="POST" enctype="multipart/form-data">
              <div class="form-group mb-5">
                <label for="nik" class="form-label">Nik</label>
                <input type="text" name="nik" class="form-control" id="nik">
              </div>
              <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
              </div>
              <div class="form-group mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki" checked>
                  <label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan">
                  <label class="form-check-label" for="exampleRadios2">Perempuan</label>
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="diagnosa" class="form-label">Diagnosa</label>
                <select name="diagnosa" class="form-control" aria-label="diagnosa">
                  <option selected> Pilih diagnosa</option>
                  <?php
                    include("koneksi.php");
                    $query = "SELECT * FROM pemeriksaan";
                    $hasil = mysqli_query($con,$query);
                    foreach ($hasil as $diag) {
                  ?>
                    <option value="<?php echo $diag['id'] ?>"> <?php echo $diag['kode'] ?> - <?php echo $diag['diagnosa'] ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
              </div>
              <div class="form-group mb-3">
                <label for="hp" class="form-label">HP</label>
                <input type="text" name="hp" class="form-control" id="hp">
              </div>
              <div class="form-group mb-3">
                <label for="bpjs" class="form-label">BPJS</label>
                <input type="text" name="bpjs" class="form-control" id="bpjs">
              </div>
              <button type="submit" class="btn btn-secondary">Submit</button>
              <a href="pendaftaran.php" class="btn btn-outline-secondary">Batal</a>
            </form>
          </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Jangan lupa bersyukur 
        </div>
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <!-- include footer -->
    <?php include_once('footer.php')?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
