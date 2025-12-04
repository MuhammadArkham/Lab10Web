<?php
include("database.php");
include("form.php"); // Opsional, tapi form edit biasanya butuh value default yang sulit ditangani class Form sederhana di modul

$id = $_GET['id'];
$db = new Database();

// Ambil data berdasarkan ID menggunakan method GET dari Class Database
$data_edit = $db->get("data_barang", "WHERE id_barang='$id'");

if (isset($_POST['submit'])) {
    // Persiapan data untuk update
    $data = [
        'nama' => $_POST['nama'],
        'kategori' => $_POST['kategori'],
        'harga_jual' => $_POST['harga_jual'],
        'harga_beli' => $_POST['harga_beli'],
        'stok' => $_POST['stok']
    ];
    
    // Menggunakan Method UPDATE dari Class Database
    $update = $db->update("data_barang", $data, "id_barang='$id'");
    
    if($update) {
        header("Location: index.php");
    } else {
        echo "Gagal mengubah data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang OOP</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .input { margin-bottom: 10px; }
        label { display: block; font-weight: bold; }
        input[type="text"], select { width: 300px; padding: 5px; }
        .btn { padding: 10px; background: #2980b9; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h3>Ubah Data Barang</h3>
    <form method="post" action="">
        <div class="input">
            <label>Nama Barang</label>
            <input type="text" name="nama" value="<?= $data_edit['nama']; ?>">
        </div>
        <div class="input">
            <label>Kategori</label>
            <select name="kategori">
                <option value="Elektronik" <?= ($data_edit['kategori'] == 'Elektronik') ? 'selected' : ''; ?>>Elektronik</option>
                <option value="Komputer" <?= ($data_edit['kategori'] == 'Komputer') ? 'selected' : ''; ?>>Komputer</option>
                <option value="Hand Phone" <?= ($data_edit['kategori'] == 'Hand Phone') ? 'selected' : ''; ?>>Hand Phone</option>
            </select>
        </div>
        <div class="input">
            <label>Harga Jual</label>
            <input type="text" name="harga_jual" value="<?= $data_edit['harga_jual']; ?>">
        </div>
        <div class="input">
            <label>Harga Beli</label>
            <input type="text" name="harga_beli" value="<?= $data_edit['harga_beli']; ?>">
        </div>
        <div class="input">
            <label>Stok</label>
            <input type="text" name="stok" value="<?= $data_edit['stok']; ?>">
        </div>
        <input type="submit" name="submit" value="Simpan Perubahan" class="btn">
    </form>
</body>
</html>