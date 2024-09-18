<?php
include "header.html";
session_start();
require "koneksi.php";
if (isset($_POST['login'])) {
    $username = $koneksi->real_escape_string($_POST['username']);
    $password = md5($_POST['password']);
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: profil.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
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
                <header>Login</header>
                <?php if (isset($error)): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endif; ?>
                <form action="#" method="post">
                    <div class="field input-field">
                        <input type="username" placeholder="Username" name="username" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" name="password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <input type="submit" name="login" value="Login" class="btn">
                    </div>
                </form>

                <div class="form-link">
                    <span>Belum punya akun? <a href="form_signup.php">Registrasi</a></span>
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