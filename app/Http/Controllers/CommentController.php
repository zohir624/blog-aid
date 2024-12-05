<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // Validate the comment input
        $request->validate([
            'body' => 'required|max:500',
        ]);

        // Find the post by ID
        $post = Post::findOrFail($postId);

        // Create the comment
        $comment = new Comment();
        $comment->body = $request->body;
        $comment->post_id = $post->id;
        $comment->save();

        // Redirect back to the post's page with a success message
        return redirect()->route('posts.show', $postId)->with('success', 'Comment added successfully!');
    }
}
