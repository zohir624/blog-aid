<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $post->title }} - Blog Aid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
    </div>

    <!-- Display comments -->
    <h3>Comments</h3>
    @foreach($post->comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <p>{{ $comment->body }}</p>
            </div>
        </div>
    @endforeach

    <!-- Add comment form -->
    <form action="{{ route('comments.store', $post->id) }}" method="POST">
        @csrf
        <textarea class="form-control" name="body" rows="3" required></textarea>
        <button type="submit" class="btn btn-primary mt-3">Add Comment</button>
    </form>
</body>
</html>
