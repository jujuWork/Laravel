<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <!-- Bootstrap 5 CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Edit Post</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Form Start -->
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id ) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Simulate Put Method -->

                            <!-- Title Field -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
                            </div>

                            <!-- Body Field -->
                            <div class="mb-3">
                                <label for="body" class="form-label">Body:</label>
                                <textarea name="body" id="body" class="form-control" rows="5">{{ old('body', $post->body) }}</textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning">🔁 Update</button>
                            </div>
                        </form>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>