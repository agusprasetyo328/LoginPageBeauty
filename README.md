# Login Page Beauty
## Deskripsi
Proyek ini adalah halaman login sederhana dengan tampilan glassmorphism menggunakan HTML, CSS, dan PHP. Halaman login terhubung ke database MySQL untuk memverifikasi data login pengguna.
## Tampilan

## Cara Menggunakan
1. **Prasyarat**
   - Pastikan Anda telah menginstal [XAMPP](https://www.apachefriends.org/index.html) atau sejenisnya untuk menjalankan server lokal dan MySQL.
2. **Clone Repository**
   - Lakukan cloning repository ini ke dalam direktori web server Anda (misalnya, direktori `htdocs` jika menggunakan XAMPP).
3. **Konfigurasi Database**
   - Buat database baru dengan nama yang diinginkan melalui phpMyAdmin atau melalui terminal/Command Prompt dengan perintah SQL, misalnya:
     ```sql
     CREATE DATABASE nama_database;
     ```
   - Buat tabel `users` dengan kolom `username` dan `password` untuk menyimpan data login pengguna. Contoh perintah SQL:
     ```sql
     CREATE TABLE users (
         id INT(11) AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL,
         password VARCHAR(255) NOT NULL
     );
     ```
   - Pastikan Anda telah mengganti konfigurasi database pada file `proses_login.php` dengan nilai yang sesuai, yaitu `$host`, `$username`, `$password`, dan `$database`.

4. **Jalankan Aplikasi**
   - Nyalakan server lokal (misalnya, XAMPP) dan pastikan MySQL sudah berjalan.
   - Buka halaman login dengan mengakses URL ke direktori  `http://localhost`.

5. **Login**
   - Masukkan username dan password yang telah terdaftar di database untuk mencoba login. Jika data login benar, Anda akan mendapatkan pesan "Login berhasil! Selamat datang, [username]", dan jika salah, Anda akan mendapatkan pesan "Username tidak ditemukan!" atau "Password salah!".

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, Anda dapat melakukan fork proyek ini, membuat perubahan di branch baru, dan mengajukan pull request untuk ditinjau.
# LoginPageBeauty
