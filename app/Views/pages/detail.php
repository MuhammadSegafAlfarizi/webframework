<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://www.itcshoppingfestival.com/wp-content/uploads/2023/06/campaign-ITC-Fatmawati.jpg);">
      <div class="container position-relative">
        <h1>Produk Detail</h1>
        <h3><?= $zonaPhone['judul'] ?></h3>
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
                  <img src="<?= $zonaPhone['gambar1'] ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= $zonaPhone['gambar2'] ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= $zonaPhone['gambar3'] ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Spesifikasi Utama</h3>
              <ul>
                <li><strong>Layar</strong>: <?= $zonaPhone['layar'] ?></li>
                <li><strong>Prosesor</strong>: <?= $zonaPhone['procie'] ?></li>
                <li><strong>Penyimpanan</strong>: <?= $zonaPhone['penyimpanan'] ?></li>
                <li><strong>Kamera</strong>: <?= $zonaPhone['kamera'] ?></li>
                <li><strong>Kapasitas baterai</strong>: <?= $zonaPhone['baterai'] ?></li>
                <li><b></b><strong>Harga</strong>: Rp<?= $zonaPhone['harga'] ?>-</b></li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Spesifikasi Lengkap</h2>
              <p>
                <?= $zonaPhone['deskripsi'] ?>
              </p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>
<?= $this->endsection('content'); ?>