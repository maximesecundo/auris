<!doctype html>
<html lang="fr">
    <head>

        <meta charset="UTF-8" />

        <!-- Description -->
        <title>Caracal</title>


        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type='text/css'>


    </head>

    <body>


        <div id="wrapper">
            @include('partials.header')

            {{-- PAGE CONTENT --}}
            <main id="content">
                @yield("content")
            </main>





        </div>{{-- /#wrapper --}}


        {{-- Polyfill --}}
        <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=default,es6,fetch,Object.entries,Object.values,IntersectionObserver&flags=gated"></script>

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
        @yield('scripts')


    </body>
</html>
