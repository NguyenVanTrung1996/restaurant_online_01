<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <!-- Latest compiled and minified JavaScript -->
    {{--<script src="/public/js/jquery-3.2.1.min.js"></script>--}}
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/table_product.css')}}">

</head>
<body style="background: url({{asset('img/background/18.jpg')}}">
    @include('layouts.top')
    @yield('content')
    @include('layouts.footer')
</body>
</html>