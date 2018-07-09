
@extends('front.layouts.master')
@section('title')
    IceTrips | Book {{$trip->title}}
@endsection
@section('breadcrumbs')

    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Book {{$trip->title}}</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="{{url('/home')}}">HOME</a></li>
                <li class="active">Book</li>
            </ul>
        </div>
    </div>

@endsection

@section('content')

    <section id="content" class="gray-area">
        <div class="container">
            <div class="row">
                <div id="main" class="col-sms-6 col-sm-8 col-md-9">
                    <div class="booking-section travelo-box">

                        <form class="booking-form" method="post" action="{{url('/home/'.$trip->url_slug.'/book')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="trip_id" value="{{$trip->id}}">
                            <div class="person-information">
                                <h2>Booking For {{$trip->title}} trip</h2>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5 {{$errors->has('name') ? 'has-error' :''}}">
                                        <label>name</label>
                                        <input type="text" name="name" class="input-text full-width" value="{{old('name')}}" placeholder="" />
                                        @if($errors->has('name'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('name')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-5 {{$errors->has('email_address') ? 'has-error' :''}}">
                                        <label>email address</label>
                                        <input type="text" name="email_address" class="input-text full-width" value="{{old('email_address')}}" placeholder="" />
                                        @if($errors->has('email_address'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('email_address')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5 {{$errors->has('arrival') ? 'has-error' :''}}">
                                        <label>Arrival</label>
                                        <input type="text" name="arrival" class="date input-text full-width" value="{{old('arrival')}}" placeholder="" />
                                        @if($errors->has('arrival'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('arrival')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-5 {{$errors->has('departure') ? 'has-error' :''}}">
                                        <label>departure</label>
                                        <input type="text" name="departure" class="date input-text full-width" value="{{old('departure')}}" placeholder="" />
                                        @if($errors->has('departure'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('departure')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5 {{$errors->has('adult') ? 'has-error' :''}}">
                                        <label>adult</label>
                                        <input type="text" name="adult" class="input-text full-width" value="{{old('adult')}}" placeholder="" />
                                        @if($errors->has('adult'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('adult')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-5 {{$errors->has('children') ? 'has-error' :''}}">
                                        <label>children</label>
                                        <input type="text" name="children" class="input-text full-width" value="{{old('children')}}" placeholder="" />
                                        @if($errors->has('children'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('children')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{$errors->has('message') ? 'has-error' :''}}">
                                    <div class="col-sm-6 col-md-10">
                                        <label>message</label>
                                        <textarea name="message" class="input-text full-width" placeholder="">{{old('message')}}</textarea>
                                        @if($errors->has('message'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('message')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="form-group row {{$errors->has('captcha') ? 'has-error' :''}}">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Captcha</label>
                                            <div class="captcha">
                                                <span>{!!  captcha_img() !!}</span>
                                                {{--<button type="button" class="btn btn-success btn-refresh">Refresh</button>--}}
                                            </div>
                                            <input type="text" name="captcha" id="captcha" class="input-text full-width" value="" placeholder="Enter Captcha" />
                                            @if($errors->has('captcha'))
                                                <span class="help-block">
                                                    <strong>{{$errors->first('captcha')}}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <hr />
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <button type="submit" class="full-width btn-large">CONFIRM BOOKING</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                    <div class="travelo-box">
                        <h4 class="box-title">Last Minute Deals</h4>
                        <div class="image-box style14">
                            @foreach($latestTrips as $trip)
                                <article class="box">
                                    <figure><a href="{{url('home/trip/'.$trip->categories()->first()->url_slug.'/'.$trip->url_slug)}}" title="{{$trip->title}}"><img width="63" height="59" src="{{Request::root()}}/public/uploads/trip/cover/{{$trip->photo}}" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="#">{{$trip->title}}</a></h5>
                                        {{--<h5 class="box-title"><a href="{{url('home/trip/'.$trip->categories->url_slug.'/'.$trip->url_slug)}}">{{$trip->title}}</a></h5>--}}
                                        <label class="price-wrapper"><span class="price-per-unit">${{$trip->price}}</span>avg/night</label>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="travelo-box book-with-us-box">
                        <h4>Why Book with us?</h4>
                        <ul>
                            <li>
                                <i class="soap-icon-hotel-1 circle"></i>
                                <h5 class="title"><a href="#">135,00+ Hotels</a></h5>
                                <p>Nunc cursus libero pur congue arut nimspnty.</p>
                            </li>
                            <li>
                                <i class="soap-icon-savings circle"></i>
                                <h5 class="title"><a href="#">Low Rates &amp; Savings</a></h5>
                                <p>Nunc cursus libero pur congue arut nimspnty.</p>
                            </li>
                            <li>
                                <i class="soap-icon-support circle"></i>
                                <h5 class="title"><a href="#">Excellent Support</a></h5>
                                <p>Nunc cursus libero pur congue arut nimspnty.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="travelo-box contact-box">
                        <h4 class="box-title">Need Travelo Help?</h4>
                        <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                        <address class="contact-details">
                            <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                            <br />
                            <a href="#" class="contact-email">help@travelo.com</a>
                        </address>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('js')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript">
        $('.date').datepicker({
            format: 'dd-mm-yyyy'
        });
    </script>

@endsection


