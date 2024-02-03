<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2. Mengambil Seluruh Nilai Input Dan Di Masukkan Ke Variabel
$id  = $_POST['id'];
$nofaktur  = $_POST['nofaktur'];
$tgl_penjualan_obat  = $_POST['tgl_penjualan_obat'];
$id_petugas  = $_POST['id_petugas'];
$kd_obat  = $_POST['kd_obat'];
$jumlah  = $_POST['jumlah'];

// 3.Membuat Query INSET
$qry = "UPDATE jualobat SET nofaktur='$nofaktur', tgl_penjualan_obat='$tgl_penjualan_obat', id_petugas='$id_petugas', kd_obat='$kd_obat', jumlah='$jumlah' WHERE id='$id'";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.alihkan ke halaman index.php
?>
<script>
    document.location="Jual_obat.php";
</script>