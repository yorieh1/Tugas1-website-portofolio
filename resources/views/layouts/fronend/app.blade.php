<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PORTOFOLIO YORI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="template/img/favicon.png" rel="icon">
  <link href="template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="template/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="template/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="template/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="template/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="template/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lonely
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
    <h1>Halo Saya {{ $profil->nama }}</h1>
    <h2>{{ $profil->jurusan }} </h2>
    <a href="#about" class="btn-get-started scrollto"><i class="bi bi-chevron-double-down"></i></a>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Portofolio Yori Saputra</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="template/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil</a></li>
          <li><a class="nav-link scrollto" href="#skills">Keahlian</a></li>
          <li><a class="nav-link scrollto" href="#resume">Pengalaman</a></li>
          <li><a class="nav-link scrollto" href="#services">Pendidikan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">


      <div class="container">
        <div class="section-title">
          <h2>Profil</h2>
        </div>
        <div class="row no-gutters">
          <div class=" col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
            <img src="{{ url('foto/profil',$profil->foto) }}" class="img-fluid" alt="">
          </div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>{{ $profil->nama }}</h3>



              <div class="row">




                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <p class="bol">NAMA</p>
                    <i class="bi bi-emoji-smile"></i>
                    <h4 class="ms-5">{{ $profil->nama }}</h4>
                    <p class="bol">JENIS KELAMIN</p>
                    <i class="bi bi-emoji-smile"></i>
                    <h4 class="ms-5">{{ $profil->jenis_kelamin }}</h4>
                    <p class="bol">EMAIL</p>
                    <i class="bi bi-emoji-smile"></i>
                    <h4 class="ms-5">{{ $profil->email }}</h4>
                    <p class="bol">ALAMAT</p>
                    <i class="bi bi-emoji-smile"></i>
                    <h4 class="ms-5">{{ $profil->alamat }}</h4>
                    <p class="bol">JURUSAN</p>
                     <i class="bi bi-emoji-smile"></i>
                    <h4 class="ms-5">{{ $profil->jurusan }}</h4>
                  </div>
                </div>

              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Keahlian</h2>

        </div>

        <div class="row skills-content">

          <div class="col-lg-6">
            @foreach ($keahlian as $item)

            <div class="progress">
              <span class="skill">{{ $item ->keahlian }} <i class="val">{{ $item ->presentase_keahlian }}%</i></span>

              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item ->presentase_keahlian }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            @endforeach

          </div>

          {{-- <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div> --}}

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pengalaman</h2>

        </div>

        <div class="row">
          <div class="col-lg-6">
            @foreach ($pengalaman as $item2)


            <div class="resume-item">
              <h3>{{ $item2->tahun_masuk .' - '. $item2->tahun_selesai }}</h3>
              <h3>{{ $item2->pekerjaan }}</h3>
              <h3>{{ $item2->perusahan }}</h3>
              <h3>{{ $item2->kota }}</h3>

              <p> </p>
            </div>
            @endforeach
            {{-- <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Pekerjaan</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div> --}}
          {{-- <div class="col-lg-6">
            <h3 class="resume-title">Pekerjaan</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
              </p>
            </div>
          </div> --}}
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pendidikan</h2>

        </div>

        <div class="row">
          @foreach ($pendidikan as $data2)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" style="width: 700px">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Jenjang Pendidikan Saya</a></h4>
              <h4>{{ $data2->tahun_masuk }}</h4>
              <h4>{{ $data2->tahun_selesai }}</h4>
              <h4>{{ $data2->instusi }}</h4>
              <h4>{{ $data2->jurusan }}</h4>


            </div>

          </div>
          @endforeach




        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>

        </div>

        <div class="row">


          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Yori Saputra</h3>
              <p>Kalau kepo sini aja</p>
              <div class="social-links">

                <a href="https://www.instagram.com/yori_ryy/"  target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div class="d-flex align-items-center">
                <i class="bi bi-geo-alt"></i>
                {{-- <p>{{ $kontak2->alamat  }}</p> --}}
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-phone" ></i>
                {{-- <p>{{ $kontak2->nomor_hp }}</p> --}}
              </div>

            </div>
          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Portofolio <strong><span>Yori Saputra</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-lonely/ -->
         <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="template/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="template/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="template/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="template/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="template/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="template/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="template/js/main.js"></script>

</body>

</html>
