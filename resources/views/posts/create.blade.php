<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Post - Blog Aid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h2>Create a New Post</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-control" id="category" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" @if($category->id == $post->category_id) selected @endif>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

</body>
</html>
