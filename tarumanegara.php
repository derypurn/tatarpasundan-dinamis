<?php
include "header.html";
require "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tatar Pasundan</title>
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" href="img/kujang_doang.png" type="image/x-icon" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script
    src="https://kit.fontawesome.com/b3c1680686.js"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="content" id="sejarah">
    <div class="center">
      <h2 class="judul">Kerajaan Tarumanagara</h2>
      <img src="img/tarumanegara.jpg" class="fotokerajaan" />
      <p class="text-sejarah">
        Kerajaan Tarumanegara adalah salah satu kerajaan Hindu tertua di
        Indonesia, yang berdiri sekitar abad ke-4 hingga ke-7 Masehi. Kerajaan
        ini terletak di wilayah yang kini dikenal sebagai Jawa Barat,
        Indonesia. Nama "Tarumanegara" berasal dari kata "Taruma," yang
        merujuk pada sungai Citarum, dan "Negara," yang berarti kerajaan atau
        negara.
      </p>

      <div class="paragraf">
        <span class="besar">Sejarah Singkat Kerajaan Tarumanegara</span>
        <br />
        <br />
        <p><span class="sedeng">Pendiri dan Raja-Raja:</span></p>
        <img src="img/purnawarman.png" class="purnawarman" />
        <p>
          Raja pertama Kerajaan Tarumanegara adalah Purnawarman, yang juga
          merupakan raja paling terkenal. Purnawarman dikenal melalui
          prasasti-prasasti yang ditemukan di wilayah Jawa Barat. Purnawarman
          memperluas wilayah kerajaannya hingga mencakup sebagian besar
          wilayah Jawa Barat, termasuk bagian dari Jakarta dan Banten.
        </p>
        <br />
        <p><span class="sedeng">Prasasti-Prasasti: </span></p>
        <img src="img/Prasasti_tugu.jpg" class="prasasti" alt="test" />
        <img src="img/Prasasti_Kebon_Kopi.JPG" class="prasasti" />
        <p>
          Sejumlah prasasti yang ditulis dalam aksara Pallawa dan bahasa
          Sanskerta memberikan informasi tentang kerajaan ini. Beberapa
          prasasti penting dari Tarumanegara antara lain Prasasti Tugu,
          Prasasti Ciaruteun, Prasasti Kebon Kopi, dan Prasasti Muara Cianten.
          Prasasti Tugu, salah satu prasasti paling terkenal, menyebutkan
          pembangunan sebuah saluran air atau irigasi oleh Purnawarman, yang
          menunjukkan kemajuan dalam bidang pertanian dan irigasi.
        </p>
        <br />
        <p><span class="sedeng">Pengaruh Hindu:</span></p>
        <p>
          Kerajaan Tarumanegara dipengaruhi oleh budaya dan agama Hindu. Ini
          terbukti dari prasasti-prasasti yang menunjukkan adanya pemujaan
          terhadap dewa-dewa Hindu, seperti Wisnu dan Siwa.
        </p>
        <br />
        <p><span class="sedeng">Kehidupan Ekonomi:</span></p>
        <p>
          Tarumanegara memiliki ekonomi yang berkembang, dengan kegiatan
          pertanian sebagai basis utama. Selain itu, perdagangan juga
          berkembang karena letak strategis kerajaan di jalur perdagangan
          maritim.
        </p>
        <br />
        <p><span class="sedeng">Kehancuran:</span></p>
        <p>
          Kerajaan Tarumanegara diperkirakan mulai mengalami kemunduran
          sekitar abad ke-7, mungkin karena faktor internal seperti pergolakan
          politik dan perubahan aliansi dengan kerajaan-kerajaan tetangga.
          Kerajaan ini akhirnya runtuh dan wilayahnya diambil alih oleh
          kerajaan lain, seperti Kerajaan Sunda.
        </p>
      </div>
    </div>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".swiper", {
      loop: true,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>