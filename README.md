# SIPN - Sistem Informasi Pengelolaan Nilai
Tugas Besar Pemrograman Web 2026/2027, SMK Sangkuriang 1 Cimahi (PHP native + MySQL + Bootstrap 5).

## Cara menjalankan
1. Import `sipn.sql` ke MySQL/MariaDB (otomatis membuat database `db_siacad_smk_2`).
2. Sesuaikan host/user/password di `koneksi.php` bila perlu.
3. Taruh folder proyek di `htdocs` (XAMPP) atau jalankan `php -S localhost:8000`.
4. Buka `index.php`, login memakai akun di `AKUN_LOGIN.md`.

## Fitur per role
| Fitur | Admin | Guru | Siswa |
|---|:-:|:-:|:-:|
| Login / Logout / Dashboard / Profil (lihat & edit) | ✔ | ✔ | ✔ |
| Register | | | ✔ |
| Kelola User, Siswa, Guru, Mapel, Mengajar (CRUD) | ✔ | | |
| Kelola Nilai Siswa (CRUD) | | ✔ | |
| Melihat Nilai Siswa | | | ✔ |

## Catatan teknis
- Semua form POST memakai token CSRF; password disimpan dalam bentuk hash (password lama otomatis di-hash saat login).
- Akses database lewat `dbq()` di `auth.php` (nilai di-escape), jalan di PHP 7.x dan 8.x.
- `cek_db.php` membandingkan database dengan skema soal. Hapus file ini dan `setup_admin.php` sebelum dikumpulkan.
- Font dan Bootstrap dimuat dari CDN, jadi butuh koneksi internet saat aplikasi dibuka.

## Tampilan (v4)
Gaya neo-brutalis: garis hitam tebal, bayangan keras, blok warna datar (kuning, biru, mint, pink), huruf Archivo Black / Archivo / Space Mono. Semua ada di `style.css`; font dan Bootstrap dimuat dari CDN, jadi butuh internet.
