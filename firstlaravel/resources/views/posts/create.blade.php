<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Post!</h1>

    <form method="POST" action="{{ route('posts.store') }}">
       @csrf  <!-- Cross-sight Request Forgery (Security) -->
        <label for="title">Title:</label> <br>
            <input type="text" name="title" id="title" value="{{ old('title') }}"> <!-- Old means previous text/input -->
                    <br><br>
        <label for="body">Body:</label> <br>
            <textarea name="body" id="body">{{ old('body') }}</textarea> <!-- Old means previous text/input -->
                    <br><br>
        <button type="submit">Save</button>
    </form>
        <!-- Checking if there an error in this page -->
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>