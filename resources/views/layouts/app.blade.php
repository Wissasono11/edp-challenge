<!DOCTYPE html>
<html>
<head>
    <title>Laravel App</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>