@extends('front.layouts.master')
@section('title')
    IceTrips | {{$category->title}}
@endsection
@section('meta_title')
    {{$category->meta_title}}
@endsection

@section('meta_description')
    {{$category->meta_description}}

@endsection

@section('meta_keywords')
    {{$category->meta_keywords}}

@endsection

@section('breadcrumbs')

    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">{{$category->title}}</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="{{url('/home')}}">HOME</a></li>
                @if($category->category_id == null)
                <li><a href="{{url('/home/'.$category->url_slug)}}">{{$category->title}}</a></li>
                @else
                    <li><a href="{{url('/home/'.\App\Models\Category::find($category->category_id)->url_slug)}}">{{\App\Models\Category::find($category->category_id)->title}}</a></li>
                <li class="active"> {{$category->title}}</li>
                @endif
            </ul>
        </div>
    </div>

@endsection

@section('content')

    <section id="content">
        <div class="container">
            <div id="main">
                <div class="row add-clearfix image-box style1 tour-locations" id="load-data">
                    @foreach($trips as $trip)
                    <div class="col-sm-6 col-md-4">
                        <article class="box">
                            <figure>
                                <a href="{{url('home/trip/'.$category->url_slug.'/'.$trip->url_slug)}}" class="hover-effect">
                                    <img src="{{Request::root()}}/public/uploads/trip/cover/{{$trip->photo}}" alt="">
                                </a>
                            </figure>
                            <div class="details">
                                <span class="price">${{$trip->price}}</span>
                                <h4 class="box-title">{{$trip->title}}</h4>
                                <hr>

                                <a href="{{url('home/'.$trip->url_slug.'/book')}}" class="button btn-small full-width">BOOK NOW</a>
                            </div>
                        </article>
                    </div>
                    @endforeach

                </div>
                {{--{{dd($trips)}}--}}
                <div id="remove-row">
                    <button id="btn-more"  @if($trips->first()) data-id="{{ $trip->id }}" @else data-id="-1" @endif  class="button btn-large full-width uppercase" > Load More </button>
                </div>
                <!-- <a href="#" class="button btn-large full-width uppercase">Load More Packages</a> -->
            </div>
        </div>
    </section>

@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
@endsection

@section('js')

// Cdn Jquery
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
   $(document).on('click','#btn-more',function(){
       var id = $(this).data('id');
       console.log(id);
       var cat_id ={!! json_encode($category->id) !!};
       console.log(cat_id);

       $("#btn-more").html("Loading....");
       $.ajax({
           url : '{{ url("/trip/loadtrip") }}',
           method : "POST",
           data : {id:id,cat_id:cat_id, _token:"{{csrf_token()}}"},
           dataType : "text",
           success : function (data)
           {
              if(data != '')
              {
                  $('#remove-row').remove();
                  $('#load-data').append(data);
              }
              else
              {
                  $('#btn-more').html("No Data");
              }
           }
       });
   });
});
</script>

@endsection
