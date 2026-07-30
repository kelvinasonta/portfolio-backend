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

    public function index2(Request $request)
{
    $limit = $request->integer('limit', 12);
    $sort = $request->get('sort', 'latest');

    $cacheKey = "blog.postjhjks.{$sort}.{$limit}." . $request->integer('page', 1);

    $posts = $this->baseCache->remember($cacheKey, 3600, function () use ($sort, $limit) {

        $query = BlogPost::query();

        if ($sort === 'latest') {
            $query->latest('published_at');
        }

        $paginator = $query->paginate($limit);

        return [
            'data' => $paginator->items(),
            'meta' => [
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'per_page' => $paginator->perPage(),
                'total' => $paginator->total(),
            ],
        ];
    });


    return response()->json([
        'data' => BlogPostResource::collection($posts['data']),
        'meta' => $posts['meta'],
    ]);
}

    public function show($slug)
    {
        $post = \App\Models\BlogPost::where('slug', $slug)->firstOrFail();
        return new \App\Http\Resources\BlogPostResource($post);
    }
}
