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
        
    <a href="form_jual_obat.php" class="btn btn-outline-danger"><i class="fa fa-user-plus"></i>Tambah Data </a>
      <!-- Default box -->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No Faktur</th>
                    <th>Tgl Penjualan Obat</th>
                    <th>Id petugas</th>
                    <th>Kd Obat</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                  </tr>
                  </thead>                 
                  <tbody>                      
                  <?php
                  // 1.Harus membuat koneksi
                  include_once("koneksi.php");

                  // 2.Memebuat query untuk menampilkan seluruh data
                  $qry ="SELECT * FROM jualobat";

                  // 3.Menjalankan query
                  $tampil = mysqli_query($con,$qry);

                  // 4.Menampilkan data menggunakan looping foreach
                  $nomor = 1;
                  foreach($tampil as $data){
                  ?>                 
                  <tr>
                    <td><?php echo $data['nofaktur'] ?></td>
                    <td><?php echo $data['tgl_penjualan_obat'] ?></td>
                    <td><?php echo $data['id_petugas'] ?></td>  
                    <td><?php echo $data['kd_obat'] ?></td>
                    <td><?php echo $data['jumlah'] ?></td>
                    <td>
                      <a href="form_edit_jual_obat.php?id=<?php echo $data['id'] ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                      <button type="button" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id'] ?>" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></button></td>
                            <div class="modal fade modal-lg" id="hapus<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="hapus" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="hapus">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Data Mahasiswa Dengan Nama <b><?php echo $data['nofaktur'] ?></b> Igin Dihapus?
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                              <a href="proses_hapus_jual_obat.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-danger">Ya</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
            
                  <?php
                  }
                  ?>
      </tr>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
        <!-- /.card-body -->
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
