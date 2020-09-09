<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page_title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        {{-- HEADER --}}
        @include('partials.header')
        {{-- FINE HEADER --}}

        {{-- MAIN --}}
        <main>
            @yield('main_content')
        </main>
        {{-- FINE MAIN --}}
    </body>
</html>
