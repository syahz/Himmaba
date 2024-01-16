@extends('Admin.layouts.master')
@section('title', 'Halaman Ubah Artikel')
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
                                <form action="{{ route('article.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    <input type="hidden" name="phototext" value="{{ $item->photo }}">
                                    @csrf
                                    <!-- Form Row-->
                                    <!-- Form Group (Tittle)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputTittle">Tittle</label>
                                        <input name="tittle" id="inputTittle" type="text"
                                            class="form-control @error('tittle') is-invalid @enderror"
                                            value="{{ old('tittle') ? old('tittle') : $item->tittle }}" />
                                    </div>
                                    <!-- Form Group (Image)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputImage">Email address</label>
                                        <input name="photo" id="inputEmailAddress" type="file" accept="image/*"
                                            class="form-control @error('photo') is-invalid @enderror"
                                            value="{{ old('photo') ? old('photo') : $item->photo }}" />
                                    </div>
                                    <!-- Form Group (Detail Article)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPhoneNumber">Detail Article</label>
                                        <textarea name="detail_content" class="ckeditor @error('detail_content') is-invalid @enderror">{{ old('detail_content') ? old('detail_content') : $item->detail_content }}</textarea>
                                        @error('detail_content') <div class="text-muted">{{ $message }}</div> @enderror
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
        <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ckeditor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
