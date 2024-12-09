<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "keuangan");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Tangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST['nama_barang'];
    $harga_pembelian = $_POST['harga_pembelian'];
    $diskon = $_POST['diskon'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $waktu_pembelian = $_POST['waktu_pembelian'];
    $tempat_perbelanjaan = $_POST['tempat_perbelanjaan'];
    $status_member = $_POST['status_member'];

    // Hitung total setelah diskon
    $total_harga = $harga_pembelian - ($harga_pembelian * $diskon / 100);

    // Query untuk menyimpan data pembelian
    $sql = "INSERT INTO pembelian (nama_barang, harga_pembelian, diskon, total_harga, nama_pembeli, waktu_pembelian, tempat_perbelanjaan, status_member)
            VALUES ('$nama_barang', '$harga_pembelian', '$diskon', '$total_harga', '$nama_pembeli', '$waktu_pembelian', '$tempat_perbelanjaan', '$status_member')";

    if ($koneksi->query($sql) === TRUE) {
        // Redirect ke halaman view setelah berhasil
        header("Location: view_pembelian.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

// Tutup koneksi
$koneksi->close();
?>
