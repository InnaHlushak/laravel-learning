<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <!-- На кожній сторінці буде відображатися наступне меню -->
    <nav>
        <span>Меню 1</span> |
        <span>Меню 2</span> |
        <span>Меню 3</span> |
        <span>Меню 4</span> |
    </nav>
    <section>
        @yield('content')
    </section>    
</body>

</html>