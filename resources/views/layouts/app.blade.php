<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @stack('prepend-style')
    @include('includes.style')
    @stack('addons-style')

    <title>@yield('title')</title>
</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')

    @stack('prepend-script')
    @include('includes.script')
    @stack('addons-script')
</body>

</html>