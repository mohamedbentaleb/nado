<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('layouts.header')
    <body id="bg" class="font-poppins home-2">

        <div class="page-wraper">
            <div id="loading-area"></div>
            @include('layouts.navigation')
            <!-- Content -->
            <div class="page-content">
                @yield('content')
            <!-- Content END-->
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>

