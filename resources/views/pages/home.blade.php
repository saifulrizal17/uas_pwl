@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/style.css') !!}">
@endsection
@section('content')
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>Mania Blitar</span></h1>
      <h2>Pelayanan Loundry Anatar Jemput</h2>
      <a href="/login" class="btn-get-started scrollto">Ayo Lakukan Pencucian Disini</a>
    </div>
  </section><!-- End Hero -->
<div class="container">

        <div class="section-title mt-5">
          <h2>Mengapa Memilih Kami</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><b>Laundry Kiloan</b></h4>
              <p>Jasa laundry baju kiloan di ciputat dan sekitarnya, cocok untuk pakaian sehari-hari. Sudah termasuk cuci, gosok dan lipat. Bisa antar-jemput</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><b>Laundry Satuan</b></h4>
              <p>Jasa laundry satuan seperti kemeja, jas dll.  Sangat cocok untuk pakaian spesial anda. Pengerjaan yang detail, bersih  dengan harga terjangkau.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><b>Jasa Cuci Perlengkapan Bayi</b></h4>
              <p>Laundry perlengkapan bayi anda seperti stroller, box bayi dengan harga terjangkau, bersih, cepat dan kami melayani antar jemput.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{!! asset('/img/gambar2.jpg') !!}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Kenapa Mania Laundry</h3>
            <p>
              Mania Laundry merupakan jasa Laundry kiloan pakaian yang terpecaya yang mengutamakan standar pelayanan terbaik untuk para customer.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Kami mengutamakan keamanan barang Laundry</li>
              <li><i class="bx bx-check-double"></i> Kami mengutamakan kebersihan batang Laundry sampai ke tangan customer</li>
            </ul>
            <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Visi Laundry</h4>
                <p>Untuk menyediakan layanan laundry bersih dan efisien bagi pelanggan kami dengan menggunakan peralatan berkualitas tinggi, produk ramah lingkungan, dan pelayanan pelanggan yang luar biasa.</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Misi Laundry</h4>
                <p>Misi kami adalah untuk memenuhi kebutuhan laundry pelanggan kami dengan menyediakan layanan yang mudah, cepat, dan efisien. Kami berdedikasi untuk memberikan pengalaman pelanggan yang memuaskan dengan memberikan layanan yang baik dan profesional.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills">
      <div class="container">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

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

          </div>

        </div>

      </div>
    </section>End Skills Section -->

    <!-- ======= Counts Section =======
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Service yang kami berikan</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
            <i class="bi bi-wallet2"></i>
              <h4><a>Setlika Pakaian</a></h4>
              <p>Baju yang selesai dicuci akan langsung dicuci</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
            <i class="bi bi-clock-fill"></i>
              <h4><a>Pelayanan Cepat</a></h4>
              <p>Barang yang masuk akan segera diproses</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
            <i class="bi bi-lock-fill"></i>
              <h4><a>Anti Hilang</a></h4>
              <p>Barang yang masuk akan langsung diberi label</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
            <i class="bi bi-clock-history"></i>
              <h4><a>Pelayanan 12 Jam</a></h4>
              <p>Kami melayani laundry selama 12 jam setiap harinya</p>
            </div>
          </div>
         
      </div>
    </section><!-- End Services Section -->

    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Jika mengalami keluhan atau kesulitan silakan menghubungi contact kami</p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Kota Blitar Jawa timur<br>Indonesia</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@laundry.com<br>contact@laundry.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+629 601 650 936<br>+622 141 745 630</p>
                </div>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
@section('js')
<script src="{!! asset('/js/main.js') !!}"></script>
@endsection
