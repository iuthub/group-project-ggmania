@extends('layouts.pattern')
@section('content')
    <div class="arttop"><h1>Articles</h1></div>
    <link rel="stylesheet" href="{{ asset('/css/feed.css') }}"/>
    @foreach($all_articles as $article)

        <div class="middle">

                <img src="articleimg.jpg" class="img-fluid" alt="article img">


            <div class="col-lg-8 col-md-12 col-sm-12">
                <h1>{{$article->Title}}</h1>

                @if (strlen ($article->Content)>1500){{substr($article->Content, 0, 1500)}}...
                @else
                    {{$article->Content}}
                @endif
                <h5>Created at: {{$article->created_at->format('Y-m-d')}}</h5>
                <h5>Topic:{{$article->Topic}}</h5>

                <h5>Username: {{$article->username}}</h5>
                @if (auth()->user()->username === $article->username)
                    <button><a href="{{"delete/".$article['id']}}">Delete</a><a/></button>
                @endif
            </div>
        </div>


    @endforeach
    <div>
        @if(Session::has('deleted'))
            <div class="alert alert-success" role="alert">
                {{Session::get('deleted')}}

            </div>
    @endif
@endsection
