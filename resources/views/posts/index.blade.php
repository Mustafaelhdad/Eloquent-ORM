<h1>All Posts</h1>

<table>
    <th>id</th>
    <th>title</th>
    <th>body</th>

    @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
        </tr>
    @endforeach
</table>
