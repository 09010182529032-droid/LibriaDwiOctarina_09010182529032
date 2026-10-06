# UTS Pemrograman Web III - Sistem Perpustakaan

Project memenuhi studi kasus UTS: Laravel, MVC, Authentication, CRUD, Eloquent ORM, Migration, Seeder, Relationship dan Git. Bonus: pencarian berdasarkan judul/penulis.

## Instalasi
1. Buat database `uts_buku` di MySQL.
2. `composer install`
3. `copy .env.example .env` (Windows)
4. `php artisan key:generate`
5. Atur DB di `.env`.
6. `php artisan migrate --seed`
7. `php artisan serve`
8. Login dengan `admin@perpustakaan.test` / `password`.

## Git
Contoh commit: Initial Laravel project; Add database and book model; Add book CRUD and authentication.
