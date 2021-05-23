
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ggmania</title>
    <link rel="stylesheet" href="{{ asset('/css/show.css') }}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">
</head>

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
        </div>

</header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto mt-auto">

                    <h1>{{$article->Title}}</h1>

                    <h2 class="subheading">{{$article->Topic}}</h2>

                    <span class="meta">Posted by
              <strong>{{$article->username}}</strong>
              on {{$article->created_at->format('Y-m-d')}}
            </span>
                </div>
            </div>
    </div>


<div class="container">
<div class="wrapper">

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto mt-auto">
            {{$article->Content}}

        </div>
    </div>
</div>
    <div class="push"></div>
</div>
<div class="footer"></div>


<div class="footerfix">
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

</div>
</body>
</html>








