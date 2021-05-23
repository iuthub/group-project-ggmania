@extends('layouts.pattern')
@section('content')
   <div class="arttop"><h1>Articles</h1></div>
    <link rel="stylesheet" href="{{ asset('/css/feed.css') }}"/>
@foreach($all_articles as $article)
    <div class="middle">
        <table>
<thead>



<td>Title</td>
<td>Content</td>
<td>Created at</td>
<td>Topic</td>
<td>Action</td>

</thead>

<tbody>

<td class="first">{{$article->Title}}</td>
<td>{{$article->Content}}</td>
<td>{{$article->created_at->format('Y-m-d')}}</td>
<td>{{$article->Topic}}</td>
<td>{{$article->username}}</td>
{{--@if (Auth::user()->username = $article->username)              --}}
@if (auth()->user()->username === $article->username) {
<td><a href="{{"delete/".$article['id']}}">Delete</a><a/></td>
}

@endif
</tbody>
        </table></div>
@endforeach
<div>
    @if(Session::has('deleted'))
        <div class="alert alert-success" role="alert">
            {{Session::get('deleted')}}

        </div>
@endif
@endsection
