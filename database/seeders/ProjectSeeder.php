<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'slug' => 'aura-finance',
            'name' => 'Aura Finance Ikpu',
            'category' => 'Fintech Platform',
            'description' => 'A complete overhaul of a legacy wealth management dashboard into a modern, real-time React application.',
            'tech' => ['React', 'TypeScript', 'Node.js'],
            'cover_url' => 'https://www.websitedesigner.ng/static/img/wizzypro.png',
            'featured' => true,
            'year' => 2025,
        ]);

        \App\Models\Project::create([
            'slug' => 'nexus-ai',
            'name' => 'Nexus AI',
            'category' => 'AI SaaS',
            'description' => 'An intelligent document processing platform leveraging custom LLM pipelines for enterprise legal teams.',
            'tech' => ['Next.js', 'Python', 'OpenAI'],
            'featured' => true,
            'gradient' => 'from-[#1d3b73] to-[#FFB800]',
            'year' => 2025,
        ]);

        \App\Models\Project::create([
            'slug' => 'lumina-commerce',
            'name' => 'Lumina Commerce',
            'category' => 'E-Commerce',
            'description' => 'A headless storefront built for a luxury fashion brand, resulting in a 40% increase in conversion rates.',
            'tech' => ['Remix', 'Shopify', 'Tailwind'],
            'featured' => true,
            'gradient' => 'from-[#1d3b73] via-[#FF4400] to-[#880000]',
            'year' => 2024,
        ]);
    }
}
