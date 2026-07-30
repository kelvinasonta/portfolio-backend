<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Cache\BaseCacheService;
use App\Models\Page;

class HomeController extends Controller
{
    public function __construct(
        protected BaseCacheService $baseCache 
    ) {}

    public function index()
    {

       $data = $this->baseCache->remember('home.content', 600, function () {
            $page = Page::with('sections')
                ->where('slug', 'home')
                ->first();

            if (! $page) {
                return null;
            }

            return [
                'title' => $page->title,
                'content' => $page->content,
                'sections' => $page->sections->toArray(),
                'siteName' => 'Keviloq Lab',
            ];
        });

        return response()->json($data);
    }
}
