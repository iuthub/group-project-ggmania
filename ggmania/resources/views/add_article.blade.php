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
<div class="w-4/5 m-auto pt20">
<form method="post" action="{{route('addarticle')}}">
@csrf
    <textarea name="Title"
    class="py-20 border-b-2 w-full h-60">
    </textarea><br />
    <button type="submit">Add article</button>
</form>
</div>
</body>
</html>
