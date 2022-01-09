<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <a style="position: absolute;"href="index.php">
    <button type="submit" name="submit" class="btn btn-info"><-Back to Daftar Mahasiswa</button>
    </a>
    <h2 style="text-align: center">Tambah Mahasiswa</h2>
    <form action="" method="POST" style="max-width: 500px;  margin-right: auto;
    margin-left: auto;">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select" aria-label="Default select example">
                    <option selected>Select Gender</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" name="position">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-select" aria-label="Default select example">
                    <option selected>Select Status</option>
                    <option value="Parttime">Part-time</option>
                    <option value="Fulltime">Full-time</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </form>
</body>
<?php
    require 'functions.php';

    //memeriksa apakah tombol submit telah ditekan atau belum
    if( isset($_POST["submit"])){
        //jika sudah ditekan dijalankan function tambah
        if(tambah($_POST) > 0) {
            echo '<script type ="text/JavaScript">';  
            echo 'alert(" Berhasil ")';
            echo '</script>';  
        } else {
            echo "gagal!";
        }
    }

?>

</html>