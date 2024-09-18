<?php
include "header.html";
session_start();
require_once "koneksi.php";
if (!isset($_SESSION['username'])) {
  header("Location: form_login.php");
  exit;
}
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
      <h2 class="judul">Kerajaan Sunda</h2>
      <img src="img/kerajaansunda.jpg" class="fotokerajaan" />
      <p class="text-sejarah">
        Kerajaan Sunda adalah salah satu kerajaan penting di wilayah barat Pulau Jawa yang berdiri dari abad ke-7 hingga abad ke-16 Masehi. Kerajaan ini mencakup wilayah yang sekarang dikenal sebagai Provinsi Banten, Jakarta, Jawa Barat, dan sebagian Jawa Tengah. Kerajaan Sunda merupakan penerus dari Kerajaan Tarumanegara yang lebih tua, yang berakhir sekitar abad ke-7.
      </p>

      <div class="paragraf">
        <span class="besar">Sejarah Singkat Kerajaan Sunda</span>
        <br />
        <br />
        <p><span class="sedeng">Awal Berdiri</span></p>
        <ul>
          <li>
            <p>
              Setelah runtuhnya Kerajaan Tarumanegara, wilayah kekuasaannya terbagi menjadi beberapa kerajaan kecil, salah satunya adalah Kerajaan Sunda. Kerajaan ini didirikan oleh Tarusbawa pada tahun 669 M, yang merupakan penguasa terakhir dari Kerajaan Tarumanegara.
            </p>
          </li>
          <li>
            <p>
              Tarusbawa memindahkan pusat pemerintahan dari wilayah sekitar Bogor ke daerah yang lebih ke barat, dekat dengan wilayah yang sekarang dikenal sebagai Banten.
            </p>
          </li>
        </ul>
        <br />
        <p><span class="sedeng">Wilayah Kekuasaan</span></p>
        <ul>
          <li>
            <p>
              Kerajaan Sunda menguasai wilayah barat Pulau Jawa, meliputi daerah yang sekarang menjadi Provinsi Banten, Jakarta, sebagian Jawa Barat, dan bagian barat Jawa Tengah.
            </p>
          </li>
          <li>
            <p>
              Kerajaan ini berbatasan dengan Kerajaan Galuh di sebelah timur, yang pada akhirnya sering kali dianggap sebagai kerajaan yang terpisah, meskipun keduanya sering bersatu dalam pemerintahan gabungan yang disebut Kerajaan Sunda-Galuh.
            </p>
          </li>
        </ul>
        <br />
        <p><span class="sedeng">Masa Keemasan</span></p>
        <ul>
          <li>
            <p>
              Masa keemasan Kerajaan Sunda terjadi pada sekitar abad ke-14 hingga ke-15, ketika perdagangan internasional melalui pelabuhan-pelabuhan di sepanjang pantai utara Jawa Barat, seperti Sunda Kelapa (Jakarta), berkembang pesat.
            </p>
          </li>
          <li>
            <p>
              Catatan perjalanan dari musafir Tiongkok, Ma Huan, pada abad ke-15 menyebutkan bahwa Sunda Kelapa adalah pelabuhan penting yang ramai dengan perdagangan internasional, terutama perdagangan lada yang menjadi komoditas utama kerajaan ini.
            </p>
          </li>
        </ul>
        <br />
        <p><span class="sedeng">Budaya dan Agama</span></p>
        <ul>
          <li>
            <p>
              Kerajaan Sunda mengadopsi budaya Hindu-Buddha, yang terbukti dari berbagai prasasti dan artefak yang ditemukan. Namun, pengaruh Islam mulai masuk ke wilayah Sunda pada abad ke-15 melalui jalur perdagangan.
            </p>
          </li>
          <li>
            <p>
              Meskipun Islam menyebar dengan cepat di wilayah pesisir, agama Hindu dan Buddha tetap dianut oleh sebagian besar masyarakat Sunda, terutama di daerah pedalaman.
            </p>
          </li>
        </ul>
        <br />
        <p><span class="sedeng">Runtuhnya Kerajaan Sunda</span></p>
        <ul>
          <li>
            <p>
              Runtuhnya Kerajaan Sunda terkait dengan ekspansi Kesultanan Banten yang mulai menguasai wilayah-wilayah penting di Jawa Barat. Pada tahun 1527, pasukan dari Kesultanan Demak dan Kesultanan Cirebon, di bawah pimpinan Fatahillah, berhasil merebut Sunda Kelapa dari Kerajaan Sunda. Peristiwa ini menandai awal berakhirnya kekuasaan Kerajaan Sunda.
          </li>
          <li>
            <p>
              Setelah kehilangan Sunda Kelapa, kekuasaan Kerajaan Sunda semakin melemah, dan akhirnya kerajaan ini runtuh, dengan wilayah-wilayahnya diambil alih oleh Kesultanan Banten dan Cirebon.
            </p>
          </li>
        </ul>
        <br />
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

</html>`