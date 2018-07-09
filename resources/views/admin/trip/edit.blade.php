@extends('admin.layouts.master')
@section('title')
    Edit Trip
@endsection
@section('page-header')
    <section class="content-header">
        <h1>
            Edit Trip
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
                        <h3 class="box-title">Edit <strong>{{$trip->title}}</strong></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form class="form-horizontal" method="post" action="{{ url('/admin/trip/'.$trip->id) }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-1 control-label">Title</label>
                                <div class="col-sm-5 {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <input type="text" value="{{$trip->title}}" name="title" class="form-control" id="title" placeholder="Title" required autofocus>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>



                                <label for="price" class="col-sm-1 control-label">Price</label>
                                <div class="col-sm-5 {{ $errors->has('price') ? ' has-error' : '' }}">
                                    <input type="text" value="{{$trip->price}}" name="price" class="form-control" id="price" placeholder="Price" required autofocus>
                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                              <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="currency" class="col-sm-1 control-label">Currency</label>
                                <div class="col-sm-11 {{ $errors->has('currency') ? ' has-error' : '' }}">
                                    <input type="text" value="{{$trip->currency}}" name="currency" class="form-control" id="currency" placeholder="currency">
                                    @if ($errors->has('currency'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('currency') }}</strong>
                                        </span>
                                    @endif
                                </div>



                            </div>


                            <div class="form-group">


                                <label for="category" class="col-sm-1 control-label">Category</label>
                                <div class="col-sm-11 ">
                                    <select name="category_id[]" id="category_id" class="select2 form-control " multiple>
                                        @foreach($category as $cat)
                                            @if($cat->category_id == null)
                                                <option value="{{$cat->id}}"
                                                        @foreach($trip->categories as $tripTag)

                                                            @if($tripTag->id == $cat->id)
                                                                selected
                                                            @endif
                                                        @endforeach
                                                >{{$cat->title}}</option>
                                            @else
                                                <option value="{{$cat->id}}"
                                                        @foreach($trip->categories as $tripTag)

                                                            @if($tripTag->id == $cat->id)
                                                                selected
                                                            @endif
                                                        @endforeach
                                                >  - {{$cat->title}}</option>
                                            @endif

                                        @endforeach
                                    </select>
                                </div>




                                <label for="description" class="col-sm-1 control-label">Description</label>
                                <div class="col-sm-11">
                                    <div class="box-body pad">
                                        <textarea name="description" class="form-control" placeholder="Description" id="editor1">{{$trip->description}}</textarea>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group">
                                <label for="include" class="col-sm-1 control-label">Include</label>
                                <div class="col-sm-11">
                                    <div class="box-body pad">
                                            <textarea name="include" class="form-control" placeholder="include" id="editor2">{{$trip->include}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="notInclude" class="col-sm-1 control-label">Not Include</label>
                                <div class="col-sm-11">
                                    <div class="box-body pad">
                                            <textarea name="not_include" class="form-control" placeholder="include" id="editor3">{{$trip->not_include}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Program" class="col-sm-1 control-label">Program</label>
                                <div class="col-sm-11 {{ $errors->has('program') ? ' has-error' : '' }}">
                                    <div class="box-body pad">
                                        <textarea name="program" class="form-control" placeholder="program" id="editor4">{{$trip->program}}</textarea>
                                        @if ($errors->has('program'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('program') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="note" class="col-sm-1 control-label">Note</label>
                                <div class="col-sm-11">
                                    <div class="box-body pad">
                                        <textarea name="note" class="form-control" placeholder="note" id="editor5">{{$trip->note}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo" class="col-sm-1 control-label">Photo</label>
                                <div class="col-sm-11 {{ $errors->has('photo') ? ' has-error' : '' }}">
                                    <input type="file" name="photo" id="photo" class="form-control">
                                    @if ($errors->has('photo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('photo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="meta_title" class="col-sm-1 control-label">Meta Title</label>

                                <div class="col-sm-5">
                                    <input type="text" value="{{$trip->meta_title}}" name="meta_title" class="form-control" id="meta_title" placeholder="Meta Title">
                                </div>
                                <label for="meta_keywords" class="col-sm-1 control-label">Meta Keywords</label>

                                <div class="col-sm-5">
                                    <input type="text" value="{{$trip->meta_keywords}}" name="meta_keywords" class="form-control" id="meta_keywords" placeholder="Meta Keywords">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="meta_description" class="col-sm-1 control-label">Meta Description</label>

                                <div class="col-sm-11">
                                    <textarea name="meta_description" class="form-control" id="meta_description" placeholder="Meta Description">{{$trip->meta_keywords}}</textarea>
                                </div>
                            </div>
                            <input name="_method" type="hidden" value="PATCH">
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

    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice{
            background-color: #0d6aad;
            border: none;
        }
    </style>
@endsection

@section('js')
    <!-- CK Editor -->
    <script src="{{ asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            CKEDITOR.replace('editor2')
            CKEDITOR.replace('editor3')
            CKEDITOR.replace('editor4')
            CKEDITOR.replace('editor5')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
    <script src="{{ asset('assets/bower_components/jQuery-Tags-Input-master/dist/jquery.tagsinput.min.js')}}"></script>
    <script>
        $('#meta_keywords').tagsInput({
            // 'height':'34px',
            'width':'315px',
            'defaultText':'',
        });
    </script>


    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.min.js')}}"></script>

    <script>
        $('.select2').select2()
    </script>

@endsection


