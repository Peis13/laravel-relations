<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page_title')</title>

        {{-- font --}}
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

        {{-- .css --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        {{-- HEADER --}}
        @include('partials.header')
        {{-- FINE HEADER --}}

        {{-- MAIN --}}
        <main>
            <section id="@yield('section_id')" class="section @yield('section_class')">
                <div class="container">
                    @yield('main_content')
                </div>
            </section>
        </main>
        {{-- FINE MAIN --}}
    </body>
</html>
