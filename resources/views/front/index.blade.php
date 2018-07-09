@extends('front.layouts.master')
@section('title')
    IceTrips
@endsection
@section('content')
    @include('front.includes.slideshow')
    <section id="content" class="tour">
        <div class="section white-bg">
            <div class="container">
                <div class="text-center description block">
                    <h1>Most Popular Tour Packages</h1>
                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa idend porta nequetiam</p>
                </div>

                <div class="tour-packages row add-clearfix image-box">
                    @foreach($categories as $cat)
                        @if($cat->category_id == null)
                            <div class="col-sm-6 col-md-4">
                                <article class="box animated" data-animation-type="fadeInDown">
                                    <figure>
                                        <a href="{{ url('home/'.$cat->url_slug)}}"><img src="{{Request::root()}}/public/uploads/category/photo/{{$cat->photo}}"></a>
                                        <figcaption>
                                            <h2 class="caption-title">{{$cat->title}}</h2>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>


        <div class="global-map-area promo-box parallax" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="content-section description pull-right col-sm-9">
                    <div class="table-wrapper hidden-table-sm">
                        <div class="table-cell">
                            <h2 class="m-title">
                                Here you can put together your trip according to your wishes.
                                <br /><em>
                                    Egypt Different !!
                                    <i>Ever Created!</i>
                                </em>
                            </h2>
                        </div>
                        <div class="action-section table-cell">
                            <a href="{{url('/home/bulid-trip')}}"><button class="btn-large">Build Your Trip</button></a>
                        </div>
                    </div>
                </div>
                <div class="image-container col-sm-4">
                    <img src="{{ asset('assets/front/images/promo-image2.png') }}" alt="" width="312" height="195" />
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <h2>Last Minute Packages</h2>
                <div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                    <ul class="slides tour-locations">
                        @foreach($latestTrips as $trip)
                            <li>
                                <article class="box">
                                    <figure>
                                        <a href="{{url('home/trip/'.$trip->categories()->first()->url_slug.'/'.$trip->url_slug)}}" class="hover-effect">
                                            <img src="{{Request::root()}}/public/uploads/trip/cover/{{$trip->photo}}">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <span class="price">${{$trip->price}}</span>
                                        <h4 class="box-title">{{$trip->title}}</h4>
                                        <hr>
                                        <a href="{{url('home/'.$trip->url_slug.'/book')}}" class="button btn-small full-width">BOOK NOW</a>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="section global-map-area">
            <div class="container">
                <div class="row add-clearfix">
                    @foreach($advantages as $advantage)
                    <div class="col-sm-6 col-md-3">
                        <div class="icon-box style6 animated small-box" data-animation-type="slideInUp">
                            <i class="soap-icon-friends"></i>
                            <div class="description">
                                <h4>{{$advantage->title}}</h4>
                                <p>{!! $advantage->description !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="icon-box style6 animated small-box" data-animation-type="slideInUp" data-animation-delay="0.3">--}}
                            {{--<i class="soap-icon-insurance"></i>--}}
                            {{--<div class="description">--}}
                                {{--<h4>Low Rate Packages</h4>--}}
                                {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="icon-box style6 animated small-box" data-animation-type="slideInUp" data-animation-delay="0.6">--}}
                            {{--<i class="soap-icon-insurance"></i>--}}
                            {{--<div class="description">--}}
                                {{--<h4>Travel Insurance</h4>--}}
                                {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="icon-box style6 animated small-box" data-animation-type="slideInUp" data-animation-delay="0.9">--}}
                            {{--<i class="soap-icon-guideline"></i>--}}
                            {{--<div class="description">--}}
                                {{--<h4>Travel Guidelines</h4>--}}
                                {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

@endsection