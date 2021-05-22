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

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">
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
<main>
    @yield('content')
</main>

<footer>
    <div class="footer-content">
        <img src="{{ asset('/ggmaniamain.jpg') }}" alt="Logo" height="50" width="250">
        <p>This is a blog for people interested in games and their creation.
            Inside you can find much interesting content and even create your own article.
        </p>
    </div>
    @if(Session::has('message_sent')) //с этой строки начинается feedback
        <div class="alert alert-success" role="alert">
            {{Session::get('message_sent')}}

        </div>
    @endif
    <form method="post" action="{{route('feedback')}}" class="feedback">

        @csrf
        <label for="fname">First Name</label>
        <input type="text" name="Name" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" name="Surname" placeholder="Your last name..">

        <label for="email">Email</label>
        <input type="text" name="Mail" placeholder="Your email">


        <label for="Write">Subject</label>

        <textarea name="FeedbackContent" placeholder="Write something.."></textarea>

        <input type="submit" value="Submit" class="submit">

    </form>
</footer>
</body>
</html>

