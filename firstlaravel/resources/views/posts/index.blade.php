<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Posts!</h1>

    <a href="{{ route('posts.create') }}">Create New Post</a>

        @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a> <!-- Redirect and find the ID of the post -->
            <form action="{{ route('posts.destroy', $post->id)}}" method="POSt"> <!-- Redirect and destroy if the ID is found -->
                @csrf  <!-- Cross-sight required forgery -->
                @method('DELETE') <!-- Spoofs a Delete request because of HTML -->
                    <button type="submit" onclick="return confrim('Are you sure to Delete')">Delete</button>
            </form>
        </div>
        @endforeach
</body>
</html>