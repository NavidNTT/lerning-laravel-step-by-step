<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Training')</title>
</head>
<body>
    <header>
        <h1>Laravel Training</h1>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>کپی‌رایت &copy; {{ date('Y') }} - نوشته شده برای تمرین لاراول</p>
    </footer>
</body>
</html>
