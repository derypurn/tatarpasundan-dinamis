<?php
include "test.html";
session_start();
include 'koneksi.php';

$sql = "SELECT * FROM kesenian";
$result = $koneksi->query($sql);
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
  <link rel="icon" href="img/kujang_doang.png" type="image/x-icon">
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/b3c1680686.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="content">
    <div class="left" id="home">
      <h3 class="sub-judul">WILUJENG SUMPING!</h3>
      <h1 class="big">
        Ensiklopedia <br />
        Tatar Pasundan
      </h1>
      <p class="sumber">Sumber Pengetahuan Orang
        Jawa Barat</p>

      <div class="right">
        <img class="foto" src="img/suling.png" alt="" />
      </div>
    </div>
  </div>
  <hr />

  <div class="content" id="sejarah">
    <div class="center">
      <h2 class="judul">Sejarah</h2>
      <p class="text-sejarah">
        Sejarah Singkat Tatar Pasundan <br />
        Tatar Pasundan, atau Tanah Sunda, merupakan istilah untuk wilayah
        geobudaya di bagian barat Pulau Jawa, <br />
        Indonesia. Wilayah ini merupakan daerah dimana budaya Sunda
        dikembangkan oleh suku Sunda. Kerajaan- <br />Kerajaan di Tatar
        Pasundan Tatar Pasundan memiliki sejarah panjang dengan berbagai
        kerajaan yang pernah <br />
        berkuasa di wilayah ini. Beberapa kerajaan yang terkenal di antaranya:
      </p>
      <div id="services">
        <div class="container">
          <div class="services-list">
            <div>
              <h2>Kerajaan Tarumanegara</h2>
              <p> Kerajaan Hindu pertama di Tatar Pasundan, didirikan oleh Raja Purnawarman.
              </p>
              <a href="tarumanegara.php"><button class="lihat">Lihat&nbsp;→</button></a>
            </div>
            <div>
              <h2>Kerajaan Galuh</h2>
              <p>
                Kerajaan penerus Tarumanagara, berpusat di Kawali <br> (sekarang Ciamis).
              </p>
              <a href="kerajaan_galuh.php"><button class="lihat">Lihat&nbsp;→</button></a>
            </div>
            <div>
              <h2>Kerajaan Sunda</h2>
              <p>
                Kerajaan yang menyatukan Galuh <br> dan Sunda, berpusat di Pakuan Pajajaran (sekarang Bogor)
              </p>
              <a href="kerajaan_sunda.php"><button class="lihat">Lihat&nbsp;→</button></a>
            </div>
            <div>
              <h2>Kesultanan Banten</h2>
              <p> Kerajaan Islam yang didirikan oleh Fatahillah pada abad 16-19 M, berpusat di Banten.
              </p>
              <a href="kesultanan_banten.php"><button class="lihat">Lihat&nbsp;→</button></a>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <section class="section">
        <div class="left" id="budaya">
          <h1 class="judul big">Budaya yang terdapat di tatar Pasundan</h1>
          <p>Dengan beberapa penjelasan dan dilengkapi akses untuk menonton video keseniannya.</p>
          <a href="budaya.php"><button class="selengkapnya">Selengkapnya</button></a>
        </div>
        <div class="slider-container">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="img/guarbumi.jpg" alt="Budaya 1" />
              </div>
              <div class="swiper-slide">
                <img src="img/Gusaran.jpg" alt="Budaya 2" />
              </div>
              <div class="swiper-slide">
                <img src="img/turuntaneh.jpg" alt="Budaya 3" />
              </div>
              <div class="swiper-slide">
                <img src="img/sebabaduy.jpg" alt="Budaya 4" />
              </div>
              <div class="swiper-slide">
                <img src="img/Tingkeban.jpg" alt="Budaya 5" />
              </div>
              <div class="swiper-slide">
                <img src="img/nyekar.jpg" alt="Budaya 6" />
              </div>
              <div class="swiper-slide">
                <img src="img/nyawer.jpg" alt="Budaya 6" />
              </div>
              <div class="swiper-slide">
                <img src="img/hajatlaut.jpg" alt="Budaya 7" />
              </div>
            </div>
            <div class="swiper-pagination">
            </div>
          </div>
        </div>
      </section>
      <hr>


      <div class="content">
        <div class="center">
          <main>
            <section class="projects">
              <h2 class="judul" id="wisata">Wisata</h2>
              <p class="text-sejarah">
                Selamat datang di Tatar Pasundan, surga keindahan alam dan budaya yang kaya. Nikmati pesona pegunungan, pantai, air terjun, dan keunikan budaya Sunda yang tak terlupakan. Setiap tempat menyajikan pengalaman yang berbeda, dari ketenangan alam hingga petualangan seru. Mari jelajahi keajaiban Tatar Pasundan!
              </p>
              <div class="gallery">
                <div class="gallery-item wide">
                  <img src="img/ciptagelar.jpeg" alt="Project Image 1" />
                </div>
                <div class="gallery-item tall">
                  <img src="img/cipanten.jpg" alt="Project Image 2" />
                </div>
                <div class="gallery-item">
                  <img src="img/candijiwa.jpeg" alt="Project Image 3" />
                </div>
                <div class="gallery-item large">
                  <img src="img/panyaweuyan.jpg" alt="Project Image 4" />
                </div>
                <div class="gallery-item">
                  <img src="img/cimanuk.jpeg" alt="Project Image 5" />
                </div>
                <div class="gallery-item wide">
                  <img src="img/galunggung.webp" alt="Project Image 6" />
                </div>
              </div>
            </section>
            <div class="mt">
              <a href="wisata.php"><button class="selengkapnya">Selengkapnya</button></a>
            </div>
          </main>
          <hr id="about">
        </div>
      </div>
      <section class="section">
        <div class="left" id="kesenian">
          <h1 class="judul big">Beberapa Kesenian di Tatar Pasundan</h1>
          <p>Dengan beberapa penjelasan dan dilengkapi akses untuk menonton video keseniannya.</p>
          <a href="kesenian.php"><button class="selengkapnya">Selengkapnya</button></a>
        </div>
        <div class="slider-container">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="img/kecapi_suling.jpg" alt="Budaya 3" />
              </div>
              <div class="swiper-slide">
                <img src="img/jaipong.webp" alt="Budaya 4" />
              </div>
              <div class="swiper-slide">
                <img src="img/debus.webp" alt="Budaya 5" />
              </div>
              <div class="swiper-slide">
                <img src="img/tari_merak.JPG" alt="Budaya 6" />
              </div>
              <div class="swiper-slide">
                <img src="img/wayang.jpg" alt="Budaya 6" />
              </div>
            </div>
            <div class="swiper-pagination">
            </div>
          </div>
        </div>
      </section>
      <hr>
      <header id="about">
        <h2 class="judul">Tentang</h2>
        <p class="ratakanan">
          &emsp;&emsp;Selamat datang di Ensiklopedia Tatar Pasundan, sumber informasi lengkap mengenai sejarah, budaya, dan tradisi masyarakat Tatar Pasundan. Website ini didedikasikan untuk memperkenalkan dan melestarikan kekayaan warisan budaya Sunda, yang meliputi nilai-nilai sejarah, seni, adat istiadat, dan tradisi lisan yang telah diwariskan dari generasi ke generasi. Kami percaya bahwa memahami dan menghargai warisan budaya lokal adalah langkah penting dalam membangun identitas dan kebanggaan terhadap kebudayaan kita sendiri.
          <br><br>
          &emsp;&emsp;Ensiklopedia Tatar Pasundan bertujuan untuk menyediakan informasi yang akurat dan komprehensif bagi semua orang yang tertarik mempelajari lebih dalam tentang kebudayaan Sunda. Di sini, Anda akan menemukan berbagai artikel yang mencakup berbagai aspek kehidupan masyarakat Sunda, mulai dari sejarah kerajaan-kerajaan besar seperti Kerajaan Sunda dan Galuh, hingga tradisi unik seperti upacara adat, seni pertunjukan, dan kerajinan tangan. Kami juga menyertakan cerita rakyat, mitos, dan legenda yang memperkaya pengetahuan tentang kearifan lokal masyarakat Sunda.
          <br><br>
          &emsp;&emsp;Sebagai sumber pendidikan dan referensi, Ensiklopedia Tatar Pasundan berkomitmen untuk menyajikan informasi yang berdasarkan penelitian mendalam dari berbagai sumber terpercaya, termasuk literatur sejarah, dokumen kuno, serta wawancara dengan para ahli dan budayawan. Kami berharap, dengan hadirnya website ini, masyarakat luas dapat lebih mengenal dan mencintai kebudayaan Sunda, serta turut berkontribusi dalam melestarikan warisan budaya ini untuk generasi mendatang.
          <br><br>
          &emsp;&emsp;Terima kasih telah mengunjungi Ensiklopedia Tatar Pasundan. Kami mengundang Anda untuk mengeksplorasi lebih lanjut dan menemukan keindahan serta kekayaan budaya Sunda yang menakjubkan.
        </p>
      </header>

      <section class="contact-info">
        <a href="https://maps.app.goo.gl/eiwsJxk3B3icqGcJ9" target="_blank">
          <div class="info-item">
            <i class="fa-solid fa-location-dot"></i>
            <h3>Alamat</h3>
            <p>Jln. Pasanggrahan-Malongpong, Majalengka</p>
          </div>
        </a>
        <a href="https://wa.me/628877226617">
          <div class="info-item">
            <i class="fa-solid fa-phone-volume"></i>
            <h3>Kontak</h3>
            <p>+62 877 2266 8817</p>
          </div>
        </a>
        <a href="">
          <div class="info-item">
            <i class="fa-solid fa-envelope"></i>
            <h3>Email</h3>
            <p>ensiklopediapasundan@gmail.com</p>
          </div>
        </a>
        <a href="derypurn.github.io/dery.tatarpasundan/" target="_blank">
          <div class="info-item">
            <i class="fa-solid fa-globe"></i>
            <h3>Website</h3>
            <p>derypurn.github.io/dery.tatarpasundan/</p>
          </div>
        </a>
      </section>

      <section class="contact-form" id="formsaran">
        <div class="form-container">
          <div class="image">
            <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3961.0878517093274!2d108.2894559!3d-6.8800783!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1726626571292!5m2!1sid!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <form action="action_kirimpesan.php" method="post">
            <h1 style="text-align: center;">Kotak Saran</h1>
            <?php if (isset($_SESSION['success_message'])): ?>
              <div class="success-message"><?php echo $_SESSION['success_message'];
                                            unset($_SESSION['success_message']); ?></div>
            <?php endif; ?>
            <input type="text" id="nama" name="nama" placeholder="Masukan Nama" required />
            <input type="email" id="email" name="email" placeholder="Masukan Email" required />
            <input type="text" id="subject" name="subject" placeholder="Subjek" required />
            <textarea name="msg" id="msg" placeholder="Masukan Pesan" required></textarea>
            <button type="submit">Kirim Pesan</button>
          </form>
        </div>
      </section>

      <footer>
        <div class="footer-column">
          <h3>Tentang Pembuat</h3>
          <p class="rata">
            Ensiklopedia Tatar Pasundan ini dibuat oleh Dery Purnama, seorang siswa jurusan Rekayasa Perangkat Lunak (RPL) di SMKN 1 Maja. Dery memiliki keterampilan dalam berbagai bidang teknologi informasi, termasuk pengembangan web, pemrograman, dan desain grafis. Dengan minat yang mendalam terhadap teknologi dan kebudayaan, Dery berupaya untuk menggabungkan keduanya melalui proyek ini, dengan tujuan memperkenalkan kekayaan budaya Sunda kepada masyarakat luas.
          </p>
        </div>
        <div class="footer-column">
          <h3>Links</h3>
          <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#sejarah">Sejarah</a></li>
            <li><a href="#budaya">Budaya</a></li>
            <li><a href="#kesenian">Kesenian</a></li>
            <li><a href="#wisata">Wisata</a></li>
          </ul>
        </div>
      </footer>
      <p class="kaki">COPYRIGHT © 2024 | ensiklopediapasundan</p>





















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