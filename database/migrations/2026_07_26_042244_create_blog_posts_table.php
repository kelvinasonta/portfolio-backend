<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('excerpt');
            $table->longText('content')->nullable();
            $table->string('category');
            $table->string('author')->default('Noxus');
            $table->string('read_time')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('featured')->default(false);
            $table->string('cover_url')->nullable();
            $table->string('gradient')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
