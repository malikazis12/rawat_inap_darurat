<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$diagnosa    = $_POST['diagnosa'];
$rekammedis  = $_POST['rekammedis'];

$nama_file = $_FILES ['foto']['name'];
$tmp_file  = $_FILES ['foto']['tmp_name'];

$upload = move_uploaded_file($tmp_file,"foto/$nama_file");

// 3.Membuat Query INSET
$qry    = "INSERT INTO pendaftaran (diagnosa,rekammedis) VALUES ('$diagnosa','$rekammedis','$nama_file')";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="pemeriksaan.php";
</script>