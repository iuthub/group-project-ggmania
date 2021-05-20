<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ggmania</title>
        <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}"/>
    </head>
    <body>
    <div class="textbox">

            <h1>
                 GGmania
            </h1>
            <h2>
                GGmania adds all gamers together.
            </h2>
            <p>Here are collected different players
                who write an article about their favorite games and their features.
               <br> Join us! And you will find many useful things!
            </p>
        </div>
    <div class="container">
        <div class="form">
            <p class="login-text" style="font-size:2em;font-weight: 800;">Log in</p>
            <label>
                <input type="text" class="text" placeholder="Enter your Email or Username" required>
            </label>
            <label>
                <input type="password" class="text" placeholder="Password" required>
            </label>
            <button class="login">Log in</button>

        </div>
        <div class="login-regiter-text">

            <button class="register"><a href="/register">Create account</a></button>

        </div>

    </div>
    </body>
</html>
