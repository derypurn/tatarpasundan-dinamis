<?php
include "header.html";
include "session.php";
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
      <h2 class="judul">Kerajaan Galuh</h2>
      <img src="img/kerajaan-galuh.jpg" class="fotokerajaan" />
      <p class="text-sejarah">
        Kerajaan Galuh adalah salah satu kerajaan penting dalam sejarah Jawa
        Barat, Indonesia. Kerajaan ini adalah bagian dari sejarah panjang
        Kerajaan Sunda yang meliputi sebagian besar wilayah barat Pulau Jawa.
        Nama "Galuh" berasal dari bahasa Sunda Kuno yang berarti "permata"
        atau "batu mulia," mencerminkan pentingnya kerajaan ini dalam sejarah
        dan budaya Sunda.
      </p>

      <div class="paragraf">
        <span class="besar">Sejarah Singkat Kerajaan Galuh</span>
        <br />
        <br />
        <p><span class="sedeng">Asal Usul dan Pendirian</span></p>
        <p>
          Kerajaan Galuh didirikan sekitar abad ke-7 Masehi. Menurut berbagai
          sumber sejarah, termasuk naskah Sunda Kuno dan catatan sejarah
          lainnya, Galuh merupakan hasil pemekaran dari Kerajaan Sunda. Raja
          pertama Kerajaan Galuh adalah Wretikandayun, yang diduga memerintah
          sekitar tahun 612 M. Pembagian ini terjadi sebagai upaya untuk
          memperluas kekuasaan dan pengaruh keluarga kerajaan Sunda di wilayah
          barat dan timur Jawa Barat.
        </p>
        <br />
        <p><span class="sedeng">Wilayah dan Pengaruh</span></p>
        <p>
          Kerajaan Galuh berpusat di daerah yang sekarang dikenal sebagai
          Ciamis dan sekitarnya, dan mencakup wilayah yang cukup luas,
          meliputi daerah Priangan Timur hingga wilayah selatan Jawa Barat.
          Galuh dikenal sebagai pusat kekuasaan di daerah pedalaman Jawa Barat
          dan berperan penting dalam perdagangan regional.
        </p>
        <br />
        <p><span class="sedeng">Hubungan dengan Kerajaan Lain</span></p>
        <p>
          Kerajaan Galuh sering kali terlibat dalam hubungan politik dan
          dinasti dengan kerajaan-kerajaan tetangga. Pada awalnya, Galuh dan
          Sunda merupakan kerajaan yang terpisah namun memiliki hubungan
          kekerabatan. Namun, pada masa pemerintahan Raja Sanjaya, sekitar
          abad ke-8, Galuh dan Sunda bersatu di bawah satu pemerintahan yang
          dikenal sebagai Kerajaan Sunda-Galuh. <br />
          <br />
          Kerajaan ini juga memiliki hubungan yang kompleks dengan Kerajaan
          Mataram Kuno di Jawa Tengah. Pada abad ke-8, Raja Sanjaya dari
          Mataram Kuno menikah dengan seorang putri dari Kerajaan Galuh, yang
          kemudian memperkuat hubungan antara kedua kerajaan.
        </p>
        <br />
        <p><span class="sedeng">Masa Keemasan dan Kehancuran</span></p>
        <p>
          Masa keemasan Kerajaan Galuh terjadi pada masa pemerintahan
          raja-raja yang bijaksana dan kuat, yang mampu memperluas wilayah dan
          meningkatkan kesejahteraan rakyat. Namun, seperti banyak kerajaan
          lain, Galuh menghadapi berbagai tantangan, termasuk konflik
          internal, perang dengan kerajaan lain, dan pengaruh kekuatan luar.
          <br /><br />
          Kerajaan Galuh akhirnya mengalami kemunduran dan mulai kehilangan
          pengaruh pada abad ke-15. Hal ini terjadi bersamaan dengan
          kebangkitan Kesultanan Cirebon dan Kesultanan Banten, yang mulai
          mengambil alih wilayah-wilayah di Jawa Barat. Pada akhirnya, wilayah
          Galuh menjadi bagian dari Kesultanan Cirebon dan kemudian Kesultanan
          Mataram.
        </p>
        <br />
        <p><span class="sedeng">Warisan Budaya</span></p>
        <p>
          Meskipun Kerajaan Galuh akhirnya runtuh, warisan budayanya tetap
          hidup dalam tradisi, bahasa, dan seni budaya Sunda. Banyak situs
          sejarah dan peninggalan arkeologis yang terkait dengan Galuh masih
          ada di Jawa Barat, dan menjadi bagian dari identitas budaya Sunda
          hingga saat ini.
        </p>
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