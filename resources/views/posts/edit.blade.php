<h1>Edit post</h1>

<form action="{{route('posts.edit', $post->id)}}" method="post">
    @csrf
    <input type="text" name="title" value="{{$post->title}}">
    <input type="textarea" name="body" value="{{$post->body}}">
    <button type="submit">Submit</button>

</form>
