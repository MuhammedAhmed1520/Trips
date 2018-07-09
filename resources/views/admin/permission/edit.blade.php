@extends('admin.layouts.master')
@section('title')
    Edit Permission
@endsection
@section('page-header')
    <section class="content-header">
        <h1>
            Edit Permission
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
                        <h3 class="box-title">Edit <strong>{{$permission->title}}</strong> Permission</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="{{url('/admin/permission/'.$permission->id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="patch">
                    <div class="box-body">

                    <div class="form-group">

                        <label for="permission" class="col-sm-4 control-label">Permission</label>

                        <div class="col-sm-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Permission" value="{{$permission->title}}">
                            @if ($errors->has('title'))
                                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                        <div class="form-group">

                            <label for="for" class="col-sm-4 control-label">Permission For</label>

                            <div class="col-sm-4 {{ $errors->has('for') ? ' has-error' : '' }}">
                                <select name="for" id="for" class="form-control">
                                    <option value="user" @if($permission->for == 'user') selected @endif>User</option>
                                    <option value="trip" @if($permission->for == 'trip') selected @endif>Trip</option>
                                    <option value="other" @if($permission->for == 'other') selected @endif>Other</option>
                                </select>
                                @if ($errors->has('for'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('for') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>


                    </div>








                    <!-- /.box-body -->
                    <div class="box-footer">
                    <button type="submit" class="btn btn-info center-block"> save</button>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                </div>

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css')}}">

@endsection

@section('js')

    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.min.js')}}"></script>


    <script>
        $('.select2').select2()
    </script>
@endsection


