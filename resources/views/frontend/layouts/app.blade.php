<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/common/bootstrap/bootstrap.min.css')}}">
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
 
@yield('content')

<script src="{{asset('css/common/bootstrap/bootstrap.min.css')}}"></script>
@yield('script')
</body>
</html>