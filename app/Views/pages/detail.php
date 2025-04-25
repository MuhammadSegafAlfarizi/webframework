<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://www.itcshoppingfestival.com/wp-content/uploads/2023/06/campaign-ITC-Fatmawati.jpg);">
      <div class="container position-relative">
        <h1>Produk Detail</h1>
<<<<<<< HEAD
        <h3><?= $zonaPhone['judul'] ?></h3>
=======
>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
        <!-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav> -->
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
<<<<<<< HEAD
                  <img src="<?= $zonaPhone['gambar1'] ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= $zonaPhone['gambar2'] ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= $zonaPhone['gambar3'] ?>" alt="">
=======
                  <img src="https://i01.appmifile.com/webfile/globalimg/products/pc/redmi-10c/specs01.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="https://gizmologi.id/wp-content/uploads/2022/06/DSC09539-Copy-Copy-860x484.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="https://www.harapanrakyat.com/wp-content/uploads/2022/04/Spesifikasi-HP-Redmi-10C-Unggul-dalam-Kelasnya-Harga-1-Jutaan-Saja-1024x576.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="https://gizmologi.id/wp-content/uploads/2022/06/DSC09545-Copy.jpg" alt="">
>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Spesifikasi Utama</h3>
              <ul>
<<<<<<< HEAD
                <li><strong>Layar</strong>: <?= $zonaPhone['layar'] ?></li>
                <li><strong>Prosesor</strong>: <?= $zonaPhone['procie'] ?></li>
                <li><strong>Penyimpanan</strong>: <?= $zonaPhone['penyimpanan'] ?></li>
                <li><strong>Kamera</strong>: <?= $zonaPhone['kamera'] ?></li>
                <li><strong>Kapasitas baterai</strong>: <?= $zonaPhone['baterai'] ?></li>
                <li><b></b><strong>Harga</strong>: Rp<?= $zonaPhone['harga'] ?>-</b></li>
=======
                <li><strong>Layar</strong>: 6.7" AMOLED 120Hz</li>
                <li><strong>Prosesor</strong>: Snapdragon 7 Gen 1</li>
                <li><strong>Penyimpanan</strong>: 4/64 dan 8/128</li>
                <li><strong>Kamera</strong>: 50MP Triple Camera</li>
                <li><strong>Kapasitas baterai</strong>: 5000mAh</li>
                <li><b></b><strong>Harga</strong>: Rp4.000.000-</b></li>
>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Spesifikasi Lengkap</h2>
              <p>
<<<<<<< HEAD
                <?= $zonaPhone['deskripsi'] ?>
=======
              Smartphone ini hadir dengan layar AMOLED berukuran 6,7 inci yang mendukung refresh rate 120Hz, memberikan tampilan yang mulus dan responsif untuk aktivitas multimedia hingga gaming. Performa ditenagai oleh chipset Snapdragon 7 Gen 1, dipadukan dengan RAM 8GB dan penyimpanan internal yang luas, memastikan multitasking berjalan lancar. Di sektor kamera, perangkat ini mengusung sistem triple camera dengan kamera utama 50MP yang dilengkapi autofokus dan mode malam, menghasilkan foto tajam dalam berbagai kondisi, serta kamera depan yang mumpuni untuk selfie dan video call. Baterai 5000mAh menawarkan daya tahan seharian penuh, didukung fast charging untuk pengisian cepat.
>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
              </p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>
<?= $this->endsection('content'); ?>