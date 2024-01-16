@extends('LandingPage.layouts.master')
@section('content')
    <main id="main">
        <!-- End Skills Section -->
        <!-- ======= Ponpes Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container mt-5" data-aos="fade-up">
                <div class="section-title">
                    <a href="#">
                        <h2 class="text-dark">Article</h2>
                    </a>
                </div>
                @foreach ($data as $d)
                    <div class="card mb-3">
                        <a href="{{ route('da.article', $d->slug) }}">
                            <div class="row g-0">
                                <div class="col">
                                    <img src=" {{ url('storage/' . $d->photo) }} " class="img-fluid rounded-start"
                                        style="height: 100%; object-fit: cover; opacity: 0.75;" />
                                </div>
                                <div class="col-md-8 bg-grad rounded-end">
                                    <div class="card-body p-4">
                                        <h5 class="card-title fs-3 text-white">{{ $d->tittle }}</h5>
                                        <p class="card-text text-white">
                                            {{ Str::words(strip_tags($d->detail_content), 20, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="d-flex">
                    {!! $data->links() !!}
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
