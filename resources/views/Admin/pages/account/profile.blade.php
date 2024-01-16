@extends('Admin.layouts.master')
@section('title', 'Halaman Profile')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="user"></i></div>
                                    Account Settings - Profile
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->
                <nav class="nav nav-borders">
                    <a class="nav-link ms-0 active" href="{{ route('profile') }}">Profile</a>
                    <a class="nav-link" href="{{ route('settings') }}">Security</a>
                </nav>
                <hr class="mt-0 mb-4" />
                <div class="row">
                    <div class="col">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">

                                <form action="{{ route('profile', auth()->user()->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="id" id="" value="{{auth()->user()->id}}">
                                    <!-- Form Group (username)-->
                                    @if (session('success'))
                                        <div class="alert alert-primary">
                                            <b>Yay</b> {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                             {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <label class="small mb-1" for="name">Nama</label>
                                        <input name="name" class="form-control @error('name') is-invalid @enderror" id="name" type="text"
                                            placeholder="Enter your username"
                                            value="{{ old('name') ? old('name') : auth()->user()->name }}" />
                                        @error('name')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="email">Email address</label>
                                        <input name="email" class="form-control @error('email') is-invalid @enderror" id="email" type="email"
                                            placeholder="Enter your email address"
                                            value="{{ old('email') ? old('email') : auth()->user()->email }}" />
                                        @error('email')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="checkPassword">Konfirmasi Password</label>
                                        <input name="checkPassword" class="form-control @error('checkPassword') is-invalid @enderror" id="checkPassword" type="password"
                                            placeholder="Enter your Password"
                                            value="{{ old('checkPassword')}}" />
                                        @error('email')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
