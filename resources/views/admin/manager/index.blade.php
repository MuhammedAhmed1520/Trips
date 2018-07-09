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
            <div class="col-md-12">
                @can('admins.create',\Illuminate\Support\Facades\Auth::user())

                <a href="{{url('/admin/manager/create')}}" class="btn btn-primary pull-right margin-bottom">
                    <i class="fa fa-plus"></i>
                    Add new
                </a>
                @endcan
            </div>
        </div>

        <!-- search EXAMPLE -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Search</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">


                            <div class="form-group">
                                <label class="col-sm-1 control-label">Name</label>

                                <div class="col-sm-5">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <label class="col-sm-1 control-label">Email</label>

                                <div class="col-sm-5">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info center-block">
                                <i class="fa fa-search"></i>
                                search
                            </button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                             All Managers </h3>
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
                                <th>User name</th>
                                <th>Email</th>
                                <th>Assigned Role</th>
                                <th>Action</th>
                            </tr>
                            @foreach($managers as $manager)
                            <tr>
                                <td>{{$manager->id}}</td>
                                <td>{{$manager->username}}</td>
                                <td>{{$manager->email}}</td>
                                <td>
                                    @foreach ($manager->roles as $manager_role)
                                            {{$manager_role->title}},
                                    @endforeach
                                </td>
                                <td>
                                    {{--  @can('admins.update',\Illuminate\Support\Facades\Auth::user())  --}}
                                    <a href="{{url('/admin/manager/'.$manager->id.'/edit')}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                    {{--  @endcan  --}}
                                        @can('admins.delete',\Illuminate\Support\Facades\Auth::user())
                                    <a href="{{url('/admin/manager/'.$manager->id.'/delete')}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                                        @endcan
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