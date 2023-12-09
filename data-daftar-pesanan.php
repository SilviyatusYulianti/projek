<?php 
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
    <meta charset="UTF-8">
    <link rel="styleSheet" href="style1.css"/>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png">
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="food.html">Food</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="delivery.html">Delivery</a></li>
        </ul>
    </header>

    <main>
        <title>CRUD | Data Daftar Pesanan</title>

        <div class="content container-fluid text-center justify-content-center mt-5 p-4">
            <div class="row">
                <h1>Data Daftar Pesanan</h1>
                <div class="card shadow p-3">
                    <table class="table table-hover shadow">
                        <thead>
                            <tr class="table-dark">
                                <th>NAMA</th>
                                <th class="col-5">PESANAN</th>
                                <th class="col-5">ALAMAT</th>
                                <th>NOMOR HP</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            // Kode untuk menampilkan data mahasiswa
                            $sql = "SELECT * FROM pesanan";
                            $result = $conn->query($sql);
                            // var_dump($result);
                            while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= $data["nama"]; ?></td>
                                <td><?= $data["pesanan"]; ?></td>
                                <td><?= $data["alamat"]; ?></td>
                                <td><a href="" target="_blank"><?= $data["no_hp"]; ?></a></td>
                                <td>
                                    <a class="fw-bold" href="ubah.php?nama<?= $data["nama"]; ?>">Ubah</a> | 
                                    <a class="fw-bold" href="hapus.php?nama=<?= $data["nama"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
                                </td>
                            </tr>
                            <?php }
                            ;?>
                        </tbody>
                    </table>
                    <div><a class="btn btn-dark" href="tambah-pesanan.php"><i class="fas fa-plus"></i>&nbsp; Tambah baru</a></div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>