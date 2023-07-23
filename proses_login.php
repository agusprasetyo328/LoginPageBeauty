<?php
// Konfigurasi database
$host = "localhost"; // Ganti dengan alamat server database Anda
$username = "username_db"; // Ganti dengan username database Anda
$password = "password_db"; // Ganti dengan password database Anda
$database = "nama_db"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi berhasil atau tidak
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memproses data dari form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Melakukan query ke database untuk mencari pengguna dengan username yang sesuai
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // Memeriksa apakah data pengguna ditemukan
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Jika password sesuai, maka login berhasil
            echo "Login berhasil! Selamat datang, " . $username;
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>
