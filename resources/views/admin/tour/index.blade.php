@extends('layouts.admin')
@section('tittle', 'Wisata')
    
@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Wisata</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">{{ __('dashboard')}}</a></li>
                    <li class="breadcrumb-item">{{__('tour')}}</li>
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
                    <h4 class="d-block m-t-5">Daftar Wisata</h4>
                </div>
                <a href="{{ route('tour.create') }}" class="btn btn-success float-right"><i class="mr-2" data-feather="plus"></i>Tambah Wisata</a>
            </div>
            <div class="card-body table-border-style">
                    <div class="table-responsive table-bordered" id="table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Gambar</th>
                                    <th>Wisata</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tours as $tour)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $tour->created_at}}</td>
                                        <td><img src="{{ $tour->tourImg}}" class="img-thumbnail" width="50px" alt=""></td>
                                        <td>{{ $tour->tourName}}</td>                                        
                                        <td>
                                            <a href="#" class="badge rounded-pill bg-warning"><i data-feather="edit"></i></a>
                                            <form action="{{ route('tour.destroy', $tour->id)}}" method="post" class="d-inline">
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
@endsection