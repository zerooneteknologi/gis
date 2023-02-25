@extends('layouts.admin')
@section('tittle', 'Berita')
    
@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Berita</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">{{ __('dashboard')}}</a></li>
                    <li class="breadcrumb-item">{{__('post')}}</li>
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
                    {{-- <h5>Tabel Berita</h5> --}}
                    <h4 class="d-block m-t-5">Daftar Berita</h4>
                </div>
                <button type="button" class="btn btn-primary float-right" onclick="insert()"><i class="mr-2" data-feather="plus"></i>Tambah Berita</button>
            </div>
            <div class="card-body table-border-style">
                    <div class="table-responsive table-bordered" id="table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $post->postTitle }}</td>
                                        <td>{{ $post->category->categoryName }}</td>
                                        <td>{{ date_format($post->created_at, 'd M Y') }}</td>
                                        <td>
                                            <a onclick="edit({{$post->id }})" href="#" class="badge rounded-pill bg-warning"><i data-feather="edit"></i></a>
                                            <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Yakin hapus data ini ?')" type="submit" class="badge rounded-pill bg-danger border-0"><i data-feather="trash-2"></i></button>
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

@include('admin.post.modal')
@endsection

@include('admin.post.script')