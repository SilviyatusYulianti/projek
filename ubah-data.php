<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $pesanan = $_POST['pesanan'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = "UPDATE pesanan SET 
    nama = '$nama', 
    pesanan='$pesanan', 
    alamat='$alamat', 
    no_hp = '$no_hp' 
    WHERE 
    nama='$nama'";

    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
            alert('Data berhasil diubah');
            window.location.replace('data-daftar-mahasiswa.php?status = True');
            </script>";
    } else {
        echo "
            <script>
            alert('Data tidak berhasil diubah');
            window.location.replace('tambah-mahasiswa.php?status = False');
            </script>";
    }

} else {
    echo 'AKSES DENIED!';
}

?>