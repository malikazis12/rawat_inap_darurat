<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM jualobat WHERE id='$id'";
$data = mysqli_query($con,$qry);

$jot = mysqli_fetch_array($data);
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
            <h1>Jual Obat</h1>
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
            <form action="proses_edit_jual_obat.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $jot['id']?>">
              <div class="form-group mb-5">
                <label for="nofaktur" class="form-label">nofaktur</label>
                <input type="text" value="<?php echo $jot['nofaktur']?>" name="nofaktur" class="form-control" id="nofaktur">
              </div>
              <div class="form-group mb-3">
                <label for="tgl_penjualan_obat" class="form-label">tgl_penjualan_obat</label>
                <input type="date" value="<?php echo $jot['tgl_penjualan_obat']?>" name="tgl_penjualan_obat" class="form-control" id="tgl_penjualan_obat">
              </div>
              <div class="form-group mb-3">
                <label for="id_petugas" class="form-label">id_petugas</label>
                <input type="text" value="<?php echo $jot['id_petugas']?>" name="id_petugas" class="form-control" id="id_petugas">
              </div>
              <div class="form-group mb-3">
                <label for="kd_obat" class="form-label">kd_obat</label>
                <input type="text" value="<?php echo $jot['kd_obat']?>" name="kd_obat" class="form-control" id="kd_obat">
              </div>
              <div class="form-group mb-3">
                <label for="jumlah" class="form-label">jumlah</label>
                <input type="text" value="<?php echo $jot['jumlah']?>" name="jumlah" class="form-control" id="jumlah">
              </div>
              <button type="submit" class="btn btn-secondary">Submit</button>
              <a href="jual_obat.php" class="btn btn-outline-secondary">Batal</a>
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
