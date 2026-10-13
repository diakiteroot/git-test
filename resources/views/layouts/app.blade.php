<!DOCTYPE html>
<html lang="fr">
<head>
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.navbar')
    <main>@yield('content')</main>
    <footer>&copy; {{ date('Y') }}</footer>
</body>
</html>
