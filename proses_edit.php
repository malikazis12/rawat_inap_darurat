<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$jk         = $_POST['jk'];
$diagnosa   = $_POST['diagnosa'];
$alamat     = $_POST['alamat'];
$hp         = $_POST['hp'];
$bpjs       = $_POST['bpjs'];



// 3.Membuat Query INSET
$qry = "INSERT INTO pendaftaran (nik,nama,jk,diagnosas,alamat,hp,bpjs) VALUES ('$nik','$nama','$jk','$diagnosa','$alamat','$hp','$bpjs')";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="pendaftaran.php";
</script>