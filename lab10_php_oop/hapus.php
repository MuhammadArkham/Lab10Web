<?php
include("database.php");

$id = $_GET['id'];
$db = new Database();

// Menggunakan Method DELETE dari Class Database
$hapus = $db->delete("data_barang", "WHERE id_barang='$id'");

if($hapus) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data";
}
?>