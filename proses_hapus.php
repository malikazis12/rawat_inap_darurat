<?php
// 1. Membuat Koneksi
include_once("koneksi.php");

// 2.mengambil id dari url
$id = $_GET['id'];

// 3.membuat query delete
$qry = "DELETE FROM pendaftaran` WHERE id='$id'";

// 4.menjalankan query
$simpan = mysqli_query($con,$qry);

// 5.redirect ke index
?>
<script>
    document.location="index.php";
</script>