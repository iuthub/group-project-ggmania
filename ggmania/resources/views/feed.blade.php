@extends('layouts.pattern')
@section('content')
    <div class="arttop"><h1>Articles</h1></div>
    <link rel="stylesheet" href="{{ asset('/css/feed.css') }}"/>
    <div class="flash-message">
        @if(Session::has('deleted'))
            <div class="alert alert-success" role="alert">
                {{Session::get('deleted')}}
                @endif
        @if(Session::has('message_sent'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message_sent')}}

            </div>
        @endif
    </div>
    @foreach($all_articles as $article)

        <div class="middle">

                <img src="articleimg.jpg" class="img-fluid" alt="article img">


            <div class="col-lg-8 col-md-12 col-sm-12">
                <a href="{{"feed/".$article['id']}}"><h1>{{$article->Title}}</h1></a>

                @if (strlen ($article->Content)>240){{substr($article->Content, 0, 240)}}...
                @else
                    {{$article->Content}}
                @endif
                <h5>Created at: {{$article->created_at->format('Y-m-d')}}</h5>
                <h5>Topic:{{$article->Topic}}</h5>

                <h5>Username: {{$article->username}}</h5>
                @if (Auth::user()->isAdmin())
                <button><a href="{{"delete/".$article['id']}}">Delete as admin</a><a/></button>

                @endif

                @if(auth()->user()->username === $article->username)
                    <button><a href="{{"delete/".$article['id']}}">Delete</a><a/></button>
                @endif
            </div>
        </div>


    @endforeach
    <div class="flash-message">

    <div>


@endsection
