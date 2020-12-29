<html>
    <head>
        <title>Blog Application</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>