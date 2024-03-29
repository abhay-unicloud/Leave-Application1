<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="layout-boxed">

    @include('includes.loader')

    @yield('content')

    @include('includes.script')

</body>

</html>
