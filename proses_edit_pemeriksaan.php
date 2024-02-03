<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$id  = $_POST['id'];
$diagnosa  = $_POST['diagnosa'];


// 3.Membuat Query INSET
$qry = "UPDATE pemeriksaan SET diagnosa='$diagnosa' WHERE id='$id'";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="pemeriksaan.php";
</script>