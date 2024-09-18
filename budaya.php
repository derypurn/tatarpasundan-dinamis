<?php
include 'koneksi.php';
include "header.html";
require "session.php";

$sql = "SELECT * FROM budaya";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kesenian</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: black;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      background-color: black;
      padding: 20px;
      margin: 50px;
    }

    .card {
      background-color: #333;
      color: white;
      margin: 10px;
      padding: 20px;
      flex: 1 1 calc(33.333% - 40px);
      /* Fleksibel, untuk 3 kolom */
      text-align: center;
      transition: transform 0.3s;
      box-sizing: border-box;
      border-radius: 20px;
    }

    .card img {
      width: 100%;
      height: 200px;
      border-radius: 10px;
    }

    .card:hover {
      transform: scale(1.05);
      background-color: #ff6600;
    }

    .tonton-video {
      background-color: #ffc941;
      border-radius: 50px;
      border: none;
      height: 30px;
      width: 120px;
    }

    p {
      color: white;
      text-align: center;
      padding-top: 25px;
      padding-bottom: 25px;
    }

    h1 {
      color: white;
      text-align: center;
    }

    /* Responsivitas */
    @media (max-width: 1024px) {
      .card {
        flex: 1 1 calc(50% - 40px);
        /* Fleksibel, untuk 2 kolom */
      }
    }

    @media (max-width: 768px) {
      .card {
        flex: 1 1 calc(100% - 40px);
        /* Fleksibel, untuk 1 kolom */
      }
    }
  </style>
</head>

<body>
  <h1>Wisata</h1>
  <p class="text-sejarah">
    Berikut adalah beberapa rekomendasi tempat wisata yang berada di Tatar Pasundan yang wajib kalian kunjungi, yaitu :
  </p>
  <div class="container">
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<img src="budayafoto/' . $row["foto"] . '" alt="Foto ' . $row["nama_budaya"] . '" style="width:100%;">';
        echo '<h2>' . $row["nama_budaya"] . '</h2>';
        echo '<p>' . $row["penjelasan"] . '</p>';
        echo '</div>';
      }
    }
    ?>
  </div>

</body>

</html>