@extends('layouts.admin')
@section('tittle', 'Galeri')
    
@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Tambah Galeri</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">{{ __('dashboard')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('galery.index')}}">{{ __('galery')}}</a></li>
                    <li class="breadcrumb-item">tambah galeri</li>
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
            <div class="card-header">
                <h5>Tambah Galeri</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('galery.store')}}">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="tourName">Nama Wisata</label>
                        <div class="col-sm-9">
                            <select name="tourName" class="form-control" id="tourName" required>
                                <option value="">Pilih Wisata</option>
                                @foreach ($tours as $tour)
                                    <option value="{{ $tour->id}}">{{ $tour->tourName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="dropzone">
                        <h5>Drag or Drop Here</h5>
                        <input type="file" multiple class="file">
                    </div>

                    <div class="preview">
                        
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
@endsection

@push('css')
    <style>
        form .dropzone {
            border: 2px dashed #ccc;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        form .dropzone:hover {
            border-style: solid;
            background: #a3a4ac59;
        }

        form .dropzone input{
            display: none;
        }

        form .preview {
            border: 1px solid #d5d5e1;
            border-radius: 5px;
            position: relative;
            background: #dfe3f259;
            margin-bottom: 1rem;
        }
        form .preview .img {
            background-color: white;
            border: 1px solid #d5d5e1;
            border-radius: 5px;
            margin: 1rem;
            margin-bottom: 1rem;
        }

        form .preview .img a:hover {
            font-size: 12pt;
            color: blue;
        }
    </style>
@endpush

@push('script')
<script>
    let files = [],
    dropzone = document.querySelector('.dropzone'),
    input = document.querySelector('.file'),
    preview = document.querySelector('.preview');

    dropzone.addEventListener('click', () => input.click());
    input.addEventListener('change', () => {
        let file = input.files;

        for (let i = 0; i < file.length; i++) {
            files.push(file[i]);
        }
        showPreview();
    })

    let img = ''
    const showPreview = () => {
        files.forEach( e => {
            img +=`
                <div class="img row">
                    <div class="col-sm-5">
                        <img class="img-fluid card-img mt-2 mb-2" src="${URL.createObjectURL(e)}" alt="">
                    </div>
                    <div class="col-sm-7 mt-2 mb-2">
                        <input type="file" name="galeryImage" id="galeryImage" value ="${URL.createObjectURL(e)}" >
                        <div class="form-group">
                            <label class="form-label" for="galeryName">Nama Poto</label>
                            <input name="galeryName" placeholder="nama photo" type="text" class="form-control" id="galeryName">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="galeryDesc">Deskripsi Poto</label>
                            <textarea name="galeryDesc" class="form-control" placeholder="deskripsi poto" id="galeryDesc" rows="3"></textarea>
                        </div>
                    </div>
                    <a href="#" class="text-center">remove</a>
                </div>
            ` 
        })
        preview.innerHTML = img;
    }

</script>
    
@endpush