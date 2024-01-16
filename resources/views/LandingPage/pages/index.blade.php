@extends('LandingPage.layouts.master')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Himmaba</h1>
                    <h2>Cek keanggotaan dan daftarkan diri di himmaba.</h2>
                    <div class="d-flex">
                        <a href="#about" class="ml-3 btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="text-right col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/logos.svg" class="img-logos img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>About</h2>
                </div>

                <div class="row text-center section-content">
                    <div class="section-content" data-aos="fade-down" data-aos-delay="1001">
                        <p>
                            HIMMABA adalah mahasiswa alumni Pondok Pesantren Bahrul Ulum Tambakberas Jombang
                            yang berada di Malang dan terhimpun dalam suatu wadah organisasi yang menamakan
                            dirinya HIMMABA.APKDWPK berikan rangsangan bagi pengembangan potensi dan aktualisasi
                            keilmuan yang oelu dioptimalkan.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Ponpes Section ======= -->
        <section id="skills" class="skills section-bg-grad">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/about-2.png" class="img-fluid" alt="" />
                    </div>
                    <div class="text-white col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3 class="text-white">Pondok Pesantren Bahrul Ulum.</h3>
                        <p class="text-white font-italic">
                            Pondok Pesantren Bahrul Ulum Tambakberas Jombang merupakan salah satu pondok
                            pesantren tertua dan terbesar di Jawa Timur. Hingga sekarang pondok ini masih
                            survive di tengah kecenderungan kuat sistem pendidikan formal.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Skills Section -->
        <!-- ======= Ponpes Section ======= -->


        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <a href="{{ route('article') }}">
                        <h2 class="text-dark">Article</h2>
                    </a>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($data as $d)
                        <div class="col">
                            <a href="{{ route('da.article', $d->slug) }}">
                                <div class="card h-100">
                                    <img src="{{ url('storage/'. $d->photo) }}" class="card-img-top"
                                        style="width: 100%; height: 29vh; object-fit: cover; opacity:0.75;" />

                                    <div class="card-body rounded-bottom bg-grad text-white">
                                        <a class="card-title" href="{{ route('da.article', $d->slug) }}">
                                            <h5>{{ $d->tittle }}</h5>
                                        </a>
                                        <p class="card-text">
                                            {{ Str::words(strip_tags($d->detail_content), 20, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
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
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <h4><i class="fas fa-home"></i> <a href="">Location :</a></h4>
                            <p>JL. R. Panji Suroso 2, Kota Malang Jawa Timur, Indonesia</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <h4><i class="fas fa-phone-alt"></i> <a href="">Phone :</a></h4>
                            <p>0822-0091-1004</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <h4><i class="fas fa-envelope-open-text"></i> <a href="">Email :</a></h4>
                            <p>Official@himmaba.com</p>
                        </div>
                    </div>
                </div>

                <div class="row section-footer">
                    <div class="col-lg-8 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <div class="row">
                            <div class="col-lg-2 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                                <img src="assets/img/himmaba-logos.png" class="img-fluid" alt="" />
                            </div>
                            <div class="col-lg-7 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                                <h5>Himpunan Mahasiswa Malang Alumni Bahrul ulum</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 pt-4 pt-lg-0 social-media" data-aos="fade-left" data-aos-delay="100">
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
