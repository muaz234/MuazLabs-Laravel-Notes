<html>
    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Notes App</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
            <div class="text-center" style="margin-top:10px; text-color=#ffffff">
                <h2>Laravel Notes</h2>
            </div>
        </header>
        <body>
            <div class='container'>
                @yield('main')
            </div>
            <script src="{{ asset('js/app.js') }}" type="text/js"></script>
        </body>
</html>
