<?php

require 'config.php';

$nama = $_GET['nama'];

mysqli_query($conn, "DELETE FROM mahasiswa WHERE nama = '$nama'");

echo "
    <script>
        alert('Data berhasil dihapus!')
        location.href='index.php';
    </script>
";