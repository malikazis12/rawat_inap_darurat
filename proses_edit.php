<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$id  = $_POST['id'];
$nik  = $_POST['nik'];
$nama  = $_POST['nama'];
$jk  = $_POST['jk'];
$diagnosa  = $_POST['diagnosas'];
$alamat  = $_POST['alamat'];
$hp  = $_POST['hp'];
$bpjs  = $_POST['bpjs'];

// 3.Membuat Query INSET
$qry = "UPDATE pendaftaran SET nik='$nik', nama='$nama', jk='$jk', diagnosas='$diagnosa', alamat='$alamat', hp='$hp', bpjs='$bpjs' WHERE id='$id'";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="pendaftaran.php";
</script>