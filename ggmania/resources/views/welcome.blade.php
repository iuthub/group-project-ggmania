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
            GGmania &mdash; community of gamers and source of sharp opinions
        </h2>
        </div>
    <div class="container">
        <form method="post" action="{{route('login')}}" class="form">
            @csrf
            <div class="login-text"> <p style="font-size:40px;font-weight: 800;">Log in</p></div>
            <div class="input">
                <label><input name="email" type="text" class="text" placeholder="Enter your Email or Username" required></label>
                <label><input name="password" type="password" class="text" placeholder="Password" required></label>
            </div>
            <div class="login"><button class="login">Log in</button></div>
            <div class="login-regiter-text"><button class="register"><a href="/register">Create account</a></button></div>
        </form>
    </div>
    <footer>
        <div class="footer-content">
            <img src="{{ asset('/ggmaniamain.jpg') }}" alt="Logo" height="50" width="250">
            <p>This is a blog for people interested in games and their creation.
                Inside you can find much interesting content and even create your own article.
            </p>
        </div>
        <div class="feedback">
            <h1>Contact us</h1>
            @if(Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message_sent')}}

                </div>
            @endif
            <form method="post" action="{{route('feedback')}}">
                @csrf
                <label for="fname">First Name</label>
                <input type="text" name="Name" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" name="Surname" placeholder="Your last name..">

                <label for="email">Email</label>
                <input type="text" name="Mail" placeholder="Your email">


                <label for="Write"></label>
                <textarea name="FeedbackContent" placeholder="Write something.."></textarea>
                <input type="submit" value="Submit" class="submit">

            </form>
        </div>
    </footer>
    </body>
</html>
