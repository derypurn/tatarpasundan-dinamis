<?php
include "header.html";
require "session.php";
require "koneksi.php";

$username = $_SESSION['username'];
$query = "SELECT email FROM login WHERE username='$username'";
$result = $koneksi->query($query);
$user = $result->fetch_assoc();
$email = $user['email'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            text-align: center;
            background-color: #333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .profile-container img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .profile-container h2 {
            margin: 15px 0;
        }

        .profile-container p {
            margin: 5px 0;
            font-size: 18px;
        }

        .profile-container button {
            background-color: #ff5722;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .profile-container button:hover {
            background-color: #e64a19;
        }
    </style>
</head>

<body>

    <div class="profile-container">
        <img src="img/user.png" alt="User Avatar">
        <h2><?php echo htmlspecialchars($username); ?></h2>
        <p><?php echo htmlspecialchars($email); ?></p>
        <form method="POST" action="logout.php">
            <button type="submit">Logout</button>
        </form>
    </div>
</body>

</html>