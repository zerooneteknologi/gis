@extends('layouts.admin')
@section('tittle', 'Galeri')
    
@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Galeri</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">{{ __('dashboard')}}</a></li>
                    <li class="breadcrumb-item">{{__('galery')}}</li>
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
                    <h4>Tabel Galeri</h4>
                </div>
            </div>
            <div class="card-body table-border-style">
                <form id="filter" action="{{ route('galery.index')}}?tourName={{request('tourName')}}">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="{{ route('galery.create')}}" type="button" class="btn btn-primary float-left"><i class="mr-2" data-feather="plus"></i>Tambah Galeri</a>
                        </div>
                        <div class="col-sm-9 row mb-3 m-0 p-0">
                            <label class="col-sm-3 col-form-label" for="tourName">Pilih Tempat</label>
                            <div class="col-sm-9">
                                <select name="tourName" class="form-control" id="tourName">
                                    <option value="">Pilih Tempat</option>
                                    @foreach ($tours as $tour)
                                        <option value="{{ $tour->id}}" @selected(request('tourName') == $tour->id ) >{{ $tour->tourName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="table-responsive table-bordered" id="table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Wisata</th>
                                <th>Judul Photo</th>
                                <th>Photo</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeries as $galery)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $galery->tour->tourName}}</td>
                                    <td>{{ $galery->galeryName}}</td>
                                    <td><img style="height: 50px" src="{{ asset($galery->galeryImg)}}" alt="{{ $galery->galeryName}}"></td>
                                    <td>
                                        <a onclick="edit({{$galery->id}})" href="#" class="badge rounded-pill bg-warning"><i data-feather="edit"></i></a>
                                        <form action="{{ route('galery.destroy', $galery->id)}}" method="POST" class="d-inline">
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
@endsection
@push('script')
    <script>
        $('#tourName').on('change', function(e) {
            $('#filter').submit();
        })
    </script>
@endpush