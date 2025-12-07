# 📘 Laravel CRUD Siswa --- Pembelajaran Dasar Laravel

Project ini dibuat sebagai latihan dasar penggunaan **Laravel** untuk
membangun fitur **CRUD (Create, Read, Update, Delete)**.
Data yang dikelola dalam aplikasi ini meliputi:

-   **Nama**
-   **Kelas**
-   **Jurusan**

Project ini cocok untuk pemula yang ingin memahami alur pembuatan CRUD
menggunakan Laravel, mulai dari routing, controller, model, migration,
hingga tampilan Blade.

------------------------------------------------------------------------

## 🚀 Fitur Utama

-   ✏️ **Tambah data siswa**
-   📄 **Lihat semua data siswa**
-   📝 **Edit data siswa**
-   ❌ **Hapus data siswa**
-   🔄 **Validasi input**
-   🎨 **Tampilan sederhana dan mudah dipahami**

------------------------------------------------------------------------

## 🛠️ Instalasi Project

Ikuti langkah-langkah berikut untuk menjalankan project di lokal:

### 1️⃣ Clone Repository

``` bash
git clone https://github.com/kazeenginers/laravel-crud-example.git
cd nama-repo
```

### 2️⃣ Install Dependencies

``` bash
composer install
```

### 3️⃣ Buat File Environment

``` bash
copy .env.example paste .env
```

### 4️⃣ Generate Application Key

``` bash
php artisan key:generate
```

### 5️⃣ Atur Database di `.env`

Contoh konfigurasi:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crud_siswa
    DB_USERNAME=root
    DB_PASSWORD=

### 6️⃣ Migration Database

``` bash
php artisan migrate
```

### 7️⃣ Jalankan Server

``` bash
php artisan serve
```

Aplikasi bisa dibuka melalui:\
👉 http://127.0.0.1:8000

------------------------------------------------------------------------

## 📂 Struktur Data Siswa

  Kolom       Tipe     Deskripsi
  ----------- -------- ---------------------------------
  `nama`      string   Nama lengkap siswa
  `kelas`     string   Kelas siswa (misal: X, XI, XII)
  `jurusan`   string   Jurusan siswa (misal: RPL, TKJ)

------------------------------------------------------------------------

## 📘 Tujuan Pembelajaran

Project ini dibuat untuk memahami:

-   Cara membuat migration & model
-   Cara membuat routing dasar
-   Cara memisahkan fungsi controller untuk CRUD
-   Cara menggunakan Blade Template
-   Cara melakukan validasi input
-   Cara handle form (POST, PUT, DELETE)

------------------------------------------------------------------------

## 🤝 Kontribusi

Project ini bersifat pembelajaran.
Silakan modifikasi, perbaiki, atau kembangkan sesuai kebutuhan!

------------------------------------------------------------------------

## 📜 Lisensi

Project ini bebas digunakan untuk keperluan belajar.
