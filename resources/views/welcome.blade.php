<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
{{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body  class="horizontal-navigation" >
    <div id="app"></div>
{{--        <script src="{{ asset('js/app.js') }}"></script>--}}
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
