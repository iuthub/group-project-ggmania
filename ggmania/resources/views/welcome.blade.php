<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ggmania</title>
        <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}"/>
    </head>
    <body>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">
    <div class="textbox">
        <img src="{{ asset('/gglong.jpg') }}" alt="Logo" height="100" width="400">
        <h2>
            GGmania&mdash;community of gamers and source of sharp opinions!
        </h2>
        </div>
    <div class="container">
        <form method="post" action="{{route('login')}}" class="form">
            @csrf
            <div class="login-text"> <p style="font-size:40px;font-weight: 800;font-family: Roboto;">Log in</p></div>
            <div class="input">
                <label><input name="email" type="text" class="text" placeholder="Enter your Email or Username" required></label>
                <label><input name="password" type="password" class="text" placeholder="Password" required></label>
            </div>
            <div class="login"><button class="login">Log in</button></div>
            <div class="login-regiter-text"><button class="register"><a href="/register">Create account</a></button></div>
        </form>
    </div>
    <footer>
        <h2>&copy; Team-GGmania</h2>
        <p> interesting</p>
    </footer>
    </body>
</html>
