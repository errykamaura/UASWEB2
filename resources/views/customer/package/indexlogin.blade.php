@extends('customer.layouts.applogin')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

   <!-- Slide 1 -->
   <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>HomeChoice</span></h2>
        <p class="animate__animated fanimate__adeInUp">Sistem pendukung keputusan berbasis website yang menggunakan tampilan bootstrap dan framework laravel, siap membantu anda dalam melakukan pengambilan keputusan</p>
      </div>
    </div>>
    </div>

     <!-- Slide 2 -->
     <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">HomeChoice</h2>
        <p class="animate__animated animate__fadeInUp">Sistem pendukung keputusan ini mendukung untuk membuat keputusan dalam pemilihan rumah sesuai dengan kriteria yang anda inginkan</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">HomeChoice</h2>
        <p class="animate__animated animate__fadeInUp">Metode yang digunakan sistem ini dalam menghitung hasil kalkulasi adalah metode AHP</p>
      </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>About</h2>
        <p>Apa saja yang bisa dilakukan?</p>
      </div>

      <div class="row content" data-aos="fade-up">
        <div class="col-lg-6">
          <p>
            Sistem Pendukung Keputusan dalam pemilihan perumahan ini merupakan sistem informasi berbasis website yang dibangun menggunakan framework laravel.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Sistem ini bisa membantu anda dalam menentukan  yang anda inginkan </li>
            <li><i class="ri-check-double-line"></i> Sistem ini juga memiliki akurasi yang akurat dalam memberikan rekomendasi perumahan yang anda inginkan </li>

          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Aplikasi ini dibuat untuk memudahkan pengguna dalam membuat keputusan atau sebagai alat referensi
            dalam pemilihan perumahan yang diinginkan berdasarkan kriteria dan nilai yang bisa ditentukan sesuka hati
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
 <!-- ======= Features Section ======= -->
 <section id="features" class="features">
    <div class="container">

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-3" data-aos="zoom-in">
          <a class="nav-link active show" data-toggle="tab" href="#tab-1">
            <i class="ri-gps-line"></i>
            <h4 class="d-none d-lg-block">Dapat diakses dimana saja kapan saja</h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-toggle="tab" href="#tab-2">
            <i class="ri-body-scan-line"></i>
            <h4 class="d-none d-lg-block">Data Perumahan</h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
          <a class="nav-link" data-toggle="tab" href="#tab-3">
            <i class="ri-sun-line"></i>
            <h4 class="d-none d-lg-block">Lebih ringan dengan tampilan sederhana</h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
          <a class="nav-link" data-toggle="tab" href="#tab-4">
            <i class="ri-store-line"></i>
            <h4 class="d-none d-lg-block">Mudah digunakan</h4>
          </a>
        </li>
      </ul>

      <div class="tab-content" data-aos="fade-up">
        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Dapat akses kapanpun dan dimanapun anda berada</h3>
              <p class="font-italic">
                Sistem informasi ini dibangun dalam bentuk website yang menggunakan framework laravel dan juga tampilan bootstrap.
              </p>
              <p>
                Sistem pendukung keputusan berbasis website yang menggunakan
                tampilan bootstrap dan framework laravel, siap membantu anda dalam melakukan pengambilan keputusan
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-1.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Memiliki data perumahan</h3>
              <p>
                Sehingga membuat anda mampu menentukan banyak pilihan sesuai dengan kriteria perumahan yang anda mau
              </p>
              <p class="font-italic">
                Dilengkapi dengan gambar yang menarik membuat tampilan pilihan perumahan terlihat lebih nyata
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Terdapat berbagai pilihan jenis perumahan</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-2.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Menggunakan tampilan sederhana</h3>
              <p>
                Dengan menggunakan tampilan sederhana membuat proses
                untuk membuka laman website semakin lebih cepat dan ringan
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Menggunakan tampilan sederhana</li>
                <li><i class="ri-check-double-line"></i> Tidak menggunakan banyak tampilan gambar</li>
                <li><i class="ri-check-double-line"></i> Tidak terdapat iklan</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-3.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Mudah dalam proses penggunanaannya</h3>
              <p>
                Kami membuat tampilan dan struktur proses yang mudah dan berurutan sehingga
                dapat memudahkan pengguna dalam menggunakan sistem yang kami buat.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-4.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-out">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>Coba Sekarang ?</h3>
          <p>Lakukan uji coba sistem pendukung keputusan dalam pemilihan rumah hasil kalkulasi menggunakan metode ahp</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="/ahp/bobot">Try It Now !</a>
        </div>
      </div>
    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Alternative</h2>
        <p>Kami Merekomendasikan Untuk Anda</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box" data-aos="zoom-in-left">
            <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
            <h4 class="title"><a href="">CitraLand</a></h4>
            <p class="description">Untuk menghadirkan atmosfer THE PREMIUM LIVING, CITRALAND TEGAL diperkaya dengan konsep inovatif dan unik, melalui hadirnya EXQUISITE SHOPHOUSES, EXQUISITE BACKYARD dan EXQUISITE SIDEPARK. Konsep ini berfokus pada terciptanya hunian yang berkualitas, nyaman dan privasi yang tinggi bagi penghuni, di tengah aktivitas bisnis yang hidup. Anda akan menemui penataan lengkap yang teduh dan asri dan fasilitas keluarga penunjang kebutuhan sosial dan kebugaran.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
            <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
            <h4 class="title"><a href="">Griya Tegal Asri</a></h4>
            <p class="description">Griya Tegal Asri merupakan sebuah  perumahan yang terletak di lokasi strategis di daerah Tegal Asri, yang menawarkan hunian yang nyaman dan aman bagi keluarga Anda.  Perumahan ini memiliki fasilitas lengkap dan berbagai tipe rumah yang siap memenuhi kebutuhan Anda.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
            <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
            <h4 class="title"><a href="">Sapphire Residence</a></h4>
            <p class="description">Sapphire Residence Tegal menjadi sangat nyaman karena memiliki lokasi yang strategis, berada di dua sisi kota, dan di tunjang dengan akses jalan utama, membuat lokasi tersebut mudah dijangkau.  Sebagai sarana investasi, hunian kami memiliki jaminan terus mengalami kenaikan nilai, karena berada di lokasi yang sangat dekat dengan kawasan perkotaan. Selain itu, sebagai kota industri dan jasa, Tegal merupakan kota potensial yang terus berkembang dan memberi peluang besar terhadap pertumbuhan investasi.</p>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
            <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
            <h4 class="title"><a href="">Amira Cluster</a></h4>
            <p class="description">Amira Cluster Slawi Tegal. Dengan spek bangunan yg sangat bagus. Beton Bertulang, Kusen Alumunium, Dinding bata merah, Atap rangka baja ringan, Genteng Beton, Lantai Ruang dalam Granit 6060, Plafon Gypsum, Listrik 1300 watt, Pintu Panel, Sanitary by wolf, Taman mini, Carport keramik, Air pdam jet, grountank Security 24 Jam.</p>
          </div>
        </div> -->

        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
            <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
            <h4 class="title"><a href="">Mutiara Estate</a></h4>
            <p class="description">Perumahan Mutiara Estate Tegal adalah kompleks perumahan modern yang terletak di kawasan strategis di Tegal. Dikenal karena desainnya yang menarik dan fasilitas yang lengkap, perumahan ini menyediakan lingkungan yang nyaman dan aman untuk keluarga. Dilengkapi dengan taman hijau, area bermain anak, dan aksesibilitas yang baik ke fasilitas umum, Mutiara Estate menjadi pilihan yang populer bagi mereka yang mencari hunian yang berkualitas di Tegal.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
            <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
            <h4 class="title"><a href="">Graha Candra Loka</a></h4>
            <p class="description">Perumahan Graha Candra Loka adalah sebuah kompleks perumahan yang terletak di lokasi strategis di Kota Tegal. Menawarkan lingkungan yang nyaman dan aman, perumahan ini dilengkapi dengan fasilitas modern seperti taman, lapangan olahraga, dan area bermain anak. Graha Candra Loka juga dikenal karena desain arsitektur yang menarik dan keamanan yang terjamin, menjadikannya pilihan ideal untuk keluarga yang mencari hunian yang berkualitas di Tegal.</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->


 <!-- ======= F.A.Q Section ======= -->
 <section id="faq" class="faq">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Batasan Aplikasi</h2>
        <p>Ruang Lingkup Aplikasi</p>
      </div>

      <ul class="faq-list">

        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" class="" href="#faq1">Data Rumah tidak terintegrasi<i class="icofont-simple-up"></i></a>
          <div id="faq1" class="collapse show" data-parent=".faq-list">
            <p>
              Data yang digunakan adalah data perumahan yang terdapat pada Kota Tegal dan Kabupaten Tegal.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <a data-toggle="collapse" href="#faq2" class="collapsed">Data Kriteria yang tidak dinamis<i class="icofont-simple-up"></i></a>
          <div id="faq2" class="collapse" data-parent=".faq-list">
            <p>
              Data kriteria yang tersedia telah ditetapkan oleh pengembang aplikasi.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <a data-toggle="collapse" href="#faq3" class="collapsed">Daftar Alternatif yang tidak dinamis <i class="icofont-simple-up"></i></a>
          <div id="faq3" class="collapse" data-parent=".faq-list">
            <p>
              Alternatif yang tersedia untuk Sistem Pendukung Keputusan ini adalah beberapa daftar perumahan yang direkomendasikan.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <a data-toggle="collapse" href="#faq4" class="collapsed">Metode Pendukung Keputusan <i class="icofont-simple-up"></i></a>
          <div id="faq4" class="collapse" data-parent=".faq-list">
            <p>
              Sistem ini dirancang menggunakan metode Analytical Hierarchy Process.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <a data-toggle="collapse" href="#faq5" class="collapsed"> Sistem terintegrasi dengan database<i class="icofont-simple-up"></i></a>
          <div id="faq5" class="collapse" data-parent=".faq-list">
            <p>
              Sistem berbasis website sehingga proses pengolahan data akan selalu real time, cepat, dan akurat.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section><!-- End F.A.Q Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4" data-aos="fade-right">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Tegal, Jawa Tengah</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>erryka@gmail.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+62</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  <div class="modal fade" id="ModalPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Changes Your Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/home/{password}" method="post">
            @csrf
            <div class="form-group">
              <label for="password" class="col-form-label">New Password : </label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</main><!-- End #main -->
@endsection