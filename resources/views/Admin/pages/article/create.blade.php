@extends('Admin.layouts.master')
@section('title', 'Halaman Tambah Artikel')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-fluid px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="file-plus"></i></div>
                                    Create Post
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">
                                <a class="btn btn-sm btn-light text-primary" href="blog-management-posts-list.html">
                                    <i class="me-1" data-feather="arrow-left"></i>
                                    Back to All Posts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-fluid px-4">
                <div class="row gx-4">
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">Article Title</div>
                                <div class="card-body">
                                    <input id="postTitleInput" 
                                           name="tittle" 
                                           type="text" 
                                           value="{{ old('tittle') }}"
                                           class="form-control @error('tittle') is-invalid @enderror"
                                           placeholder="Enter your Article title..." />
                                    @error('tittle') <div class="text-muted">{{ $message }}</div> @enderror
                                </div>
                        </div>
                        <div class="card card-header-actions mb-4">
                            <div class="card-header">
                                Image Article
                                <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="The Image Article above the Article."></i>
                            </div>
                            <div class="card-body">
                                <input type="file" 
                                        name="photo" value="{{ old('photo') }}" 
                                        accept="image/*"
                                        class="lh-base form-control @error('photo') is-invalid @enderror" />
                                @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="card card-header-actions mb-4 mb-lg-0">
                            <div class="card-header">
                                Detail Article
                                <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Markdown is supported within the post content editor."></i>
                            </div>
                            <div class="card-body">
                                <textarea name="detail_content"
                                    class="ckeditor @error('detail_content') is-invalid @enderror">{{old('detail_content')}}</textarea>
                                @error('detail_content')
                                    <div class="text-muted">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-header-actions">
                            <div class="card-header">
                                Publish
                                <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="After submitting, your post will be published once it is approved by a moderator."></i>
                            </div>
                            <div class="card-body">
                                <div class="d-grid">
                                    <button type="submit" class="fw-500 btn btn-primary">Submit for
                                        Approval</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
