<h1>Create new post</h1>

<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Post title">
    <input type="textarea" name="body" placeholder="Post content">
    <button type="submit">Submit</button>

</form>
