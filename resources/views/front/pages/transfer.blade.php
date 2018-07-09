
@extends('front.layouts.master')
@section('title')
    IceTrips | Transfer
@endsection
@section('breadcrumbs')

    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Transfer</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="{{url('/home')}}">HOME</a></li>
                <li class="active">Transfer</li>
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

                        <form class="booking-form" method="post" action="{{url('/home/transfer')}}">
                            {{csrf_field()}}
                            <div class="person-information">
                                <h2>Your Personal Information</h2>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>Gender</label>
                                        <div class="selector">
                                            <select name="gendre" class="full-width">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5 {{$errors->has('first_name') ? 'has-error' :''}}">
                                        <label>first name</label>
                                        <input type="text" name="first_name" class="input-text full-width" value="{{old('first_name')}}" placeholder="" />
                                        @if($errors->has('first_name'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('first_name')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5 {{$errors->has('last_name') ? 'has-error' :''}}">
                                        <label>last name</label>
                                        <input type="text" name="last_name" class="input-text full-width" value="{{old('last_name')}}" placeholder="" />
                                        @if($errors->has('last_name'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('last_name')}}</strong>
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
                                    <div class="col-sm-6 col-md-5">
                                        <label>Country code</label>
                                        <div class="selector">
                                            <select name="country_code" class="full-width">
                                                @include('front.includes.country_code')
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5 {{$errors->has('phone_number') ? 'has-error' :''}}">
                                        <label>Phone number</label>
                                        <input type="text" name="phone_number" class="input-text full-width" value="{{old('phone_number')}}" placeholder="" />
                                        @if($errors->has('phone_number'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('phone_number')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5 {{$errors->has('date_transfer') ? 'has-error' :''}}">
                                        <label>Date Of Transfer</label>
                                        <input type="text" name="date_transfer" class="date input-text full-width" value="{{old('date_transfer')}}" placeholder="" />
                                        @if($errors->has('date_transfer'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('date_transfer')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>your starting point</label>
                                        <input type="text" name="start_point" class="input-text full-width" value="{{old('start_point')}}" placeholder="" />
                                        @if($errors->has('start_point'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('start_point')}}</strong>
                                                </span>
                                        @endif
                                </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5 {{$errors->has('goal') ? 'has-error' :''}}">
                                        <label>your goal</label>
                                        <input type="text" name="goal" class="input-text full-width" value="{{old('goal')}}" placeholder="" />
                                        @if($errors->has('goal'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('goal')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-md-5 {{$errors->has('group_size') ? 'has-error' :''}}">
                                        <label>group size</label>
                                        <input type="text" name="group_size" class="input-text full-width" value="{{old('group_size')}}" placeholder="" />
                                        @if($errors->has('group_size'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('group_size')}}</strong>
                                                </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="form-group row {{$errors->has('additional_wishes') ? 'has-error' :''}}">
                                    <div class="col-sm-6 col-md-10">
                                        <label>Additional wishes</label>
                                        <textarea name="additional_wishes" class="input-text full-width" placeholder="">{{old('additional_wishes')}}</textarea>
                                        @if($errors->has('additional_wishes'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('additional_wishes')}}</strong>
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
                                        <h5 class="box-title"><a href="{{url('home/trip/'.$trip->categories()->first()->url_slug.'/'.$trip->url_slug)}}">{{$trip->title}}</a></h5>
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
