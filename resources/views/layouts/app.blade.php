<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Exercice')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<header><nav>Navbar</nav></header>
    <main>@yield('content')</main>
<footer>Footer</footer>
</body>
</html>