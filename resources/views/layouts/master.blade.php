<!DOCTYPE html>
<html lang="en-us">
<head>

    <title>@yield('title', 'Assignment 3')</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7CUbuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" />
    <link rel="stylesheet" href="css/calc8.css" />
</head>
<body>

    <header>
        @yield('header', 'WEIGHT LOSS CALCULATOR')
    </header>

    <section>
        @yield('content')
    </section>

    <footer>
        @yield('footer')
    </footer>

</body>
</html>
