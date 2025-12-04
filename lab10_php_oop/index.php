<?php
include("database.php");
include("form.php");

$db = new Database();
$sql = "SELECT * FROM data_barang";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 10 - OOP</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #eee; }
        .btn { padding: 10px; background: #2980b9; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Data Barang (Versi OOP)</h1>
    <a href="tambah.php" class="btn">Tambah Barang</a>
    
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php if($result) : ?>
            <?php while($row = mysqli_fetch_array($result)) : ?>
            <tr>
                <td><img src="../lab9_php_modular/gambar/<?= $row['gambar'];?>" width="80"></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['kategori']; ?></td>
                <td><?= $row['harga_jual']; ?></td>
                <td><?= $row['harga_beli']; ?></td>
                <td><?= $row['stok']; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id_barang'];?>">Ubah</a> | 
                    <a href="hapus.php?id=<?= $row['id_barang'];?>">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php endif; ?>
    </table>
</body>
</html>