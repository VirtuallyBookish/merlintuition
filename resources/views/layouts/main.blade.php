<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Merlin Tuition</title>

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        @include('components.facebook-link-script')

        @include('components.navigation')

        @yield('content')

        @include('components.footer')

        <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
