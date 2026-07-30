<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Services\Cache\BaseCacheService;

class BlogController extends Controller
{
    public function __construct(
        protected BaseCacheService $baseCache
    ) {}

    public function index(Request $request)
    {
        $query = BlogPost::query();

        if ($request->get('sort') === 'latest') {
            $query->orderBy('published_at', 'desc');
        }

        $limit = $request->integer('limit', 12);
        
        return \App\Http\Resources\BlogPostResource::collection(
            $query->paginate($limit)
        );
    }

    public function show($slug)
    {
        $post = \App\Models\BlogPost::where('slug', $slug)->firstOrFail();
        return new \App\Http\Resources\BlogPostResource($post);
    }
}
