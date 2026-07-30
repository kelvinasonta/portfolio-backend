<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\BlogPost::create([
            'slug' => 'rag-pipeline',
            'title' => 'How we built a production RAG pipeline that actually works',
            'excerpt' => 'Most RAG demos fall apart at scale. Here is what we learned building retrieval-augmented generation for an enterprise legal platform.',
            'category' => 'AI',
            'author' => 'Noxus',
            'read_time' => '9 min',
            'published_at' => '2026-07-18',
            'featured' => false,
        ]);

        \App\Models\BlogPost::create([
            'slug' => 'laravel-2026',
            'title' => 'Why we still choose Laravel in 2026',
            'excerpt' => 'With Go, Rust, and Node dominating the conversation, here is why Laravel remains our backend of choice for complex SaaS products.',
            'category' => 'Engineering',
            'author' => 'Noxus',
            'read_time' => '7 min',
            'published_at' => '2026-07-12',
            'featured' => false,
        ]);

        \App\Models\BlogPost::create([
            'slug' => 'design-systems',
            'title' => 'The case for design systems in agency work',
            'excerpt' => 'Most agencies treat design systems as overhead. We treat them as leverage. Here is the ROI case for building one on every project.',
            'category' => 'Design',
            'author' => 'Noxus',
            'read_time' => '6 min',
            'published_at' => '2026-07-05',
            'featured' => false,
        ]);
    }
}
