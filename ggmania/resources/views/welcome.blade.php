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
            <label>
                <input type="text" class="text" placeholder="Enter your Email or Username"><br>
            </label>
            <label>
                <input type="password" class="text" placeholder="Password"><br>
            </label>
            <button class="login">Log in</button>
            <button class="register">Create account</button>

        </div>
    </div>
    <footer class="footer">
         <div class="footer-content">
             <ul class="socials">
                 <li><a href="#"><i class="fa fa-github"></i></a></li>
             </ul>
             <ul class="about">
                 <li><a href="#">About us</a></li>
             </ul>
             <ul class="faq">
                 <li><a href="#">FAQ</a></li>
             </ul>
         </div>
    </footer>
    </body>
</html>
