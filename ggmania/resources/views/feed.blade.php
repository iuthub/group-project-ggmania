@extends('layouts.pattern')
@section('content')
   <div class="arttop"><h1>Articles</h1></div>
    <link rel="stylesheet" href="{{ asset('/css/feed.css') }}"/>
@foreach($all_articles as $article)

    <div class="middle">

    <div class="col-lg-8 col-md-12 col-sm-12">
<h1>{{$article->Title}}</h1>
<h5>Content</h5>
<h5>Created at</h5>
<h5>Topic</h5>
{{$article->Title}}
        @if (strlen ($article->Content)>100){{substr($article->Content, 0, 100)}}...
        @else
            {{$article->Content}}
    @endif

<td>{{$article->created_at->format('Y-m-d')}}</td>
<td>{{$article->Topic}}</td>
        <h5>{{$article->username}}</h5>
             --}}
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
