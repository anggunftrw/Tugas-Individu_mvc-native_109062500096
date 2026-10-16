# MVC PHP Native - Data Film

Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller pada PHP Native.

## Kebutuhan
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti XAMPP atau Laragon
- Git

## Instalasi
1. Clone atau salin project ke folder web server (Laragon: folder `www`).
2. Import `database/film.sql`.
3. Sesuaikan koneksi pada `config/database.php`.
4. Buka `http://localhost/mvc-native/public/index.php`.

## Struktur MVC
- `app/models/` : akses dan operasi data.
- `app/controllers/` : alur request dan pemanggilan Model/View.
- `app/views/` : tampilan HTML.
- `config/` : konfigurasi koneksi database.
- `database/` : skema dan data awal SQL.
- `public/` : entry point aplikasi.

## Fitur
- Menampilkan data film
- Menambah data film
- Mengubah data film
- Menghapus data film

## Atribut Film
- judul
- genre
- tahun_rilis
- sutradara
- durasi (menit)
- rating

## Histori Git
### git log --oneline --graph --decorate

PS D:\laragon\www\mvc-native_film> git log --oneline --graph --decorate
* 701e0ef (HEAD -> main) feat: add complete CRUD routing
* 5d1b795 feat: add complete film CRUD views
* e6911a1 feat: add complete film CRUD controller
* 731dac4 feat: add complete film CRUD model
* f36448f feat: add PDO database connection
* d73b370 feat: add film database schema and seed data
* 3be74aa chore: initialize mvc php native project
