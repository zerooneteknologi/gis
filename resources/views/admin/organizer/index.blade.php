@extends('layouts.admin')
@section('tittle', 'Struktur Organisasi')
    
@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Struktur Organisasi</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">{{__('dashboard')}}</a></li>
                    <li class="breadcrumb-item">Struktur Organisasi</li>
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
                    <h5>Tabel Struktur Organisasi</h5>
                </div>
                <button onclick="insert()" type="button" class="btn btn-shadow btn-primary float-right"><i class="mr-2" data-feather="plus"></i>Tambah Baru</button>
            </div>
            <div class="card-body table-border-style">
                    <div class="table-responsive table-bordered" id="table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($organizers as $organizer)
                                    <tr>
                                        <td>
                                            <a href="#" onclick="edit({{ $organizer->id}})" class="badge rounded-pill bg-warning"><i data-feather="edit-2"></i></a>
                                            <form action="{{ route('organizer.destroy', $organizer->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm(`apakah yakin hapus data {{ $organizer->name }} ?`)" type="submit" class="border-0 badge rounded-pill bg-danger"><i data-feather="trash-2"></i></button>
                                            </form>
                                        </td>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>
                                            <img style="max-height: 80px" src="{{ $organizer->photo}}" alt="{{ $organizer->name}}"></td>
                                        <td>{{ $organizer->name}}</td>
                                        <td>{{ $organizer->address}}</td>
                                        <td>{{ $organizer->job}}</td>
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

@include('admin.organizer.modal')
@include('admin.organizer.script')
<!-- [ Main Content ] end -->
@endsection