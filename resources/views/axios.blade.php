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
<form name="aperson" enctype="multipart/form-data" action="" method="post">
    @csrf
    <input type="text" name="aname">
    <input type="submit" id="abtn">
</form>
@isset($test )
    {{ $test }}
@endisset
<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset("js/axios/dist/axios.min.js") }}"></script>
<script src="{{ asset("js/main.js") }}"></script>
</body>
