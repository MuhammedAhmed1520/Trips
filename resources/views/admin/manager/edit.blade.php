@extends('admin.layouts.master')
@section('title')
    Edit Manager
@endsection
@section('page-header')
    <section class="content-header">
        <h1>
            Edit Manager
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
                        <h3 class="box-title">Edit <strong>{{$manager->username}}</strong> Manager</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="{{url('/admin/manager/'.$manager->id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="patch">
                    <div class="box-body">

                    <div class="form-group">

                        <label for="username" class="col-sm-4 control-label">User name</label>

                        <div class="col-sm-4 {{ $errors->has('username') ? ' has-error' : '' }}">
                            <input type="text" name="username" class="form-control" id="username" placeholder="username" value="{{$manager->username}}">
                            @if ($errors->has('username'))
                                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                        <div class="form-group">

                            <label for="fullname" class="col-sm-4 control-label">Full name</label>

                            <div class="col-sm-4">
                                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="fullname" value="{{$manager->name}}">
                            </div>

                        </div>





                        <div class="form-group">

                            <label for="email" class="col-sm-4 control-label">Email</label>

                            <div class="col-sm-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{$manager->email}}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                @endif
                            </div>

                        </div>



                        <div class="form-group">

                            <label for="role" class="col-sm-4 control-label">Assign Role</label>

                            <div class="col-lg-4 text-center">
                                <div class="row">
                                    @foreach($roles as $role)
                                        <label><input type="checkbox" name="role[]" value="{{$role->id}}"
                                          @foreach ($manager->roles as $manager_role)
                                            @if($role->id == $manager_role->id)

                                            checked

                                            @endif
                                          @endforeach>{{$role->title}}</label>
                                    @endforeach

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


