<?php
include 'config.php';
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $pesanan = $_GET['pesanan'];
    $alamat = $_GET['alamat'];
    $no_hp = $_GET['no_hp'];

    $sql = "INSERT INTO mahasiswa VALUE ('$nama', '$pesanan','$alamat', '$no_hp')";

    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
            alert('Data berhasil dimasukkan');
            window.location.replace('data-daftar-pesanan.php?status = True');
            </script>";
    } else {
        echo "
            <script>
            alert('Data tidak berhasil dimasukkan');
            window.location.replace('tambah-pesanan.php?status = False');
            </script>";
    }

} else {
    echo 'AKSES DENIED!';
}

?>