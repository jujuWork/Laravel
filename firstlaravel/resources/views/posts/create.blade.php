<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

    <!-- Bootstrap 5 CDN -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4">Create Post</h1>

        <div class="row justify-content-center">
            <div class="col-md-8"></div>

            <!-- Form Start -->
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store')}}">
                        @csrf

                        <!-- Text Feild -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                        </div>

                        <!-- Body Field -->
                        <div class="mb-3">
                            <label for="body" class="form-label">Body:</label>
                            <textarea name="body" id="body" class="form-control" rows="5">{{ old('body') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">💾 Save</button>
                        </div>
                    </form>

                    <!-- Checking if there an error in this page -->
                    @if ($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</html>