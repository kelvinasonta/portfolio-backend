<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $servicePage = Page::where('slug', 'services')->first();

        if (!$servicePage) {
            return response()->json([
                'message' => 'Service page not found'
            ], 404);
        }

        $query = $servicePage->sections()
            ->where('is_active', true)
            ->orderBy('order');

        if ($request->filled('limit')) {
            $query->limit((int) $request->limit);
        }

        $serviceSections = $query->get();

        return response()->json([
            'status' => 'success',
            'title' => $servicePage->title,
            'content' => $servicePage->content,
            'sections' => $serviceSections,
        ]);
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->first();

        if (!$service) {
            return response()->json([
                'message' => 'Service not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $service
        ]);
    }
}
