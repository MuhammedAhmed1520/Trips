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
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                            All Bulid-Trips </h3>
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
                                <th>Gender</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Departure Date</th>
                                <th>Arrivals Date</th>
                                <th>Departure Country</th>
                                <th>Arrivals Country</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            @foreach($trips as $trip)
                                <tr>
                                    <td style="display: none">{{$trip->id}}</td>
                                    <td>{{$trip->gendre}}</td>
                                    <td>{{$trip->name}}</td>
                                    <td>{{$trip->email}}</td>
                                    <td>{{$trip->country_code}} - {{$trip->phone}}</td>
                                    <td>{{$trip->dep_date}}</td>
                                    <td>{{$trip->arr_date}}</td>
                                    <td>{{$trip->dep_country}}</td>
                                    <td>{{$trip->arr_country}}</td>
                                    <td>{{$trip->message}}</td>
                                    <td>
                                        <a href="{{url('/admin/bulid-trip/'.$trip->id.'/delete')}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                                    </td>
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
        </div>
    </section>

@endsection

@section('css')

@endsection

@section('js')

@endsection
