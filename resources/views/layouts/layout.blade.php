<!DOCTYPE HTML>
<html>
@include('layouts._meta')
<body>

<div class="colorlib-loader"></div>

<div id="page">
    @include('layouts._header')

    @yield('aside')
    @yield('content')

    @include('layouts._footer')
</div>

</body>
</html>
