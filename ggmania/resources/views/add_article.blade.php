<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
