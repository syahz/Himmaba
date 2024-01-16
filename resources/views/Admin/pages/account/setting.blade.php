@extends('Admin.layouts.master')
@section('title', 'Halaman Settings')
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
                                    Account Settings - Security
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
                    <a class="nav-link ms-0" href="{{ route('profile')}}">Profile</a>
                    <a class="nav-link active" href="{{ route('settings') }}">Security</a>
                </nav>
                <hr class="mt-0 mb-4" />
                <div class="row">
                    <div class="col">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Change Password</div>
                            <div class="card-body">
                                <form action="{{ route('settings', auth()->user()->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
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
                                    <!-- Form Group (current password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="currentPassword">Current Password</label>
                                        <input class="form-control @error('currentPassword') is-invalid @enderror" id="currentPassword" type="password" name="currentPassword"
                                            placeholder="Enter current password" />
                                            @error('currentPassword')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Form Group (new password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="newPassword">New Password</label>
                                        <input class="form-control @error('newPassword') is-invalid @enderror" id="newPassword" type="password" name="newPassword"
                                            placeholder="Enter new password" />
                                            @error('newPassword')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Form Group (confirm password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                        <input class="form-control @error('confirmPassword') is-invalid @enderror" id="confirmPassword" type="password" name="confirmPassword"
                                            placeholder="Confirm new password" />
                                            @error('confirmPassword')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary" type="Submit">Save</button>
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
