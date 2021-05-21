@extends('layouts.pattern')





@if(session()->has('success'))
    {{session()->get('success')}}
@endif
@section('content')
    @parent
<form method="post" action="{{route('addarticle')}}">
    @csrf

    <select name="Topic" >
        <option value="Game development">Game development</option>
        <option value="Mobile Gaming">Mobile Gaming</option>
        <option value="PC gaming">PC gaming</option>
    </select>

    <input type="text" name="Title" placeholder="Title"><br/>
    <textarea name="Content" placeholder="Content">
    </textarea><br/>
    <button type="submit">Add article</button>
</form>
@endsection
