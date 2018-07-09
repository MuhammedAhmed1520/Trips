@if(Session::has('flash_message'))
    <script>
        swal("Great Job","{{Session::get('flash_message')}}", "success");
    </script>

@endif
@if(Session::has('failed_message'))
    <script>
        {{--swal("{{Session::get('failed_message')}}", "Great Job", "success");--}}
        {{--swal("Hey !", "{{Session::get('failed_message')}}");--}}
        swal("Sorry !!", "{{Session::get('failed_message')}}", "error");
    </script>
@endif