@extends('layouts.admin')

@section('tittle', 'Wisata')

@include('admin.tour.css')

@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Tambah Wisata</h5>
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
            <form action="/tour" method="post" enctype="multipart/form-data">
            <div class="card-header">
                <div class="float-left">
                    {{-- <h5>Tabel Berita</h5> --}}
                    <h4 class="d-block m-t-5">Tambah Wisata</h4>
                </div>
                <button type="submit" class="btn btn-primary float-right" onclick="insert()"><i class="mr-2" data-feather="plus"></i>Submit</button>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive table-bordered" id="table">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="tourName">Wisata<code>*</code></label>
                                    <input type="text" name="tourName" class="form-control" required id="tourName" placeholder="Nama tempat wisata" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="tourImg">Gambar<code>*</code></label>
                                    <input type="file" name="tourImg" class="form-control" required id="tourImg">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="tourAddress">Alamat<code>*</code></label>
                                    <input type="text" name="tourAddress" class="form-control" required id="tourAddress" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="tourDesc">Deskripsi<code>*</code></label>
                                    <textarea name="tourDesc" required id="tourDesc" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label">Koordinat </i><code>*</code> <i class="text-info">Klik map untuk menandai..!</label>
                                    <div id="map" style="height: 350px;"></div>
                                    <div class="row mt-3">
                                        <div class="col"><input type="text" name="tourLat" class="form-control" required id="latitude" disabled readonly placeholder="latitude"></div>
                                        <div class="col"><input type="text" name="tourLon" class="form-control" required id="longitude" disabled readonly placeholder="longitude"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <!-- [ Hover-table ] end -->
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
@endsection

@include('admin.tour.script')