<?php
// File: input.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pembelian Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Pembelian Barang</h2>
        <form action="proses_pembelian.php" method="POST">
            <label for="nama_barang">Nama Barang:</label><br>
            <select id="nama_barang" name="nama_barang" required>
                <option value="ATK">ATK</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Sembako">Sembako</option>
            </select><br><br>

            <label for="harga_pembelian">Jumlah Harga Pembelian (Rp):</label><br>
            <input type="number" id="harga_pembelian" name="harga_pembelian" required><br><br>

            <label for="diskon">Diskon (%):</label><br>
            <input type="number" id="diskon" name="diskon" required><br><br>

            <label for="nama_pembeli">Nama Pembeli:</label><br>
            <input type="text" id="nama_pembeli" name="nama_pembeli" required><br><br>

            <label for="waktu_pembelian">Waktu Pembelian:</label><br>
            <input type="datetime-local" id="waktu_pembelian" name="waktu_pembelian" required><br><br>

            <label for="tempat_perbelanjaan">Tempat Perbelanjaan:</label><br>
            <input type="text" id="tempat_perbelanjaan" name="tempat_perbelanjaan" value="PT.MINS" readonly><br><br>

            <label for="status_member">Status Member:</label><br>
            <select id="status_member" name="status_member" required>
                <option value="Gold">Gold</option>
                <option value="Platinum">Platinum</option>
                <option value="Silver">Silver</option>
            </select><br><br>

            <button type="submit">Simpan Data</button>
        </form>
        <br>
        <a href="view_pembelian.php" class="back-button">Lihat Semua Pembelian</a>
    </div>
</body>
</html>
