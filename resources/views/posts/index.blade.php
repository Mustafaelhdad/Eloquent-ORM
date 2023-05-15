<h1>All Posts</h1>

<table>
    <th>id</th>
    <th>title</th>
    <th>body</th>
    <th>edit/delete</th>

    @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
                <a href="{{route('posts.edit', $post->id)}}">Edit</a>
                {{-- <a href="{{route('posts.delete', $post->id)}}">Delete</a> --}}
            </td>

        </tr>
    @endforeach
</table>
