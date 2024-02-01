<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$diagnosa    = $_POST['diagnosa'];

$nama_file = $_FILES ['rekammedis']['name'];
$tmp_file  = $_FILES ['rekammedis']['tmp_name'];

$upload = move_uploaded_file($tmp_file,"rekammedis/$nama_file");

// 3.Membuat Query INSET
$qry    = "INSERT INTO pemeriksaan (diagnosa,rekammedis) VALUES ('$diagnosa','$nama_file')";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="pemeriksaan.php";
</script>