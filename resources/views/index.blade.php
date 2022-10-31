<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>Document</title>
</head>
<body>
<p class="test">test</p>
@isset($res_c )
    {{ $res_c }}
@endisset
@isset($res_s )
    {{ $res_s }}
@endisset

@isset($posts)
    @foreach ($posts as $post)
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body}}</p>
    @endforeach
@endisset
<form method="post" enctype="multipart/form-data" action="{{ route('save') }}">
    @csrf

    <input type="file" name="image">

    <input type="submit">
</form>

<form name="person" enctype="multipart/form-data" action="">
    @csrf
    <input type="text" name="name">
    <input type="submit" id="btn">
</form>
@isset($test )
    {{ $test }}
@endisset
<script src="{{ asset("js/main.js") }}"></script>
</body>
</html>
