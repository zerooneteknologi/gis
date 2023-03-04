@extends('layouts.app')

@section('content')
@section('desc', "{{ $setting->descWeb }}")
@section('title', 'News')
    <!-- ***** Main Banner Area Start ***** -->
    @if ($posts->count())
        @if (!request('search'))
        <div class="page-heading" style="background: url({{ asset($posts[0]->postImege)}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Discover Our Weekly Offers</h4>
                        <h2>{{ Str::title($posts[0]->postTitle)}}</h2>
                        <p>{{ $posts[0]->postExcerpt}}</p>
                        <div class="border-button"><a href="{{ route('single', $posts[0]->postSlug)}}">Discover More</a></div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif
    <!-- ***** Main Banner Area End ***** -->
    
    <!-- ***** Main search form Start ***** -->
    <div class="search-form @if (request('search')) mt-5 @endif ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="{{ route('news')}}">
                        <div class="row">
                        <div class="col-lg-2">
                            <h4>Pencarian:</h4>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="search" class="bg-transparent form-control" value="{{ request('search')}}" placeholder="cari berita">
                        </div>
                        <div class="col-lg-2">                        
                            <fieldset>
                                <button class="border-button">Cari</button>
                            </fieldset>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- ***** Main search form End ***** -->

    </div>
    <div class="visit-country">
        <div class="container">
        <div class="row">
            <div class="col-lg-5">
            <div class="section-heading">
                <h2>Visit One Of Our Countries Now</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="items">
                    <div class="row">
                        @foreach ($posts->skip(1) as $post)
                            <div class="col-lg-12">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                            <div class="image">
                                                <img src="{{ asset($post->postImege)}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="right-content">
                                                <h4>{{ Str::title($post->postTitle)}}</h4>
                                                <span>{{ Str::title($post->postTitle)}}</span>
                                                <div class="main-button">
                                                <a href="{{ route('single', $post->postSlug)}}">Explore More</a>
                                                </div>
                                                <p>{{ $post->postExcerpt}}</p>
                                                <ul class="info">
                                                <li><i class="fa fa-clock"></i> {{ $post->created_at->diffForHumans()}}</li>
                                                <li><i class="fa fa-list"></i> {{ $post->category->categoryName}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        <div class="col-lg-12">
                            {{ $posts->links('vendor.pagination.custom')}}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </div>
@endsection