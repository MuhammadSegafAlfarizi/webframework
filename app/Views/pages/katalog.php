<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://www.itcshoppingfestival.com/wp-content/uploads/2023/06/campaign-ITC-Fatmawati.jpg);">
      <div class="container position-relative">
        <h1>Katalog</h1>
        <!-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav> -->
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>katalog</h2>
        <p>Cek Produk Kami</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-iphone">Apple</li>
            <li data-filter=".filter-samsung">Samsung</li>
            <li data-filter=".filter-xiaomi">Xiaomi</li>
            <li data-filter=".filter-oppo">Oppo</li>
            <li data-filter=".filter-vivo">Vivo</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <?php foreach ($zonaPhone as $z):?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?= $z['filter'] ?>">
              <div class="portfolio-content h-100">
                <img src="<?= $z['gambar1'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $z['judul'] ?></h4>
                  <p><?= $z['tipe'] ?></p>
                  <a href="<?= $z['gambar1'] ?>" title="Product 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="<?= $z['id'] ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <?php endforeach; ?>

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
  <main>
<?= $this->endsection('content'); ?>