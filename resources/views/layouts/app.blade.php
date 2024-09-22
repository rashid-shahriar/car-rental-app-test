<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Car Rental System')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <!-- Navigation menu -->
    </nav>

    <div class="container">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>

</html>