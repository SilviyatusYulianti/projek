<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
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
        <title>CRUD | Tambah Data Pesanan</title>
        <div class="content container d-flex justify-content-center align-items-center">
            <div class="row text-center mt-5">
                <h1>Tambah Data Pesanan</h1>
                <div class="card shadow p-3 text-start">
                    <form action="proses-tambah-pesanan.php" method="GET">
                        <fieldset>
                            <div class="my-2">
                                <label for="nama" class="form-label">Nama :</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>
                            <div class="my-2">
                                <label for="pesanan" class="form-label">pesanan :</label>
                                <textarea type="text" name="pesanan" id="alamat" class="form-control" required></textarea>
                            </div>
                            <div class="my-2">
                                <label for="alamat" class="form-label">Alamat :</label>
                                <textarea type="text" name="alamat" id="alamat" class="form-control" required></textarea>
                            </div>
                            <div class="my-2">
                                <label for="no_hp" class="form-label">No HP :</label>
                                <input type="number" name="no_hp" id="no_hp" class="form-control" required>
                            </div>
                            <input name="submit" type="submit" class="btn btn-dark form-control mt-2" value="Tambah">
                        </fieldset>
                    </form>   
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <footer>
        <p>terimakasih telah berkunjung</p>
    </footer>
</body>
</html>