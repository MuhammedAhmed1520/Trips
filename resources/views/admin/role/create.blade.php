@extends('admin.layouts.master')
@section('title')
    Create Role
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            Create Role
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
                        <h3 class="box-title">Create New Role</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="{{url('/admin/role')}}">
                        {{csrf_field()}}
                    <div class="box-body" style="margin-left:60px">
                    <div class="form-group">

                    <label for="title" class="col-sm-4 control-label">Role</label>

                        <div class="col-sm-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Role" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-3">
                            <div >
                            <label for="permission" class="control-label">Trip Permissions</label>
                            </div>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'trip')
                                    <div class="checkbox">
                                <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->title}}</label>
                                    </div>
                                        @endif
                            @endforeach

                        </div>

                        <div class="col-lg-3">
                            <div>
                            <label for="permission" class="control-label">User Permissions</label>
                            </div>
                            @foreach($permissions as $permission)
                                    @if($permission->for == 'user')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->title}}</label>
                                    </div>
                                        @endif
                            @endforeach

                    </div>

                        <div class="col-lg-3">
                            <div>
                                <label for="permission" class="control-label">Category Permissions</label>
                            </div>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'category')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->title}}</label>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                        <div class="col-lg-3">
                            <div>
                                <label for="permission" class="control-label">Slider Permissions</label>
                            </div>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'slider')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->title}}</label>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>




                    <div class="box-footer">
                    <button type="submit" class="btn btn-info center-block">save</button>
                    </div>

                    </form>
                </div>

            </div>
        </div>
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


