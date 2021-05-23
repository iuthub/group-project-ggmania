@extends('layouts.pattern')
<link rel="stylesheet" href="{{ asset('/css/addarticle.css') }}"/>




@if(session()->has('success'))
    {{session()->get('success')}}
@endif

@section('content')

<div id="main">
    @parent

<form method="post" action="{{route('addarticle')}}">
    @csrf

    <select name="Topic" >
        <option value="Game development">Game development</option>
        <option value="Mobile Gaming">Mobile Gaming</option>
        <option value="PC gaming">PC gaming</option>
    </select>

    <input class="title" type="text" name="Title" placeholder="Title" required><br/>
    <textarea class='content' name="Content" placeholder="Content" required></textarea><br/>
    <button type="submit">Add article</button>
</form></div>

@endsection
