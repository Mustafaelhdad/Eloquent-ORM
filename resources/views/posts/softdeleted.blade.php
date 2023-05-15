<h1>All soft deleted Posts</h1>

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
                <form action="{{route('posts.destroy', $post->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
    @endforeach
</table>
