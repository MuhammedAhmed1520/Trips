@extends('admin.layouts.master')
@section('title')
    Edit Site Setting
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
            <!-- right column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Site Setting</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{url('/admin/setting')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            @foreach($setting as $set)
                                @if($set->type==0)
                                    <div class="form-group">
                                        <label for="{{$set->slug}}" class="col-sm-2 control-label">{{$set->namesetting}}</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="{{$set->slug}}" class="form-control" id="{{$set->slug}}" placeholder="{{$set->namesetting}}" value="{{$set->value}}">
                                        </div>
                                    </div>

                                @elseif($set->type==1)

                                    <div class="form-group">

                                        <label for="{{$set->slug}}" class="col-sm-2 control-label">{{$set->namesetting}}</label>
                                        <div class="col-sm-10">
                                            <div class="box-body pad">
                                                <textarea name="{{$set->slug}}" class="form-control" placeholder="{{$set->namesetting}}" id="{{$set->slug}}">{{$set->value}}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                @elseif($set->type==2)
                                    <div class="form-group">
                                    <label for="{{$set->slug}}" class="col-sm-2 control-label">{{$set->namesetting}}</label>
                                    <div class="col-sm-10">
                                        <div class="box-body pad">
                                        <input type="file" name="{{$set->slug}}" id="{{$set->slug}}" class="form-control">
                                        </div>
                                    </div>
                                    </div>

                                @endif




                            @endforeach
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info center-block">Save <i class="fa fa-save" style="margin-left: 5px"></i></button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
                <!-- general form elements disabled -->

                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('css')

@endsection

@section('js')


@endsection