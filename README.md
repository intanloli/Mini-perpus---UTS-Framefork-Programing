# Mini-Perpus (UTS Framework Programming)

Aplikasi web Laravel untuk mengelola inventaris perpustakaan: kategori dan buku (CRUD). Intan Jelita Loli (24210009)

## Fitur

- CRUD Kategori dan Buku
- Dropdown kategori dinamis dari database
- Tabel buku menampilkan nama kategori
- Kategori yang masih memiliki buku tidak bisa dihapus
- Validasi server-side di Controller dengan pesan @error

## Teknologi

Laravel 12, MySQL, Blade, Eloquent ORM (hasMany dan belongsTo), Bootstrap 5
## Cara Menjalankan
1. composer install
2. copy .env.example .env, lalu php artisan key:generate
3. Atur .env: DB_CONNECTION=mysql, DB_DATABASE=mini_perpus, DB_USERNAME=root, DB_PASSWORD kosong
4. Buat database mini_perpus, lalu import mini_perpus.sql (atau jalankan php artisan migrate --seed)
5. php artisan serve, lalu buka http://127.0.0.1:8000
