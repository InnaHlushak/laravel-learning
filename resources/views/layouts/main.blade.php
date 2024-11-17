<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
        crossorigin="anonymous">
    </script>
</head>
<body>
    <!-- На кожній сторінці буде відображатися наступне -->
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Місто Івано-Франківськ</span>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('tasks.index') }}" class="nav-link px-3 link-primary" >ПЕРЕЛІК ЗАВДАНЬ</a></li>
            <li><a href="{{ route('tasks.create') }}" class="nav-link px-3 link-primary">СТВОРИТИ ЗАВДАННЯ</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <a href="{{ route('welcome') }}" class="btn btn-primary">Головна</a>
            <a href="#" class="btn btn-outline-primary">Вийти</a>
            <!-- <button type="button" class="btn btn-outline-primary me-2">Вийти</button> -->
        </div>
    </header>

    <section>
        @yield('content')
    </section>    
</body>

</html>