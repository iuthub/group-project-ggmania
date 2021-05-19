@foreach($all_articles as $article)
    <table>
<thead>
<td>Title</td>
<td>Cont</td>
<td>Created at</td>
<td>Topic</td>

</thead>

<tbody>

<td>{{$article->Title}}</td>
<td>{{$article->Content}}</td>
<td>{{$article->created_at->format('Y-m-d')}}</td>
<td>{{$article->Topic}}</td>

</tbody>
    </table>
@endforeach
