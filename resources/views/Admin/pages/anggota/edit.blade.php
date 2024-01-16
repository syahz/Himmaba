@extends('Admin.layouts.master')
@section('title', 'Halaman Edit Anggota')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                    Add User
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">
                                <a class="btn btn-sm btn-light text-primary" href="{{ route('anggota.index') }}">
                                    <i class="me-1" data-feather="arrow-left"></i>
                                    Back to Users List
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <div class="row">
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">
                                <form action="{{ route('anggota.update', $item->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <!-- Form Row-->
                                    <!-- Form Group (name)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputName">Name</label>
                                        <input name="name" id="inputName" type="text" placeholder="Enter your Name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') ? old('name') : $item->name }}" />
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                        <input name="email" id="inputEmailAddress" type="text"
                                            placeholder="Enter your email address"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') ? old('email') : $item->email }}" />
                                    </div>
                                    <!-- Form Group (Phone Number)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPhoneNumber">Phone Number</label>
                                        <input name="phone" id="inputPhoneNumber" type="text"
                                            placeholder="Enter your Phone Number"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') ? old('phone') : $item->phone }}" />
                                    </div>
                                    <!-- Form Group (Angkatan)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputAngkatan">Angkatan</label>
                                        <input name="angkatan" id="inputAngkatan" type="text" placeholder="Eg. 2017"
                                            class="form-control @error('angkatan') is-invalid @enderror"
                                            value="{{ old('angkatan') ? old('angkatan') : $item->angkatan}}" />
                                    </div>
                                    <!-- Form Group (Address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputAddress">Address</label>
                                        <input name="address" id="inputAddress" type="text"
                                            placeholder="Eg. Jl. A. Yani no. 17"
                                            class="form-control @error('address') is-invalid @enderror"
                                            value="{{ old('address') ? old('address') : $item->address }}" />
                                    </div>
                                    <!-- Submit button-->
                                    <button class="btn btn-primary" type="submit">Add user</button>
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
