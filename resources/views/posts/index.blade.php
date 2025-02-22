<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Aid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center">Blog Aid</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
        
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="row g-0">
                    @if($post->photo)
                        <!-- Display thumbnail if photo exists -->
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $post->photo) }}" class="img-fluid rounded-start" alt="{{ $post->title }}">
                        </div>
                    @endif
                    <div class="{{ $post->photo ? 'col-md-8' : 'col-12' }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
