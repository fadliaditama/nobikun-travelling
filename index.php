<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nobikun Travelling | Home</title>

  <!-- Boostraps5 CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
  <!-- End Boostraps5 CSS -->
</head>

<body>
  <!-- header -->
  <?php
  include('layout/header.php');
  ?>
  <!-- end header -->

  <section>
    <div class="px-4 py-5 my-5 text-center">
      <h1 class="display-5 fw-bold">Nobikun Travelling</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 text-uppercase">Passionate travel to the awesome places with diverse destinations.
          <br>
          Lets make your best trip ever with us. BOOK NOW!
        </p>
      </div>

    </div>

    <!-- Line -->
    <div class="container border-bottom border-1"></div>
    <!-- end Line -->

  </section>

  <!-- Video -->
  <section>
    <div class="container text-center p-4">
      <iframe width="100%" height="615" src="https://www.youtube.com/embed/xK8OrCAOCVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </section>
  <!-- End Video -->

  <!-- Line -->
  <div class="container border-bottom border-1"></div>
  <!-- end Line -->

  <!--Judul Album -->
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Lokasi Rekomendasi dari Nobikun Travelling</h1>
        <p class="lead text-muted">Ini adalah tempat wisata yang paling banyak dikunjungi para Travelling
        <p>
        </p>
      </div>
    </div>
  </section>
  <!-- End Judul Album -->

  <!-- Card Wisata -->
  <section>
    <div class="container p-4">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/pahawang.jpg" alt="" width="100%" height="225">

            <div class="card-body">
              <h3>Pulau Pahawang</h3>
              <p class="card-text">Pulau Pahawang menawarkan pesona bawah laut nan indah yang belum banyak diketahui.</p>
              <br>
              <br>
              <br>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="order.php" class="btn btn-sm btn-outline-secondary">Pesan Sekarang</a>
                </div>
                <small class="text-muted">Rp. 40.000/orang.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/puncak-mas.jpg" width="100%" height="225">

            <div class="card-body">
              <h3>Puncak Mas</h3>
              <p class="card-text">Wisata Puncak Mas ini menjadi destinasi favorit muda-mudi dengan menyajikan pemandangan kota dari ketinggian, sangat cocok untuk dikunjungi saat sore atau malam hari.</p>
              <br>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="order.php" class="btn btn-sm btn-outline-secondary">Pesan Sekarang</a>
                </div>
                <small class="text-muted">Rp. 10.000/orang.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/Danau-Biru-Tambang.jpg" width="100%" height="225">

            <div class="card-body">
              <h3>Danau Biru Tambang</h3>
              <p class="card-text">Danau Biru Tambang Batu Kapur Padas Terletak di Desa Payung Mulya, Kecamatan Pubian, Kabupaten Lampung Tengah.</p>
              <br>
              <br>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="order.php" class="btn btn-sm btn-outline-secondary">Pesan Sekarang</a>
                </div>
                <small class="text-muted">Rp. 25.000/orang.</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Card Wisata -->

  <!-- Footer -->
  <?php
  include('layout/footer.php');
  ?>
  <!-- end Footer -->

  <!-- Boostrap5 JS -->
  <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- End Boostraps5 JS -->
</body>

</html>