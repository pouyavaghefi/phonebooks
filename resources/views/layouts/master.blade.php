<!doctype html>
<html lang="en">
    <head>
        @include('layouts.init.head')
    </head>
    <body>
        @include('layouts.includes.header')

        <div class="container-fluid">
            <div class="row">
                @include('layouts.includes.overall.menu')

                @yield('wrapper')
            </div>
        </div>

        @include('layouts.init.scripts')
    </body>
</html>



