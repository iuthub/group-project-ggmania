<!-- Creating a pattern for pages -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <div class="'container">
    <img src="{{ asset('/ggmaniamain.jpg') }}" alt="Logo">
    <div class="navigation">
        <a href="/feed">Home</a>
        <a href="/add_article">Add article</a>
        <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a :href="route('logout')"
                   onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </a>
    </div></div>

</header>

<main>
    @yield('content')
</main>

</div>
<footer class=" container-fluid text-white fixed-bottom">
    <div class="'container">
    <div class="container padding">





        <form method="post" action="{{route('feedback')}}">

            @csrf


            <div class="row">
                <div class="col-md-1 mx-auto mb-4"><strong class="pt-2">Contact Us</strong></div>
                <div class="col-md-2 mx-auto mb-4">
                    <label for="fname">First Name</label>
                    <input type="text" name="Name" placeholder="Your name.." required>
                </div>
                <div class="col-md-2 mx-auto mb-4">
                    <label for="lname">Last Name</label>
                    <input type="text" name="Surname" placeholder="Your last name.." required></div>

                <div class="col-md-2 mx-auto mb-4">
                    <label for="email">Email</label>
                    <input type="text" name="Mail" placeholder="Your email" required>
                </div>
                <div class="col-md-2 mt-auto mx-auto mb-4">
                    <label for="Write"></label>
                    <textarea name="FeedbackContent" placeholder="Write something.." required></textarea></div>
                <div class="col-md-1 mx-auto mt-auto mb-4"><input class="btn btn-danger" type="submit" value="Submit"></div>
            </div>

        </form>
</footer>
</div>

</body>
</html>

