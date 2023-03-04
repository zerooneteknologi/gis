@extends('layouts.app')

@section('content')
@section('desc', "{{ $setting->descWeb }}")
@section('title', 'Home')
    <!-- ***** Main Banner Area Start ***** -->
    <section id="section-1">
        <div class="content-slider">
            @foreach ($slides as $tour)
                <input type="radio" id="banner{{ $loop->iteration}}" class="sec-1-input" name="banner" checked>
            @endforeach
        <div class="slider">
            @foreach ($slides as $tour)
                <div id="top-banner-{{ $loop->iteration}}" class="banner" style="background: url({{ asset($tour->tourImg)}})">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Take a Glimpse Into The Beautiful Country Of:</h2>
                            <h1>{{ Str::title($tour->tourName)}}</h1>
                            <div class="border-button"><a href="about.html">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>44.48 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>275.400 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>$946.000</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                <a href="about.html">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <nav>
            <div class="controls">
                @foreach ($slides as $tour)
                    <label for="banner{{ $loop->iteration}}"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">{{ $loop->iteration}}</span></label>
                @endforeach
            </div>
        </nav>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
    
    <div class="amazing-deals">
        <div class="container">
            
            <!-- ***** Main Tour Area Start ***** -->
            <div class="cities-town mb-5">
                <div class="container">
                <div class="row">
                    <div class="slider-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2><em>Tempat yang Tersedia</em></h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="owl-cites-town owl-carousel">
                                @foreach ($tours as $tour)
                                    <div class="item">
                                        <div class="thumb">
                                            <img style="height: 300px" src="{{ asset($tour->tourImg)}}" alt="{{ $tour->tourName}}">
                                            <h4>{{ $tour->tourName}}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- ***** Main Tour Area End ***** -->

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading text-center">
                        <h2>Berita Terkini</h2>
                        <p>Beberapa Berita tebaru hari ini</p>
                    </div>
                </div>
                @foreach ($posts as $post)
                    <div class="col-lg-6 col-sm-6">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image">
                                        <img style="height: 350px" src="{{ asset($post->postImege)}}" alt="{{ $post->postTitle}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                <div class="content">
                                    <h4>{{ Str::title($post->postTitle)}}</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-clock"></i>
                                            <span class="list">{{ $post->created_at->diffForHumans()}}</span>
                                        </div>
                                        <div class="col-6">
                                            <i class="fa fa-map"></i>
                                            <span class="list">{{ $post->category->categoryName}}</span>
                                        </div>
                                    </div>
                                    <p>{{$post->postExcerpt}}</p>
                                    <div class="main-button">
                                        <a href="{{ route('single', $post->postSlug)}}">Baca Lengkap</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="border-button text-sm-center"><a href="{{route('news')}}">Semua Berita</a></div>
                </div>
                
                {{-- <div class="col-lg-4">
                    <div class="side-bar-map">
                        <div class="row">
                        <div class="col-lg-12">
                            <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="550px" frameborder="0" style="border:0; border-radius: 23px; " allowfullscreen=""></iframe>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="weekly-offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading text-center">
                        <h2>Berkenalan Dengan Tim Kami</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-weekly-offers owl-carousel">
                        @foreach ($organizers as $organizer)
                            <div class="item">
                                <div class="thumb">
                                    <img style="height: 250px" src="{{ asset($organizer->photo)}}" alt="">
                                    <div class="text">
                                        <h6><i class="fa fa-users"></i> {{ $organizer->name}}</h6>
                                        <div class="line-dec"></div>
                                        <ul>
                                            <li>Jabatan :</li>
                                            <li><i class="fa fa-globe"></i> {{ $organizer->job}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    
@endsection