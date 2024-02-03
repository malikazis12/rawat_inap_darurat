<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$nofaktur        = $_POST['nofaktur'];
$tgl_penjualan_obat       = $_POST['tgl_penjualan_obat'];
$id_petugas         = $_POST['id_petugas'];
$kd_obat   = $_POST['kd_obat'];
$jumlah     = $_POST['jumlah'];



// 3.Membuat Query INSET
$qry = "INSERT INTO jualobat (nofaktur,tgl_penjualan_obat,id_petugas,kd_obat,jumlah) VALUES ('$nofaktur','$tgl_penjualan_obat','$id_petugas','$kd_obat','$jumlah')";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="jual_obat.php";
</script>