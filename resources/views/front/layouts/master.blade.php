<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title> @yield('title')</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    @include('front.includes.seo')

    @include('front.includes.css')
    @yield('css')
</head>
<body>
<div id="page-wrapper">

    @include('front.includes.header')
    @yield('breadcrumbs')
    @yield('content')

   @include('front.includes.footer')
</div>


@include('front.includes.js')
@yield('js')
</body>
</html>

