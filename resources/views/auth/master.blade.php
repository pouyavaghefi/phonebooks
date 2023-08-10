<!doctype html>
<html lang="en">
    <head>
        @include('layouts.init.head')
    </head>
    <body dir="rtl">
        @yield('wrapper')
        @include('layouts.init.scripts')
        @include('sweetalert::alert')
    </body>
</html>
