@extends('layouts.admin')
@section('tittle', 'Categoy')
    
@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Kategori</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">{{ __('dashboard')}}</a></li>
                    <li class="breadcrumb-item">{{__('category')}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<!-- [ Main Content ] start -->
<div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-sm-12">
        <!-- [ Hover-table ] start -->
        <div class="card">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-header">
                <div class="float-left">
                    <h5>Tabel Kategori</h5>
                    <span class="d-block m-t-5">Daftar kategori berita/post</span>
                </div>
                <button type="button" class="btn btn-primary float-right" onclick="insert()"><i class="mr-2" data-feather="plus"></i>Tambah Kategori</button>
            </div>
            <div class="card-body table-border-style">
                    <div class="table-responsive table-bordered" id="table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $category->categoryName}}</td>
                                        <td>{{ $category->categoryDesc}}</td>
                                        <td>
                                            <a onclick="edit({{$category->id}})" href="#" class="badge rounded-pill bg-warning"><i data-feather="edit"></i></a>
                                            <form action="{{ route('category.destroy', $category->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('apakah yakin di hapus?')" type="submit" class="badge rounded-pill bg-danger border-0"><i data-feather="trash-2"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        <!-- [ Hover-table ] end -->
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
@include('admin.category.modal')
@endsection

@include('admin.category.script')