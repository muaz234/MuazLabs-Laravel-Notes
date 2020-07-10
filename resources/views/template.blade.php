<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Notes App</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
            <div class="text-center" style="margin-top:10px; text-color=#ffffff">

                <h2>Laravel Notes</h2>
            </div>
        </head>
        <body>
            <div class='container'>
                @yield('main')
            </div>
            <script src="{{ asset('js/app.js') }}" type="text/js"></script>
        </body>
</html>
