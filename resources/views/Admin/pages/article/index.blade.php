@extends('Admin.layouts.master')
@section('title', 'Halaman Artikel')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-fluid px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="user"></i></div>
                                            Article List
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary" href="{{ route('article.create') }}">
                                            <i class="me-1" data-feather="user-plus"></i>
                                            Add New Article
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-fluid px-4">
                        <div class="card">
                            <div class="card-body" style="overflow-x:auto;">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Tittle</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Tittle</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($items as $item)
                                         <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    {{$item-> tittle}}
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('article.edit', $item->id) }}"><i data-feather="edit"></i></a>
                                                <form action="{{ route('article.destroy', $item->id) }}" method="post" style="display: inline;">
                                                @csrf
                                                @method('delete')    
                                                <button class="d-inline btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button></form>
                                            </td>
                                        </tr>      
                                        @empty
                                        <tr>
                                            <td>
                                            Data Tidak Tersedia
                                            </td>
                                        </tr>
                                        @endforelse                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
            @endsection