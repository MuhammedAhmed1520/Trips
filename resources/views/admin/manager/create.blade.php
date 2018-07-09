@extends('admin.layouts.master')
@section('title')
    Create Manager
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            Create Manager
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
                        <h3 class="box-title">Create New Manager</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="{{url('/admin/manager')}}">
                        {{csrf_field()}}
                    <div class="box-body">
                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">User name</label>

                        <div class="col-sm-4 {{ $errors->has('username') ? ' has-error' : '' }}">
                            <input type="text" name="username" class="form-control" id="username" placeholder="username" value="{{ old('username') }}">
                            @if ($errors->has('username'))
                                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>

                        <div class="form-group">

                            <label for="name" class="col-sm-4 control-label">Full name</label>

                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ old('name') }}">
                            </div>

                        </div>





                        <div class="form-group">

                            <label for="email" class="col-sm-4 control-label">Email</label>

                            <div class="col-sm-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                @endif
                            </div>

                        </div>





                        <div class="form-group">

                            <label for="password" class="col-sm-4 control-label">Password</label>

                            <div class="col-sm-4 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" name="password" class="form-control" id="password" placeholder="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                                @endif
                            </div>

                        </div>




                        <div class="form-group">

                            <label for="password_confirmation" class="col-sm-4 control-label">Confirm Password</label>

                            <div class="col-sm-4 {{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="confirm password">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                                @endif
                            </div>

                        </div>


                        <div class="form-group">

                            <label for="role" class="col-sm-4 control-label">Assign Role</label>

                            <div class="col-lg-4 text-center {{ $errors->has('role') ? ' has-error' : '' }}">
                                <div class="row">
                                    @foreach($roles as $role)
                                        <label><input type="checkbox"  name="role[]" value="{{$role->id}}">{{$role->title}}</label>
                                    @endforeach
                                        @if ($errors->has('role'))
                                            <span class="help-block">
                    <strong>{{ $errors->first('role') }}</strong>
                    </span>
                                        @endif

                                </div>

                            </div>

{{--                            <div class="col-sm-4 {{ $errors->has('role') ? ' has-error' : '' }}">

                                <select name="role" id="role" class="form-control">
                                    @foreach($roles as $role)
                                        <option name="role" value="{{$role->id}}">{{$role->title}}</option>
                                    @endforeach
                                </select>
                            </div>--}}

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


