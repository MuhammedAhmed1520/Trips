<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Mail</title>
</head>
<body>
<h1>You got mail</h1>
<p>{{$title}}</p>
<p>{{$price}}</p>
<p>{!! $description  !!}</p>
<p>{!! $include !!}</p>
<p>{!! $not_include !!}</p>
<p>{!! $note !!}</p>
<p>{!! $program !!}</p>
</body>
</html>