<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post!</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Tells laravel to treate this as a PUT request -->

        <label for="title">Title:</label> <br>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title)}}">
                    <br><br>
        <label for="body">Body:</label> <br>
            <textarea name="body" id="body">{{ old('body', $post->body) }}</textarea>
                    <br><br>
        <button type="submit">Update</button>
    </form>

        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>