@extends('admin.layouts.master')
@section('title')
    Create Category
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            Create Category
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
                        <h3 class="box-title">Create New Category</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="{{url('/admin/category')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <div class="box-body">
                    <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title </label>
                    <div class="col-sm-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
                    @if ($errors->has('title'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                    </div>
                    <label for="category_id" class="col-sm-2 control-label">Category</label>

                    <div class="col-sm-4">
                        <select name="category_id" id="category_id" class="form-control col-sm-4 select2">
                            <option value="0">No parent category (Root category)</option>
                            @foreach($category as $cat)
                                @if($cat->category_id == null)
                                 <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @else
                                    <option value="{{$cat->id}}">-{{$cat->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-2 control-label">Photo</label>
                        <div class="col-sm-4">
                            <input type="file" name="photo" class="form-control" id="photo">
                        </div>

                    <label for="icon" class="col-sm-2 control-label">Icon</label>

                    <div class="col-sm-4">
                    <input type="file" name="icon" class="form-control" id="icon">
                    </div>
                    </div>
                        <div class="form-group">
                            <label for="note" class="col-sm-2 control-label">Note</label>

                            <div class="col-sm-10 {{ $errors->has('note') ? ' has-error' : '' }}">
                                <div class="box-body pad">
                                    <textarea name="note" class="form-control" id="editor1">{{ old('note') }}</textarea>
                                    @if ($errors->has('note'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('note') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <hr>

                        <div class="form-group">
                            <label for="meta_title" class="col-sm-2 control-label">Meta Title</label>

                            <div class="col-sm-4">
                                <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Meta Title" value="{{ old('meta_title') }}">
                            </div>
                            <label for="meta_keywords" class="col-sm-2 control-label">Meta Keywords</label>

                            <div class="col-sm-4">
                                <textarea name="meta_keywords" class="form-control" id="meta_keywords" placeholder="Meta keywords">{{ old('meta_keywords') }}</textarea>

                            </div>

                            <label for="meta_description" class="col-sm-2 control-label">Meta Description</label>

                            <div class="col-sm-4">
                                <textarea name="meta_description" class="form-control" id="meta_description" placeholder="Meta Description">{{ old('meta_keywords') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">

                        </div>


                    </div>










                    <!-- /.box-body -->
                    <div class="box-footer">
                    <button type="submit" class="btn btn-info center-block"> save</button>
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
    <link rel="stylesheet" href="{{ asset('assets/bower_components/jQuery-Tags-Input-master/dist/jquery.tagsinput.min.css')}}">
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
            font-size: 14px;
            border-radius: 10px;
        }
        div.tagsinput span.tag a{
            color: white;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('js')

    <!-- CK Editor -->
    <script src="{{ asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('editor1')
        })
    </script>

    <script src="{{ asset('assets/bower_components/jQuery-Tags-Input-master/dist/jquery.tagsinput.min.js')}}"></script>
    <script>
        $('#meta_keywords').tagsInput({
            // 'height':'34px',
            'width':'315px',
            'defaultText':'Tags',
        });
    </script>

    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.min.js')}}"></script>


    <script>
        $('.select2').select2()
    </script>
@endsection


