@extends('Admin.layouts.master')
@section('title', 'Halaman Anggota')
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
                                            Users List
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary" href="{{ route('anggota.create') }}">
                                            <i class="me-1" data-feather="user-plus"></i>
                                            Add New User
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
                                <table style="overflow-x:auto;" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Angkatan</th>
                                            <th>Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                         <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    {{$item-> name}}
                                                </div>
                                            </td>
                                            <td>{{$item-> email}}</td>
                                            <td>{{$item-> phone}}</td>
                                            <td>
                                                {{$item-> angkatan}}
                                            </td>
                                            <td>{{$item-> address}}</td>
                                            <td>
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('anggota.edit', $item->id) }}"><i data-feather="edit"></i></a>
                                                <form action="{{ route('anggota.destroy', $item->id) }}" method="post" style="display: inline;">
                                                @csrf
                                                @method('delete')    
                                                <button class="d-inline btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button></form>
                                            </td>
                                        </tr>      
                                        @empty
                                        <tr class="text-center"> 
                                            <p>kosong</p>
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