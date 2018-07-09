@extends('admin.layouts.master')
@section('title')
    Admin
@endsection
@section('page-header')
    <section class="content-header">
        <h1>
            Home Page
            <small></small>
        </h1>

    </section>
@endsection

@section('content')

    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive " src="{{Request::root()}}/public/uploads/trip/cover/{{$trip->photo}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{$trip->title}}</h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Price</b> <a class="pull-right">{{$trip->price}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Currency</b> <a class="pull-right">{{$trip->currency}}</a>
                            </li>
                        </ul>

                        <a href="{{url('/admin/trip/'.$trip->id.'/edit')}}" class="btn btn-primary btn-block"><b>Edit</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">SEO Column</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i>Meta Title</strong>

                        <p class="text-muted">
                            {{$trip->meta_title}}
                        </p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Meta Keywords</strong>
                        <p>
{{--                            {{$trip->meta_keywords}}--}}
{{--                        <span class="label label-danger">{{$trip->meta_keywords}}</span>--}}
                            {{--<span class="label label-success">Coding</span>--}}
                            {{--<span class="label label-info">Javascript</span>--}}
                            {{--<span class="label label-warning">PHP</span>--}}
                            {{--<span class="label label-primary">Node.js</span>--}}
                            <input type="text" value="{{$trip->meta_keywords}}" name="meta_keywords" class="form-control" id="meta_keywords">

                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Meta Description</strong>

                        <p>{{$trip->meta_description}}</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Details</a></li>
                        <li><a href="#timeline" data-toggle="tab">Photos</a></li>
                        <li><a href="#bookings" data-toggle="tab">Bookings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <span>
                                        <h3>Description</h3>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                   {!!$trip->description!!}
                                </p>
                            </div>
                            <!-- /.post -->
                            <div class="post">
                                <div class="user-block">
                                    <span>
                                        <h3>Include</h3>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    {!!$trip->include!!}
                                </p>
                            </div>
                            <!-- /.post -->
                            <div class="post">
                                <div class="user-block">
                                    <span>
                                        <h3>Not Include</h3>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    {!!$trip->not_include!!}
                                </p>
                            </div>
                            <!-- /.post -->
                            <div class="post">
                                <div class="user-block">
                                    <span>
                                        <h3>Program</h3>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    {!!$trip->program!!}
                                </p>
                            </div>
                            <!-- /.post -->
                            <div class="post">
                                <div class="user-block">
                                    <span>
                                        <h3>Note</h3>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    {!!$trip->note!!}
                                </p>
                            </div>
                            <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                            <ul class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <li class="time-label">
                        <span class="bg-green">
                          {{$trip->created_at->format('d/m/Y')}}
                        </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-camera bg-purple"></i>

                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><strong>{{$trip->title}}</strong> photos</h3>
                                        <form method="post" action="{{url('/admin/trip/'.$trip->id.'/photo/delete')}}">
                                            {{csrf_field()}}
                                            <div class="timeline-body " id="trip-image">

                                                <ul>
                                                            @foreach($trip->photos as $photos)
                                                                <li>

                                                                    <input type="checkbox" id="delete" name="delete[]" value="{{$photos->id}}">
                                                                    {{--@if ($errors->has('delete[]'))--}}
                                                                        {{--<span class="help-block">--}}
                                                                            {{--<strong>{{ $errors->first('delete[]') }}</strong>--}}
                                                                        {{--</span>--}}
                                                                    {{--@endif--}}
                                                                    <a href="{{Request::root()}}/public/uploads/trip/photos/{{$photos->photo}}" data-lightbox="image-1">
                                                                        <img src="{{Request::root()}}/public/uploads/trip/photos/{{$photos->photo}}" alt="..." class="margin profile-user-img">
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                </ul>
                                            </div>

{{--                                            {{dd($trip->photos()->photo)}}--}}

                                            @if($trip->photos())
                                                <button type="submit" class="btn btn-info pull-right" style="margin-top: 10px;">Delete <i class="fa fa-trash" style="margin-left: 5px"></i></button>
                                            @endif
                                        </form>


                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <li>
                                    <i class="fa fa-clock-o bg-gray"></i>
                                </li>
                            </ul>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="bookings">
                            <!-- The timeline -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Booking</h3>
                                            <div class="box-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search" class="form-control pull-right"
                                                           placeholder="Search">
                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>DEPARTURE</th>
                                                    <th>ARRIVAL</th>
                                                    <th>ADULT</th>
                                                    <th>CHILDREN</th>
                                                    <th>MESSAGE</th>
                                                </tr>
                                                @foreach($bookings as $trip)
                                                    <tr>
                                                        <td>{{$trip->id}}</td>
                                                        <td>{{$trip->name}}</td>
                                                        <td>{{$trip->email}}</td>
                                                        <td>{{$trip->departure}}</td>
                                                        <td>{{$trip->arrival}}</td>
                                                        <td>{{$trip->adult}}</td>
                                                        <td>{{$trip->children}}</td>
                                                        <td>{{$trip->message}}</td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer clearfix">
                                            <ul class="pagination pagination-sm no-margin pull-right">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>                        </div>



                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('/admin/trip/photo/create')}}" enctype="multipart/form-data" class="dropzone" id="addImages">
                    {{csrf_field()}}
                    <input type="hidden" name="trip_id" value="{{$trip->id}}">
                </form>
            </div>

            <div class="col-md-12">
                <br>
                 <a class="btn btn-primary pull-right" href="{{url('/admin/trip/'.$trip->id)}}"><i class="fa fa-upload" style="margin-right: 5px"></i>Upload</a>
            </div>
        </div>


    </section>

@endsection

@section('css')
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">--}}
    <link rel="stylesheet" href="{{ asset('assets/bower_components/dropzone-master/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/lightbox2-master/lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/jQuery-Tags-Input-master/dist/jquery.tagsinput.min.css')}}">

    <style>
        .timeline-body ul {
            list-style: none;
            display: inline-block;
        }
        .timeline-body ul li {
            display: inline;
        }
        .timeline-body ul li a img{
            width: 20%;
            height: 40%;
        }

    </style>
    <style>
        div.tagsinput span.tag {
            border: 1px solid #66c0e0;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            display: block;
            float: left;
            padding: 5px;
            text-decoration: none;
            background: #66c0e0;
            color: #ffffff;
            margin-right: 5px;
            margin-bottom: 5px;
            font-family: helvetica;
            font-size: 10px;
            border-radius: 10px;
        }
        div.tagsinput{
            border:none;


        }
        div.tagsinput span.tag a {
            display: none;
        }
    </style>
@endsection

@section('js')
    <script src="{{ asset('assets/bower_components/jQuery-Tags-Input-master/dist/jquery.tagsinput.min.js')}}"></script>

    <script>
        $('#meta_keywords').tagsInput({

            'width':'100%',
            'defaultText':'',
        });
    </script>
    <script src="{{ asset('assets/bower_components/dropzone-master/dropzone.min.js')}}"></script>

    <script src="{{ asset('assets/bower_components/lightbox2-master/lightbox.js')}}"></script>
    <script>
        Dropzone.options.addImages = {
            maxFilesize: 7,
            acceptedFiles: 'image/*',
        }

    </script>
@endsection
