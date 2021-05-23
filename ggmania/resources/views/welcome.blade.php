<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ggmania</title>
    <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}"/>
</head>
    <body>




    <div class="'container">
        <div class="flash-message">
            @if(Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message_sent')}}

                </div>
            @endif
        </div>
        <div class="textbox">
            <img src="{{ asset('/gglong.jpg') }}" alt="Logo" height="100" width="400">
            <h2>
                GGmania &mdash; community of gamers and source of sharp opinions
            </h2>
        </div>
        <div class="justmiddle">
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



    </div>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">



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
