<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogCommentController extends Controller
{
    public function index(Request $request, $slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        
        $limit = $request->integer('limit', 5);
        $paginator = $post->comments()->paginate($limit);
        
        $paginator->getCollection()->transform(function ($comment) {
            return [
                'id' => $comment->id,
                'author_name' => $comment->author_name,
                'content' => $comment->content,
                'created_at' => $comment->created_at->toISOString(),
                'created_at_formatted' => $comment->created_at->diffForHumans(),
            ];
        });

        return response()->json($paginator);
    }

    public function store(Request $request, $slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
        ]);

        $comment = $post->comments()->create($validated);

        return response()->json([
            'message' => 'Comment successfully posted.',
            'data' => [
                'id' => $comment->id,
                'author_name' => $comment->author_name,
                'content' => $comment->content,
                'created_at' => $comment->created_at->toISOString(),
                'created_at_formatted' => $comment->created_at->diffForHumans(),
            ]
        ], 201);
    }
}
