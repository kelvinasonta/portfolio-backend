<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

Route::prefix('v1')->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index']);
    Route::get('/testimonials', [\App\Http\Controllers\TestimonialController::class, 'index']);
    Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);
    Route::get('/blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show']);
    Route::get('/blog/{slug}/comments', [\App\Http\Controllers\BlogCommentController::class, 'index']);
    Route::post('/blog/{slug}/comments', [\App\Http\Controllers\BlogCommentController::class, 'store']);
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/services/{slug}', [ServiceController::class, 'show']);
    Route::post('/contact', [\App\Http\Controllers\InquiryController::class, 'storeContact']);
    Route::post('/project-inquiry', [\App\Http\Controllers\InquiryController::class, 'storeProject']);
    
    Route::get('/settings', function () {
        // Return settings as a simple key-value object
        $settings = \App\Models\Setting::all()->pluck('value', 'key');
        return response()->json($settings);
    });
});
