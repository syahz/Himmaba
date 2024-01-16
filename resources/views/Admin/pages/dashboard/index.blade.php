@extends('Admin.layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-5">
                <!-- Custom page header alternative example-->
                <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                    <div class="me-4 mb-3 mb-sm-0">
                        <h1 class="mb-0">Dashboard</h1>
                        <div class="small">
                            <span class="fw-500 text-primary">Friday</span>
                            &middot; 20 Januari 2022 &middot; 7:09 PM
                            <!-- <span class="fw-500 text-primary">{{ date('l') }}</span>
                      &middot; {{ date('d F Y ') }} &middot; {{ date('h:i A') }} -->
                        </div>
                    </div>
                </div>
                <!-- Illustration dashboard card example-->
                <div class="card card-waves mb-4 mt-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center justify-content-between">
                            <div class="col">
                                <h2 class="text-primary">Selamat Datang</h2>
                                <p class="text-gray-700">
                                    <i>
                                        "Sukses bukanlah kunci dari kebahagiaan. Sebaliknya, kebahagiaan adalah
                                        kunci kesuksesan. Jika kamu mencintai apa yang kamu lakukan, kamu akan
                                        sukses."
                                        <b> -Albert Schweitzer</b>
                                    </i>
                                </p>
                            </div>
                            <div class="col d-none d-lg-block mt-xxl-n4">
                                <img class="img-fluid px-xl-4 mt-xxl-n5" src="assets/img/illustrations/statistics.svg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
