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
                <form action="proses_form.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="nik" class="form-label">Nik</label>
                        <input type="text" name="nik" class="form-control" id="nik">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Jenis Kelamin</label>
                        <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan">
                        <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                        </label>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="diagnosa" class="form-label">diagnosa</label>
                        <select name="diagnosa" class="form-select" aria-label="diagnosa">
                            <option selected> diagnosa</option>
                            <?php
                                include("koneksi.php");
                                $query = "SELECT * FROM pemeriksaan";
                                $hasil = mysqli_query($con,$query);
                                foreach($hasil as $diag){
                                    ?>
                                    <option value="<?php echo $diag['id'] ?>"> <?php echo $diag['kode'] ?> - <?php echo $diag['diagnosa'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">HP</label>
                        <input type="text" name="hp" class="form-control" id="hp">
                    </div>
                    <div class="mb-3">
                        <label for="bpjs" class="form-label">BPJS</label>
                        <input type="text" name="bpjs" class="form-control" id="bpjs">
                    </div>
                    <button type="submit" class="dark">Submit</button>
                    <a href="pendaftaran.php" class="btn btn-outline-secondary"> Batal </a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/malik.js"></script>
</body>
</html>