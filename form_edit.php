<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM pendaftaran WHERE id='$id'";
$data = mysqli_query($con,$qry);

$pdf = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/malik.css">
</head>
<body class="bg-dark">

<!-- awal navbar -->    
<?php
  include('navbar.php');
?>
<!-- Akhir Navbar -->

<div class="container">
    <div class="row">
        <div class="col-md-5 m-auto mt-5">
            <div class="card">
                <div class="card-header">
                    Biodata Mahasiswa
                </div>
                <div class="card-body">
                <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $pdf['id']?>">    
                <div class="mb-3">
                        <label for="nim" class="form-label">Nim</label>
                        <input type="text" readonly value="<?php echo $pdf['nim']?>" name="nim" class="form-control" id="nim">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" value="<?php echo $pdf['nama']?>" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Jenis Kelamin</label>
                        <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" <?php echo $pdf['jk']=="Laki-Laki" ? "checked" : ""?> type="radio" name="jk" id="exampleRadios1" value="Laki-Laki" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" <?php echo $pdf['jk']=="Perempuan" ? "checked" : ""?> type="radio" name="jk" id="exampleRadios2" value="Perempuan">
                        <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                        </label>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="diagnosa" class="form-label">diagnosa</label>
                        <select name="diagnosa" class="form-select" aria-label="diagnosa">
                            <option selected>Pilih diagnosa</option>
                            <?php
                                include("koneksi.php");
                                $query = "SELECT * FROM pemeriksaan";
                                $hasil = mysqli_query($con,$query);
                                foreach($hasil as $diag){
                                    ?>
                                    <option value="<?php echo $diag['id'] ?>" <?php echo $pdf['id']==$diag['id'] ? 'selected' : '' ?> > <?php echo $diag['kode'] ?> - <?php echo $diag['diagnosa'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="kelas" class="form-select" id="kelas" aria-label="Default select example">
                            <option  selected>Kelas</option>
                            <option <?php echo $pdf['kelas']=="IS61-A" ? "selected" : ""?> value="IS61-A">IS_61B</option>
                            <option <?php echo $pdf['kelas']=="IS61-B" ? "selected" : ""?> value="IS61-B">IS_61A</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" value="<?php echo $pdf['tempatlahir']?>" name="tempatlahir" class="form-control" id="tempatLahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" value="<?php echo $pdf['tanggallahir']?>" name="tanggallahir" class="form-control" id="tanggalLahir">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" value="<?php echo $pdf['alamat']?>" name="alamat" class="form-control" id="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" value="<?php echo $pdf['email']?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <button type="submit" class="dark">Submit</button>
                    <a href="index.php" class="btn btn-outline-secondary"> Batal </a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/malik.js"></script>
</body>
</html>