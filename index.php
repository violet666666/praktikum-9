<?php
    //memanggil file functions.php
    require 'functions.php';

    //memanggil function query pengambilan data pada table mahasiswa
    //lalu ditampung kedalam variable mahasiswa
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <th>
                No.
            </th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
        </tr>

        <?php foreach($mahasiswa as $item) : ?>
        <tr>
            <td><?= $item["id"] ?></td>
            <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('yakin ingin menghapus?')">
            <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
                </a>
            </td>
            <td><?= $item["nama"] ?></td>
            <td><?= $item["email"] ?></td>
            <td><?= $item["address"] ?></td>
            <td><?= $item["gender"] ?></td>
            <td><?= $item["position"] ?></td>
            <td><?= $item["status"] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <h6 style="text-align: center">
    <a href="tambah.php">
        <button type="submit" name="submit" class="btn btn-primary">Tambah Mahasiswa</button>
    </a>
    </h6>
</body>
</html>