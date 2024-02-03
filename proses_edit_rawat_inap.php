<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$id  = $_POST['id'];
$norawatinap  = $_POST['norawatinap'];
$norekmed  = $_POST['norekmed'];
$tgl_masuk  = $_POST['tgl_masuk'];
$tgl_keluar  = $_POST['tgl_keluar'];
$progres_tindakan  = $_POST['progres_tindakan'];

// 3.Membuat Query INSET
$qry = "UPDATE rawatinap SET norawatinap='$norawatinap', norekmed='$norekmed', tgl_keluar='$tgl_keluar', tgl_keluar='$tgl_keluar', progres_tindakan='$progres_tindakan' WHERE id='$id'";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="rawat_inap.php";
</script>
