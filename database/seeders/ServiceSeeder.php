<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'tagline' => 'Fast, scalable, and accessible.',
                'short_desc' => 'Performant, accessible, and stunning marketing websites built with modern frameworks.',
                'long_desc' => 'We build high-performance marketing websites that act as an engine for your business. Using Next.js, React, and Tailwind CSS, we ensure your site is fast, accessible, and optimized for search engines.',
                'icon' => 'MonitorSmartphone',
                'includes' => ['Custom UI/UX Design', 'Next.js / React Development', 'CMS Integration (Sanity, Strapi)', 'Technical SEO Optimization', 'Web Vitals Performance Tuning'],
                'tech' => ['Next.js', 'React', 'TypeScript', 'Tailwind CSS', 'Framer Motion'],
                'gradient' => 'from-[#CC3300] to-[#1d3b73]',
            ],
            [
                'title' => 'Laravel Development',
                'tagline' => 'Reliable backends that never let you down.',
                'short_desc' => 'Robust backend systems and full-stack web applications engineered for scale.',
                'long_desc' => 'Laravel is our backend of choice for complex, data-heavy applications. We build APIs, multi-tenant SaaS products, admin panels, and full-stack applications with Laravel and its ecosystem.',
                'icon' => 'Code2',
                'includes' => ['REST & GraphQL API development', 'Multi-tenant SaaS architecture', 'Queue-based job processing', 'Laravel Filament admin panels', 'Database design & optimisation'],
                'tech' => ['Laravel', 'PHP', 'MySQL', 'Redis', 'Horizon'],
                'gradient' => 'from-[#41c4bf] to-[#1d3b73]',
            ],
            [
                'title' => 'React Applications',
                'tagline' => 'Interfaces that feel instant.',
                'short_desc' => 'Interactive dashboards and single-page applications with complex state management.',
                'long_desc' => 'We specialise in building highly interactive React applications with complex state, real-time features, and demanding performance requirements. We know React deeply.',
                'icon' => 'Cpu',
                'includes' => ['Complex state management (Zustand, Redux)', 'Real-time data with WebSockets', 'Data visualisation & dashboards', 'Micro-frontend architecture', 'Component library development'],
                'tech' => ['React', 'Zustand', 'React Query', 'Recharts', 'Framer Motion'],
                'gradient' => 'from-[#1d3b73] to-[#CC3300]',
            ],
            [
                'title' => 'AI Integrations',
                'tagline' => 'LLMs that actually do the job.',
                'short_desc' => 'Leveraging LLMs and machine learning to build intelligent features into your product.',
                'long_desc' => 'We build production-ready AI features — not demos. Retrieval-augmented generation, document processing, classification, and custom LLM pipelines that slot into your existing product.',
                'icon' => 'Sparkles',
                'includes' => ['RAG pipelines with vector databases', 'Document processing & extraction', 'AI-powered search & classification', 'Custom fine-tuned models', 'OpenAI, Anthropic, Mistral integrations'],
                'tech' => ['Python', 'OpenAI', 'Anthropic', 'Pinecone', 'LangChain'],
                'gradient' => 'from-[#FF4400] to-[#1d3b73]',
            ],
            [
                'title' => 'Business Automation',
                'tagline' => 'Software that works while you sleep.',
                'short_desc' => 'Custom workflows and internal tools to replace manual processes and save hundreds of hours.',
                'long_desc' => 'We replace spreadsheets and manual data entry with custom internal tools and automated workflows, connecting your disparate systems into a unified source of truth.',
                'icon' => 'Workflow',
                'includes' => ['Internal tool development', 'Third-party API integrations', 'Data synchronization pipelines', 'Custom CRM/ERP extensions', 'Legacy system modernization'],
                'tech' => ['Node.js', 'Laravel', 'PostgreSQL', 'Retool', 'n8n'],
                'gradient' => 'from-[#41c4bf] to-[#CC3300]',
            ],
            [
                'title' => 'Technical SEO',
                'tagline' => 'Rank higher, organically.',
                'short_desc' => 'Optimizing architecture and delivery for maximum visibility and Core Web Vitals.',
                'long_desc' => 'We fix the structural issues that prevent your site from ranking. From server-side rendering strategies to schema markup and Core Web Vitals optimization.',
                'icon' => 'LineChart',
                'includes' => ['Core Web Vitals optimization', 'Server-side rendering (SSR)', 'Dynamic sitemaps & Schema.org markup', 'Site architecture auditing', 'Page speed optimization'],
                'tech' => ['Next.js', 'Lighthouse', 'Google Search Console', 'Ahrefs'],
                'gradient' => 'from-[#1d3b73] to-[#41c4bf]',
            ]
        ];

        $defaultPricing = [
            [
                'name' => 'Starter',
                'description' => 'Perfect for small projects.',
                'price' => '$999',
                'features' => ['Basic implementation', '1 Revision', 'Email support']
            ],
            [
                'name' => 'Professional',
                'description' => 'For growing businesses.',
                'price' => '$2,499',
                'features' => ['Advanced implementation', '3 Revisions', 'Priority support', 'Analytics integration'],
                'is_popular' => true
            ],
            [
                'name' => 'Enterprise',
                'description' => 'Custom solutions for large scale.',
                'price' => 'Custom',
                'features' => ['Full custom architecture', 'Unlimited revisions', '24/7 Phone support', 'Dedicated account manager']
            ]
        ];

        $defaultFaq = [
            [
                'question' => 'How long does this typically take?',
                'answer' => 'Most projects take between 2 to 6 weeks depending on the complexity and scope.'
            ],
            [
                'question' => 'Do you provide ongoing support?',
                'answer' => 'Yes, we offer maintenance and support packages after the initial project is completed.'
            ],
            [
                'question' => 'What is the payment structure?',
                'answer' => 'We typically ask for 50% upfront to begin work, and 50% upon completion and approval.'
            ]
        ];

        foreach ($services as $index => $service) {
            Service::create(array_merge($service, [
                'slug' => \Illuminate\Support\Str::slug($service['title']),
                'pricing' => $defaultPricing,
                'faq' => $defaultFaq,
                'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80',
                'order' => $index + 1
            ]));
        }
    }
}
