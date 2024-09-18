<?php
include "koneksi.php";
session_start();

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Memeriksa apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $koneksi->real_escape_string($_POST['nama']);
    $email = $koneksi->real_escape_string($_POST['email']);
    $subject = $koneksi->real_escape_string($_POST['subject']);
    $msg = $koneksi->real_escape_string($_POST['msg']);

    // Query untuk memasukkan data ke dalam tabel message
    $query = "INSERT INTO message (nama, email, subject, msg) VALUES ('$nama', '$email', '$subject', '$msg')";

    // Mengeksekusi query dan memeriksa apakah berhasil
    if ($koneksi->query($query) === TRUE) {
        // Simpan pesan sukses ke session
        $_SESSION['success_message'] = "Pesan berhasil dikirim!";
        header("Location: index.php#formsaran"); // Redirect kembali ke form setelah berhasil kirim pesan
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    // Menutup koneksi
    $koneksi->close();
}
