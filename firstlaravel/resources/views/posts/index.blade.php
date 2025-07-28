<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>

    <!-- @vite(['resources/js/app.js'])  -->

    <!-- Bootstrap 5 CDN -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">All Posts</h1>
        
        <div class="text-center mb-4">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">
                + Create New Post
            </a>
        </div>

        @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>

        @endforeach

    </div>
</body>
</html>