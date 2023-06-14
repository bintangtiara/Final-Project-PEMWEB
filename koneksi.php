<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'rentalin';

$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    die('Koneksi gagal: ' . $connection->connect_error);
}

// Mendapatkan data dari form
$Nama_lengkap = $_POST['nama'];
$hp = $_POST['nohp'];
$mobil = $_POST['namamobil'];
$tgl = $_POST['pinjam'];
$balik = $_POST['pengembalian'];
$total = $_POST['unit'];
$total_sewa = $_POST['sewa'];
$jaminan = $_POST ['jaminan'];
$bukti = $_POST ['bukti'];

// Mengeksekusi query untuk menyimpan data ke tabel biodata
$query = "INSERT INTO `peminjam` (`NAMA_LENGKAP`, `NO_HP`, `Nama_mobil`, `TGL_PEMINJAMAN`, `TGL_PENGEMBALIAN`, `total_unit`, `TOTAL_BIAYA_SEWA`, `JENIS_JAMINAN`) 
VALUES ('$Nama_lengkap', '$hp', '$mobil', '$tgl', '$balik', '$total', '$total_sewa', '$jaminan')";
if ($connection->query($query) === TRUE) {
    echo "<script>
    document.location='index2.php'
    </script>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
$connection->close();
?>