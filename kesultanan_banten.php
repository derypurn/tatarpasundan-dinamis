<?php
include "header.html";
session_start();
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
      <h2 class="judul">Kesultanan Banten</h2>
      <img src="img/kesultanan-banten.webp" class="fotokerajaan" />
      <p class="text-sejarah">
        Kesultanan Banten adalah salah satu kerajaan Islam yang penting di
        Indonesia. Kesultanan ini berdiri pada abad ke-16 dan terletak di
        wilayah yang sekarang dikenal sebagai Provinsi Banten, di ujung barat
        Pulau Jawa. Banten menjadi pusat perdagangan dan kekuasaan di kawasan
        tersebut, terutama karena posisinya yang strategis di Selat Sunda,
        jalur perdagangan penting antara Samudera Hindia dan Laut Cina
        Selatan.
      </p>

      <div class="paragraf">
        <span class="besar">Sejarah Singkat Kesultanan Banten</span>
        <br />
        <br />
        <p><span class="sedeng">Pendirian dan Asal Mula</span></p>
        <img src="img/maulana-hasanudin.jpg" class="purnawarman" />
        <ul>
          <li>
            <p>
              Kesultanan Banten didirikan oleh Sultan Maulana Hasanuddin pada
              tahun 1526. Ia adalah putra dari Sunan Gunung Jati (Fatahillah),
              seorang ulama terkenal dari Cirebon dan salah satu Wali Songo
              yang menyebarkan Islam di Jawa.
            </p>
          </li>
          <li>
            <p>
              Maulana Hasanuddin menaklukkan dan mengislamkan Kerajaan Sunda
              Kelapa (sekarang Jakarta) dan Banten Girang, yang sebelumnya
              merupakan bagian dari Kerajaan Sunda yang bercorak Hindu.
            </p>
          </li>
        </ul>
        <br />
        <p><span class="sedeng">Masa Keemasan</span></p>
        <ul>
          <li>
            <p>
              Kesultanan Banten mencapai masa keemasannya di bawah
              pemerintahan Sultan Ageng Tirtayasa (1651-1683). Pada masa ini,
              Banten menjadi pusat perdagangan internasional yang ramai,
              terutama dalam perdagangan rempah-rempah seperti lada.
            </p>
          </li>
          <li>
            <p>
              Banten menjalin hubungan diplomatik dan dagang dengan berbagai
              bangsa, termasuk Portugis, Belanda, Inggris, Tiongkok, dan
              India.
            </p>
          </li>
        </ul>
        <br />
        <p><span class="sedeng">Hubungan dengan VOC dan Konflik</span></p>
        <ul>
          <li>
            <p>
              Kesultanan Banten mengalami konflik dengan Vereenigde
              Oostindische Compagnie (VOC) atau Perusahaan Hindia Timur
              Belanda, yang memiliki kepentingan besar dalam perdagangan
              rempah-rempah di kawasan tersebut.
            </p>
          </li>
          <li>
            <p>
              Ketegangan dengan VOC memuncak pada masa Sultan Haji, putra
              Sultan Ageng Tirtayasa. Sultan Haji yang mendukung VOC terlibat
              dalam konflik dengan ayahnya, yang menolak campur tangan
              Belanda. Konflik ini dikenal sebagai Perang Saudara Banten
              (1680-1683).
            </p>
          </li>
        </ul>
        <br />
        <p><span class="sedeng">Penurunan Kekuasaan</span></p>
        <ul>
          <li>
            <p>
              Setelah kekalahan Sultan Ageng Tirtayasa, Kesultanan Banten
              mengalami penurunan kekuasaan dan semakin berada di bawah
              pengaruh VOC. Kekuasaan Sultan menjadi terbatas, sementara VOC
              mengendalikan kebijakan ekonomi dan politik.
            </p>
          </li>
          <li>
            <p>
              Pada abad ke-19, Kesultanan Banten akhirnya dihapuskan oleh
              Pemerintah Hindia Belanda pada tahun 1813, dan wilayahnya
              dijadikan bagian dari koloni Hindia Belanda.
            </p>
          </li>
        </ul>
        <br />
        <p><span class="sedeng">Budaya dan Warisan</span></p>
        <ul>
          <li>
            <p>
              Kesultanan Banten meninggalkan warisan budaya yang kaya,
              termasuk bangunan bersejarah seperti Masjid Agung Banten dan
              Keraton Surosowan. Bahasa, adat, dan seni budaya Banten juga
              dipengaruhi oleh tradisi Islam dan budaya lokal.
            </p>
          </li>
          <li>
            <p>
              Banten dikenal sebagai pusat pengajaran agama Islam dan menjadi
              salah satu wilayah penting dalam sejarah penyebaran Islam di
              Indonesia.
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

</html>