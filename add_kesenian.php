<?php
include "header.html";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tatar Pasundan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style-login.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Tambah Kesenian</header>
                <form action="action_kesenian.php" method="post">
                    <div class="field input">
                        <input type="text" placeholder="Nama Kesenian" name="nama_kesenian" class="input" required>
                    </div>

                    <div class="field input">
                        <textarea name="penjelasan" class="input" id="penjelasan" placeholder="Penjelasan" required></textarea>
                    </div>
                    <div class="input-field">
                        <label for="foto">FOTO</label>
                        <input type="file" placeholder="Foto Kesenian" name="foto" class="input" required>
                    </div>

                    <div class="field button-field">
                        <input type="submit" name="login" value="Login" class="btn">
                    </div>
                </form>
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