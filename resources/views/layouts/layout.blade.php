<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta id="csrf" data-token="{{csrf_token()}}">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h3><a href="{{route('home')}}">Home</a></h3>
    @yield('content')
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/utility.js')}}"></script>
@stack('js')

</html>
