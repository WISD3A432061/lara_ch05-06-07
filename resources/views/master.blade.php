<!DOCYPE html>
<html>
<head>
    <title>@yield('title')</title></title>
    @section('head')
        @include('parials.head')
    @show
</head>
<body>
@include('partials.nav')
<div class="container">
    @yield('content')
</div>
</body>
</html>