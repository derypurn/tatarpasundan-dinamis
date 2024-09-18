<?php
include "header.html";
session_start();
require "koneksi.php";

if (isset($_POST['register'])) {
    $email = $koneksi->real_escape_string($_POST['email']);
    $username = $koneksi->real_escape_string($_POST['username']);
    $password = md5($_POST['password']);
    $query = "SELECT * FROM login WHERE username='$username' OR email='$email'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 0) {
        $query = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";
        if ($koneksi->query($query)) {
            $success = "Registrasi berhasil! Silakan kembali ke form login.";
        } else {
            $error = "Terjadi kesalahan saat registrasi. Silakan coba lagi.";
        }
    } else {
        $error = "Username atau email sudah terdaftar!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style-login.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Registrasi</header>
                <?php if (isset($error)): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endif; ?>

                <?php if (isset($success)): ?>
                    <p class="success"><?php echo $success; ?></p>
                <?php endif; ?>
                <form action="" method="POST">
                    <div class="field input-field">
                        <input type="text" placeholder="Email" name="email" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input type="text" placeholder="Username" name="username" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" name="password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <input type="submit" name="register" value="Register" class="button">
                    </div>
                </form>

                <div class="form-link">
                    <span>Sudah punya akun? <a href="form_login.php">Login</a></span>
                </div>
            </div>
        </div>

        <!-- JavaScript -->
        <script>
            const forms = document.querySelector(".forms"),
                pwShowHide = document.querySelectorAll(".eye-icon"),
                links = document.querySelectorAll(".link");

            pwShowHide.forEach(eyeIcon => {
                eyeIcon.addEventListener("click", () => {
                    let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

                    pwFields.forEach(password => {
                        if (password.type === "password") {
                            password.type = "text";
                            eyeIcon.classList.replace("bx-hide", "bx-show");
                            return;
                        }
                        password.type = "password";
                        eyeIcon.classList.replace("bx-show", "bx-hide");
                    })

                })
            })
        </script>
</body>

</html>