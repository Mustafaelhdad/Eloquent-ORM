<h1>Edit post</h1>

<form action="{{route('posts.update', $post->id)}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="title" value="{{$post->title}}">
    <input type="textarea" name="body" value="{{$post->body}}">
    <button type="submit">Update</button>

</form>
