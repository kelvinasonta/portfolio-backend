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
        Schema::table('services', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title')->nullable();
            $table->json('pricing')->nullable()->after('gradient');
            $table->json('faq')->nullable()->after('pricing');
            $table->string('cover_image')->nullable()->after('tech');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['slug', 'pricing', 'faq', 'cover_image']);
        });
    }
};
