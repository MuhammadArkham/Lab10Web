
Nama : Muhammad Arkhamullah Rifai Asshidiq

Nim : 312410545

Kelas : TI.24.A.5

## Laporan Praktikum

### Lagkah-langkah Praktikum

# Praktikum 10: Pemrograman Berorientasi Objek (OOP) PHP

Repository ini dibuat untuk memenuhi tugas **Praktikum 10 - Pemrograman Web**, yang berfokus pada implementasi konsep **Object Oriented Programming (OOP)** dalam PHP. Tugas ini mencakup pembuatan Class sederhana, Class Library (Form & Database), serta implementasi modularisasi pada aplikasi CRUD Data Barang.

## Deskripsi Project
Pada praktikum ini, struktur kode prosedural diubah menjadi berbasis objek (OOP) untuk meningkatkan modularitas dan penggunaan kembali kode (*reusability*).

**Materi yang dipelajari:**
1.  **Konsep Dasar OOP:** Class, Object, Property, dan Method.
2.  **Encapsulation:** Penggunaan *Access Modifier* (Public, Private, Protected).
3.  **Class Library:** Membuat library sendiri untuk menangani **Form** dan **Koneksi Database**.
4.  **Implementasi CRUD:** Menggunakan class library untuk memanipulasi data barang.

---

## 📂 Struktur Direktori

Project ini disusun dengan struktur berikut:

```text
lab10_php_oop/
├── 📂 config/
│   └── config.php         # Konfigurasi kredensial database
├── 📂 screenshots/        # Folder gambar untuk laporan README
├── database.php           # Class Library untuk menangani koneksi & query MySQL
├── form.php               # Class Library untuk men-generate elemen Form HTML
├── form_input.php         # Contoh implementasi penggunaan Class Form
├── mobil.php              # Latihan dasar pengenalan Class & Object
├── index.php              # Halaman Utama (Read Data Barang) via OOP
├── tambah.php             # Halaman Tambah Data via OOP
├── ubah.php               # Halaman Ubah Data via OOP
└── hapus.php              # Proses Hapus Data via OOP
```
🛠️ Penjelasan Latihan & Tugas
1. Latihan Dasar OOP (Class Mobil)
Membuat class Mobil yang memiliki properti warna, merk, dan harga. Latihan ini mendemonstrasikan cara mengubah nilai properti melalui method.

Fitur:

Mengubah warna mobil.

Menampilkan warna mobil saat ini.

2. Class Library Form
Membuat class Form untuk mempermudah pembuatan tag <form> dan <input> HTML secara dinamis menggunakan PHP.

Penggunaan:
```
PHP

$form = new Form("", "Submit");
$form->addField("txtnama", "Nama");
$form->displayForm();
```
3. Class Library Database
Membuat wrapper class Database untuk menangani koneksi ke MySQL menggunakan mysqli. Class ini membungkus fungsi native PHP menjadi method yang lebih mudah digunakan.
```
Fitur Class Database:

__construct: Membuka koneksi database secara otomatis.

query(): Menjalankan query SQL kustom.

get(): Mengambil data (SELECT) dengan filter opsional.

insert(): Menambahkan data array ke tabel.

update(): Mengubah data array berdasarkan filter.

delete(): Menghapus data berdasarkan filter.
```

4. Implementasi CRUD Data Barang
Menggabungkan Class Database dan Class Form untuk membuat aplikasi Data Barang.
```
Read: Menampilkan tabel data barang dari database.

Create: Menambahkan barang baru menggunakan form OOP.

Update: Mengedit data barang yang sudah ada.

Delete: Menghapus data barang.
```
## Tangkapan Layar (Screenshots)
Berikut adalah hasil output dari kode program yang telah dibuat:

### 1. Output Class Mobil
Menampilkan objek mobil dan perubahan warnanya.

![gambar](https://github.com/MuhammadArkham/Lab10Web/blob/main/Screenshot/Screenshot%202025-12-04%20090612.png?raw=true)

### 2. Output Form Input
Tampilan form HTML yang digenerate oleh Class Form.

![gambar](https://github.com/MuhammadArkham/Lab10Web/blob/main/Screenshot/Screenshot%202025-12-04%20090644.png?raw=true)
### 3. Data Barang (Versi OOP)
Halaman utama yang menampilkan daftar barang dari database menggunakan Class Database.

![gambar](https://github.com/MuhammadArkham/Lab10Web/blob/main/Screenshot/Screenshot%202025-12-04%20092101.png?raw=true)


### 4. Tambah Data (Versi OOP)
Form tambah data yang menggunakan kombinasi Class Form dan Class Database.
![gambar](https://github.com/MuhammadArkham/Lab10Web/blob/main/Screenshot/Screenshot%202025-12-04%20090659.png?raw=true)
