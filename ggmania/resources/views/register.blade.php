<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form - Pure Codding</title>
    <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}"/>
</head>
<body>
<div class="textbox">
    <img src="{{ asset('/ggmania.png') }}" alt="Logo" height="200" width="200">
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

    <div class="Registration">
        <form>
            <p class="login-text" style="font-size:2em;font-weight: 800;">Registration</p>
            <div class="input-group">
                <input type="text" placeholder="First Name" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Last Name" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="E-mail" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Phone number" required>
            </div>
            <div class="input-group">
                <input type="date" placeholder="Date of Birth" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Postal code" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="City" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Passport Number" required>
            </div>
        </form>
        <button class="register"><a href="welcome.blade.php">Create account</a></button>
    </div>
</body>
</html>
