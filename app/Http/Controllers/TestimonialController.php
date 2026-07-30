<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\Testimonial::query();

        if ($request->boolean('featured')) {
            $query->where('featured', true);
        }

        $limit = $request->integer('limit', 12);

        return \App\Http\Resources\TestimonialResource::collection(
            $query->paginate($limit)
        );
    }
}
