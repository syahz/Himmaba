@extends('LandingPage.layouts.master')
@section('content')
<main id="main">
      <!-- End Skills Section -->
      <!-- ======= Ponpes Section ======= -->
      <section id="skills" class="skills section-bg">
        <div class="container mt-5" data-aos="fade-up">
          <div class="shadow-lg p-3 mb-5 bg-ungrad rounded text-dark" id="title">
            <p class="fs-5 fw-bold">
              
                  
              
              {{$data->tittle}}
            </p>
            <small>- 08 Januari 2024</small>
          </div>
          <div class="shadow-lg text-center p-3 mb-5 bg-ungrad rounded text-dark" id="content">
            <img
              src="{{ url('storage/' . $data->photo) }}"
              class="img-fluid rounded mb-4"
              style="width: 100%; max-width: 600px; height: 70%; object-fit: cover" />
            <div class="text-start lh-lg">
              {!!$data->detail_content!!}
            </div>
          </div>
        </div>
      </section>
      <!-- End Skills Section -->

      <!-- ======= Contact Section ======= -->
      <section id="services" class="services section-bg-grad">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
          </div>

          <div class="row">
            <div
              class="col-xl-4 col-md-6 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="100">
              <div class="icon-box">
                <h4><i class="fas fa-home"></i> <a href="">Location :</a></h4>
                <p>JL. R. Panji Suroso 2, Kota Malang Jawa Timur, Indonesia</p>
              </div>
            </div>

            <div
              class="col-xl-4 col-md-6 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="100">
              <div class="icon-box">
                <h4><i class="fas fa-phone-alt"></i> <a href="">Phone :</a></h4>
                <p>0822-0091-1004</p>
              </div>
            </div>

            <div
              class="col-xl-4 col-md-6 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="100">
              <div class="icon-box">
                <h4><i class="fas fa-envelope-open-text"></i> <a href="">Email :</a></h4>
                <p>Official@himmaba.com</p>
              </div>
            </div>
          </div>

          <div class="row section-footer">
            <div
              class="col-lg-8 d-flex align-items-center"
              data-aos="fade-right"
              data-aos-delay="100">
              <div class="row">
                <div
                  class="col-lg-2 d-flex align-items-center"
                  data-aos="fade-right"
                  data-aos-delay="100">
                  <img src="{{ asset('assets/img/himmaba-logos.png') }} " class="img-fluid" alt="" />
                </div>
                <div
                  class="col-lg-7 pt-4 pt-lg-0 content"
                  data-aos="fade-left"
                  data-aos-delay="100">
                  <h5>Himpunan Mahasiswa Malang Alumni Bahrul ulum</h5>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 pt-4 pt-lg-0 social-media"
              data-aos="fade-left"
              data-aos-delay="100">
              <p>Social Media Himmaba.</p>
              <p class="font-italic">Social Media :</p>
              <div class="social-media-i mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->
    </main>
    @endsection