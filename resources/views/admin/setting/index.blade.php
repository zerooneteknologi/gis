@extends('layouts.admin')
@section('tittle', 'Setting')
    
@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Setting</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{__('dashboard')}}</a></li>
                    <li class="breadcrumb-item">{{__('setting')}}</li>
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
        <div class="card">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-header">
                <h5>Form Setting</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="/setting/{{ $setting->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-fluid card-img-top" style="max-height: 500px" src="{{ asset($setting->logo)}}" alt="{{ $setting->tittleWeb}}">
                            <div class="card-body">
                                <input name="logo" class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row mb-1">
                                <label for="tittleWeb" class="col-sm-3 col-form-label">Judul Website<code>*</code></label>
                                <div class="col-sm-9">
                                    <input name="tittleWeb" type="text" class="form-control" required id="tittleWeb" value="{{ $setting->tittleWeb}}">
                                    <small id="emailHelp" class="form-text text-muted">max 70 karakter</small>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="descWeb" class="col-sm-3 col-form-label">Deskipsi Website<code>*</code></label>
                                <div class="col-sm-9">
                                    <textarea name="descWeb" type="text" class="form-control" required id="descWeb">{{ $setting->descWeb}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="tittleAdmin" class="col-sm-3 col-form-label">Judul admin<code>*</code></label>
                                <div class="col-sm-9">
                                    <input name="tittleAdmin" type="text" class="form-control" required id="tittleAdmin" value="{{ $setting->tittleAdmin}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="officeAddress" class="col-sm-3 col-form-label">Alamat Kantor<code>*</code></label>
                                <div class="col-sm-9">
                                    <textarea name="officeAddress" type="text" class="form-control" required id="officeAddress">{{ $setting->officeAddress}}</textarea>
                                </div>
                            </div>
                            <h5>Social media</h5>
                            <hr>
                            <div class="row mb-1">
                                <label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input name="facebook" type="text" class="form-control" id="facebook" value="{{ $setting->facebook}}">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="twitter" class="col-sm-3 col-form-label">Twitter</label>
                                <div class="col-sm-9">
                                    <input name="twitter" type="text" class="form-control" id="twitter" value="{{ $setting->twitter}}">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="instagram" class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input name="instagram" type="text" class="form-control" id="instagram" value="{{ $setting->instagram}}">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="youtube" class="col-sm-3 col-form-label">Youtbe</label>
                                <div class="col-sm-9">
                                    <input name="youtube" type="text" class="form-control" id="youtube" value="{{ $setting->youtube}}">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="tiktok" class="col-sm-3 col-form-label">Tiktok</label>
                                <div class="col-sm-9">
                                    <input name="tiktok" type="text" class="form-control" id="tiktok" value="{{ $setting->tiktok}}">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="linked" class="col-sm-3 col-form-label">Linked</label>
                                <div class="col-sm-9">
                                    <input name="linked" type="text" class="form-control" id="linked" value="{{ $setting->linked}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
@endsection