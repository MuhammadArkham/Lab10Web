<?php
include("database.php");
include("form.php");

if (isset($_POST['submit'])) {
    $db = new Database();
    // Persiapan data untuk insert
    $data = [
        'nama' => $_POST['nama'],
        'kategori' => 'Elektronik', // Default dulu karena class Form kita sederhana
        'harga_jual' => $_POST['harga_jual'],
        'harga_beli' => $_POST['harga_beli'],
        'stok' => $_POST['stok'],
        'gambar' => 'default.jpg' // Default dulu
    ];
    
    // Menggunakan Method INSERT dari class Database
    $simpan = $db->insert("data_barang", $data);
    if($simpan) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data";
    }
}

echo "<html><head><title>Tambah Barang OOP</title></head><body>";
echo "<h3>Tambah Data Barang</h3>";

// Menggunakan Class Form
$form = new Form("", "Simpan Data");
$form->addField("nama", "Nama Barang");
$form->addField("harga_jual", "Harga Jual");
$form->addField("harga_beli", "Harga Beli");
$form->addField("stok", "Stok");

$form->displayForm();
echo "</body></html>";
?>