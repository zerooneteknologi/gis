@extends('layouts.app')

@section('content')
@section('desc', "{{ $post->postExcerpt }}")
@section('title', 'News')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" style="background: url({{ asset($post->postImege)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{ Str::title($post->postTitle)}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    
    <div class="reservation-form">
        <div class="container">
            <small><i class="fa fa-list"></i> {{ $post->category->categoryName}}</small>
            <small><i class="fa fa-clock"></i> {{ $post->created_at->diffForHumans()}} </small>

            <div class="row">
                <div class="col-lg-12" id="reservation-form">
                    <h4><em>{{ Str::title($post->postTitle)}}</em></h4>
                    <article class="text-reset">
                        {!! $post->postDesc !!}
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection