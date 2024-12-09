<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "keuangan");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil ID pembelian yang akan dihapus dari URL
if (isset($_GET['id'])) {
    $id_pembelian = $_GET['id'];

    // Query untuk menghapus data pembelian
    $sql = "DELETE FROM pembelian WHERE id_pembelian = $id_pembelian";

    if ($koneksi->query($sql) === TRUE) {
        // Redirect kembali ke halaman view_pembelian.php setelah data dihapus
        header("Location: view_pembelian.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "ID Pembelian tidak ditemukan.";
}

// Tutup koneksi
$koneksi->close();
?>
