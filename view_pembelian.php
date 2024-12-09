<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Pembelian</h2>
        <?php
        // Koneksi ke database
        $koneksi = new mysqli("localhost", "root", "", "keuangan");

        if ($koneksi->connect_error) {
            die("Koneksi gagal: " . $koneksi->connect_error);
        }

        // Query untuk mengambil data pembelian
        $sql = "SELECT * FROM pembelian";
        $result = $koneksi->query($sql);

        echo "<table>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga Pembelian (Rp)</th>
                    <th>Diskon (%)</th>
                    <th>Total Harga (Rp)</th>
                    <th>Nama Pembeli</th>
                    <th>Waktu Pembelian</th>
                    <th>Tempat Perbelanjaan</th>
                    <th>Status Member</th>
                    <th>Aksi</th>
                </tr>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nama_barang']}</td>
                        <td>{$row['harga_pembelian']}</td>
                        <td>{$row['diskon']}</td>
                        <td>{$row['total_harga']}</td>
                        <td>{$row['nama_pembeli']}</td>
                        <td>{$row['waktu_pembelian']}</td>
                        <td>{$row['tempat_perbelanjaan']}</td>
                        <td>{$row['status_member']}</td>
                        <td>
                            <a href='hapus_pembelian.php?id={$row['id_pembelian']}' class='delete-button'>Hapus</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Tidak ada data pembelian.</td></tr>";
        }

        echo "</table>";

        // Tutup koneksi
        $koneksi->close();
        ?>
        <a href="index.php" class="back-button">Tambah Pembelian Baru</a>
    </div>
</body>
</html>
