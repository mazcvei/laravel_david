<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navbar')
            @yield('content')
           @include('layouts.footer')
           @include('layouts.javascripts')
        </div>
    </body>
</html>
