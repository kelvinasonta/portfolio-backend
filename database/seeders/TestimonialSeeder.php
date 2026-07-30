<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Testimonial::create([
            'quote' => 'Noxus delivered our enterprise platform three weeks ahead of schedule. The code quality and architecture choices were simply world-class. They don\'t just build, they engineer.',
            'author' => 'Sarah Jenkins',
            'role' => 'CTO',
            'company' => 'FinTech Global',
            'featured' => true,
        ]);

        \App\Models\Testimonial::create([
            'quote' => 'We brought them in to salvage a failing project. Within a month, they rewrote the backend in Laravel and rebuilt the frontend in React. Performance increased by 400%.',
            'author' => 'Marcus Chen',
            'role' => 'VP Engineering',
            'company' => 'Lumina',
            'featured' => false,
        ]);

        \App\Models\Testimonial::create([
            'quote' => 'Working with this agency felt like having an elite internal team. Their communication is transparent and their technical expertise is unmatched in the industry.',
            'author' => 'Elena Rodriguez',
            'role' => 'Founder',
            'company' => 'HealthSync API',
            'featured' => false,
        ]);

        \App\Models\Testimonial::create([
            'quote' => 'They understand business goals just as well as they understand code. Every technical decision they made was aligned with our revenue targets.',
            'author' => 'David Park',
            'role' => 'Director of Product',
            'company' => 'Nexus',
            'featured' => false,
        ]);
    }
}
