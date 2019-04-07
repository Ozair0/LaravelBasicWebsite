<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Loaded Bootstrap --}}
    <link rel="stylesheet" href="/css/app.css">
    <title>BasicWebsite</title>
</head>
<body>
@include('inc.navbar')
<div class="container">
    {{-- Only in home page it will be showen --}}
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>
<footer id="footer" class="text-center">
    <p>Copyright 2019 &copy BasicWebsite</p>
</footer>
</body>
</html>