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
                            All Transfers </h3>
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
                                <th>Date Transfer</th>
                                <th>Start Point</th>
                                <th>Goal</th>
                                <th>Group Size</th>
                                <th>Wishes</th>
                                <th>Action</th>
                            </tr>
                            @foreach($transfers as $transfer)
                                <tr>
                                    <td style="display: none">{{$transfer->id}}</td>
                                    <td>{{$transfer->gendre}}</td>
                                    <td>{{$transfer->name}}</td>
                                    <td>{{$transfer->email}}</td>
                                    <td>{{$transfer->country_code}} - {{$transfer->phone}}</td>
                                    <td>{{$transfer->date_transfer}}</td>
                                    <td>{{$transfer->start_point}}</td>
                                    <td>{{$transfer->goal}}</td>
                                    <td>{{$transfer->group_size}}</td>
                                    <td>{{$transfer->additional_wishes}}</td>
                                    <td>
                                        <a href="{{url('/admin/transfer/'.$transfer->id.'/delete')}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
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
