<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$id  = $_POST['id'];
$nik  = $_POST['nik'];
$nama  = $_POST['nama'];
$jk  = $_POST['jk'];
$diagnosa  = $_POST['diagnnosa'];
$alamat  = $_POST['alamat'];
$hp  = $_POST['hp'];
$bpjs = $_POST['bpjs'];

$nama_file = $_FILES ['foto']['name'];
$tmp_file = $_FILES ['foto']['tmp_name'];

$upload = move_uploaded_file($tmp_file,"foto/$nama_file");

// 3.Membuat Query INSET
$qry = "INSERT INTO pendaftaran (id,nik,nama,jk,diagnosas,alamat,hp,bpjs) VALUES ('$id','$nik','$nama','$jk','$diagnosa','$alamat','$hp','$bpjs','$nama_file')";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="index.php";
</script>