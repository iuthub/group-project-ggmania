<!-- Creating a pattern for pages -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ggmania</title>
    <link rel="stylesheet" href="{{ asset('/css/pattern.css') }}"/>
</head>
<body>
@yield('text')
<header>
    <img src="{{ asset('/ggmaniamain.jpg') }}" alt="Logo">
    <div class="navigation">
        <a href="">Home</a>
        <a href="">Categories</a>
        <a href="">Add article</a>
        <a href="">Log in</a>
    </div>
</header>
 @yield('content')
<footer>
    <h2>&copy; Team-GGmania</h2>
    <p> interesting</p>
</footer>
</body>
</html>

