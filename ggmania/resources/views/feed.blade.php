@foreach($all_articles as $article)
    <table>
<thead>
<td>Title</td>
<td>Content</td>
</thead>

<tbody>

<td>{{$article->Title}}</td>
<td>{{$article->Content}}</td>

</tbody>
    </table>
@endforeach
