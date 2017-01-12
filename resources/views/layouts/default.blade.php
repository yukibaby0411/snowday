<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'u1tu') - 优一兔社区 - Coder的在线清吧</title>
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" href="/images/logo.png" role="link" >
    @yield('link')
</head>
<body>

@include('layouts._header')

<div class="container">
    @yield('content')
</div>

@include('layouts._footer')

</body>
</html>