@extends('layouts.app')

@section('content')
@section('desc', "{{ $setting->descWeb }}")
@section('title', 'Home')
    <!-- ***** Main Banner Area Start ***** -->
    @if ($posts->count())
        <div class="page-heading" style="background: url({{ asset($posts[0]->postImege)}})">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Discover Our Weekly Offers</h4>
                    <h2>{{ $posts[0]->postTitle}}</h2>
                    <div class="border-button"><a href="#">Discover More</a></div>
                </div>
            </div>
            </div>
        </div>
    @endif
    <!-- ***** Main Banner Area End ***** -->
    
    <!-- ***** Main search form Start ***** -->
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">
                        <div class="col-lg-2">
                            <h4>Sort Deals By:</h4>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <select name="Location" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                                    <option selected>Destinations</option>
                                    <option type="checkbox" name="option1" value="Italy">Italy</option>
                                    <option value="France">France</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Australia">Australia</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Singapore">Singapore</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <select name="Price" class="form-select" aria-label="Default select example" id="choosePrice" onChange="this.form.click()">
                                    <option selected>Price Range</option>
                                    <option value="100">$100 - $250</option>
                                    <option value="250">$250 - $500</option>
                                    <option value="500">$500 - $1,000</option>
                                    <option value="1000">$1,000 - $2,500</option>
                                    <option value="2500+">$2,500+</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-2">                        
                            <fieldset>
                                <button class="border-button">Search Results</button>
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
                        @foreach ($posts as $post)
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
                                                <h4>{{ $post->postTitle}}</h4>
                                                <span>{{ $post->postTitle}}</span>
                                                <div class="main-button">
                                                <a href="about.html">Explore More</a>
                                                </div>
                                                <p>{{ $post->postExcerpt}}</p>
                                                <ul class="info">
                                                <li><i class="fa fa-user"></i> 8.66 Mil People</li>
                                                <li><i class="fa fa-home"></i> {{ $post->category->categoryName}}</li>
                                                </ul>
                                                {{-- <div class="text-button">
                                                    <a href="about.html">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                                                </div> --}}
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