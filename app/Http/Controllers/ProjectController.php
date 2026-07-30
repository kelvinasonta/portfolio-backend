<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\Project::query();

        if ($request->boolean('featured')) {
            $query->where('featured', true);
        }

        $limit = $request->integer('limit', 12);

        return \App\Http\Resources\ProjectResource::collection(
            $query->paginate($limit)
        );
    }
}
