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
<nav>
    <a href="{{ route('home') }}">خانه</a> |
    <a href="{{ route('contact.show') }}">تماس با ما</a> |
    <a href="{{ route('system.info') }}">اطلاعات سیستم</a> |
    <a href="{{ route('contacts.index') }}">لیست پیام‌ها</a>
</nav>
<hr>
    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>کپی‌رایت &copy; {{ date('Y') }} - نوشته شده برای تمرین لاراول</p>
    </footer>
</body>
</html>
