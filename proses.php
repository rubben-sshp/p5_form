<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];

    echo "<h2>Data yang Anda Masukkan:</h2>";
    echo "Nim: $nim<br>";
    echo "Nama: $nama<br>";
    echo "Tempat Lahir: $tempat_lahir<br>";
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "Alamat: $alamat<br>";
    if (!empty($prodi)) {
        echo "Program Studi: $prodi<br>";
    }
}
?>