<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create the Home Page
        $homePage = Page::create([
            'title' => 'Home',
            'slug' => 'home',
            'content' => [
                'meta_description' => 'Welcome to our awesome agency.',
                'seo_title' => 'Home'
            ]
        ]);


        // 2. Create the Hero Section
        $homePage->sections()->create([
            'section_name' => 'hero',
            'order' => 1,
            'content' => [
                'hero_badge' => 'Award winning pussy',
                'hero_title' => 'Web and Mobile',
                'hero_title_highlight' => 'solutions',
                'hero_title_suffix' => '.',
                'hero_subtitle' => "Partner with one of the Best Web Designers in Nigeria to take your brand to the next level. As a Top Web Design Company in Lagos, we deliver powerful web solutions that drive traffic, leads, and sales.",
            ]
        ]);


        $homePage->sections()->create([
            'section_name' => 'cta',
            'order' => 5,
            'content' => [
                'cta_title' => 'Let\'s build something Pussy',
                'cta_highlight' => 'extraordinary.',
                'cta_description' => 'Whether you need a full-scale web application, a headless commerce experience, or AI integration — we have the expertise to execute.',
                'cta_button_text' => 'Start a Project'
            ]
        ]);

        // 3. Create the Services Section (What we do)
        $homePage->sections()->create([
            'section_name' => 'services',
            'order' => 2,
            'content' => [
                'section_title' => 'What we build.',
                'services' => [
                    [
                        'num' => '01',
                        'title' => 'Web Development',
                        'slug' => 'web-development',
                        'desc' => 'Performant, accessible, and stunning marketing websites built with modern frameworks.',
                        'icon' => 'MonitorSmartphone'
                    ],
                    [
                        'num' => '02',
                        'title' => 'Laravel Applications',
                        'slug' => 'laravel-applications',
                        'desc' => 'Robust backend systems and full-stack web applications engineered for scale.',
                        'icon' => 'Code2'
                    ],
                    [
                        'num' => '03',
                        'title' => 'React Ecosystems',
                        'slug' => 'react-ecosystems',
                        'desc' => 'Interactive dashboards and single-page applications with complex state management.',
                        'icon' => 'Cpu'
                    ],
                    [
                        'num' => '04',
                        'title' => 'AI Integrations',
                        'slug' => 'ai-integrations',
                        'desc' => 'Leveraging LLMs and machine learning to build intelligent features into your product.',
                        'icon' => 'Sparkles'
                    ],
                    [
                        'num' => '05',
                        'title' => 'Business Automation',
                        'slug' => 'business-automation',
                        'desc' => 'Custom workflows and internal tools to replace manual processes and save hundreds of hours.',
                        'icon' => 'Workflow'
                    ],
                    [
                        'num' => '06',
                        'title' => 'Technical SEO',
                        'slug' => 'technical-seo',
                        'desc' => 'Optimizing architecture and delivery for maximum visibility and Core Web Vitals.',
                        'icon' => 'LineChart'
                    ]
                ]
            ]
        ]);

        $homePage->sections()->create([
            'section_name' => 'why_choose_us',
            'order' => 3,
            'content' => [
                'section_title' => 'Why teams choose us.',
                'items' => [
                    [
                        'title' => 'Fast Delivery',
                        'slug' => 'fast-delivery',
                        'desc' => 'We deploy prototypes in days, not months. Speed is our competitive advantage.',
                    ],
                    [
                        'title' => 'Scalable Architecture',
                        'slug' => 'scalable-architecture',
                        'desc' => 'Built on battle-tested frameworks that can handle your first user and your millionth.',
                    ],
                    [
                        'title' => 'Clean Code',
                        'slug' => 'clean-code',
                        'desc' => 'Maintainable, documented, and test-driven codebases that your future team will love.',
                    ],
                    [
                        'title' => 'Business Focus',
                        'slug' => 'business-focus',
                        'desc' => 'We don\'t just write code; we build systems that solve real business problems.',
                    ],
                    [
                        'title' => 'Long-term Support',
                        'slug' => 'long-term-support',
                        'desc' => 'We\'re here for the long haul. From launch day to version 2.0 and beyond.',
                    ]
                ]
            ]
        ]);

        $homePage->sections()->create([
            'section_name' => 'process',
            'order' => 4,
            'content' => [
                'section_title' => 'How we work.',
                'milestones' => [
                    [
                        'title' => 'Discovery',
                        'slug' => 'discovery',
                        'desc' => 'Understanding your business, users, and technical constraints.',
                        'icon' => 'Search'
                    ],
                    [
                        'title' => 'Strategy',
                        'slug' => 'strategy',
                        'desc' => 'Defining the architecture, stack, and sprint roadmap.',
                        'icon' => 'PenTool'
                    ],
                    [
                        'title' => 'Design',
                        'slug' => 'design',
                        'desc' => 'Creating high-fidelity prototypes and design systems.',
                        'icon' => 'LayoutTemplate'
                    ],
                    [
                        'title' => 'Development',
                        'slug' => 'development',
                        'desc' => 'Writing clean, scalable code in iterative sprints.',
                        'icon' => 'Code'
                    ],
                    [
                        'title' => 'Testing',
                        'slug' => 'testing',
                        'desc' => 'Rigorous QA, security audits, and performance optimization.',
                        'icon' => 'TestTube'
                    ],
                    [
                        'title' => 'Launch',
                        'slug' => 'launch',
                        'desc' => 'Deployment, monitoring, and ongoing support handoff.',
                        'icon' => 'Rocket'
                    ]
                ]
            ]
        ]);

        // 4. Create the Global Stack Section in Settings
        \App\Models\Setting::create([
            'key' => 'global_tech_stack',
            'value' => [
                'title' => 'Technologies We Use',
                'technologies' => [
                    'php' => 'https://www.php.net/images/logos/new-php-logo.png',
                    'html5' => 'https://www.websitedesigner.ng/static/img/html5-logo.png',
                    'vue.js' => 'https://cdn.simpleicons.org/vuedotjs/ffffff',
                    'node.js' => 'https://cdn.simpleicons.org/nodedotjs/ffffff',
                    'tailwind css' => 'https://cdn.simpleicons.org/tailwindcss/ffffff',
                ],
                'show_icons' => true,
            ]
        ]);


        // Services Page
        $servicesPage = Page::create([
            'title' => 'Services',
            'slug' => 'services',
            'content' => [
                'meta_description' => 'Welcome to our awesome services.',
                'seo_title' => 'Services'
            ]
        ]);
        

        // 2. Create the Hero Section
        $servicesPage->sections()->create([
            'section_name' => 'page_header',
            'order' => 1,
            'content' => [
                'label' => 'Our Services',
                'title' => 'What we build.',
                'subtitle' => "Six disciplines, one team. We don't outsource or hand off — every service is delivered by the same senior engineers who scoped it.",
            ]
        ]);


        $servicesPage->sections()->create([
            'section_name' => 'service_card',
            'order' => 2,
            'content' => [
                'service_card_one' => [
                    'num' => '01',
                    'title' => 'Web Development',
                    'slug' => 'web-development',
                    'tagline' => 'Fast, scalable, and accessible.',
                    'short_desc' => 'Performant, accessible, and stunning marketing websites built with modern frameworks.',
                    'long_desc' => 'We build high-performance marketing websites that act as an engine for your business. Using Next.js, React, and Tailwind CSS, we ensure your site is fast, accessible, and optimized for search engines.',
                    'icon' => 'MonitorSmartphone',
                    'includes' => ['Custom UI/UX Design', 'Next.js / React Development', 'CMS Integration (Sanity, Strapi)', 'Technical SEO Optimization', 'Web Vitals Performance Tuning'],
                    'tech' => ['Next.js', 'React', 'TypeScript', 'Tailwind CSS', 'Framer Motion'],
                    'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                    'gradient' => 'from-[#CC3300] to-[#1d3b73]',
                ],
                'service_card_two' => [
                    'num' => '02',
                    'title' => 'Laravel Development',
                    'slug' => 'laravel-development',
                    'tagline' => 'Reliable backends that never let you down.',
                    'short_desc' => 'Robust backend systems and full-stack web applications engineered for scale.',
                    'long_desc' => 'Laravel is our backend of choice for complex, data-heavy applications. We build APIs, multi-tenant SaaS products, admin panels, and full-stack applications with Laravel and its ecosystem.',
                    'icon' => 'Code2',
                    'includes' => ['REST & GraphQL API development', 'Multi-tenant SaaS architecture', 'Queue-based job processing', 'Laravel Filament admin panels', 'Database design & optimisation'],
                    'tech' => ['Laravel', 'PHP', 'MySQL', 'Redis', 'Horizon'],
                    'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                    'gradient' => 'from-[#41c4bf] to-[#1d3b73]',
                ],
                'service_card_three' => [
                    'num' => '03',
                    'title' => 'WordPress Development',
                    'slug' => 'wordpress-development',
                    'tagline' => 'Flexible, scalable, and easy to manage.',
                    'short_desc' => 'High-performance WordPress websites and custom plugins for businesses of all sizes.',
                    'long_desc' => 'We build custom WordPress websites that are fast, secure, and easy to manage. Whether you need a simple blog, an e-commerce store, or a complex web application, we can help.',
                    'icon' => 'Wordpress',
                    'includes' => ['Custom WordPress theme development', 'Plugin development and customisation', 'E-commerce solutions (WooCommerce)', 'Performance optimization', 'Security hardening'],
                    'tech' => ['WordPress', 'PHP', 'MySQL', 'JavaScript', 'WooCommerce'],
                    'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                    'gradient' => 'from-[#41c4bf] to-[#1d3b73]',
                ],
                'service_card_four' => [
                    'num' => '04',
                    'title' => 'Shopify Development',
                    'slug' => 'shopify-development',
                    'tagline' => 'Flexible, scalable, and easy to manage.',
                    'short_desc' => 'High-performance Shopify websites and custom plugins for businesses of all sizes.',
                    'long_desc' => 'We build custom Shopify websites that are fast, secure, and easy to manage. Whether you need a simple blog, an e-commerce store, or a complex web application, we can help.',
                    'icon' => 'ShoppingBag',
                    'includes' => ['Custom Shopify theme development', 'Plugin development and customisation', 'E-commerce solutions (WooCommerce)', 'Performance optimization', 'Security hardening'],
                    'tech' => ['Shopify', 'PHP', 'MySQL', 'JavaScript', 'WooCommerce'],
                    'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                    'gradient' => 'from-[#41c4bf] to-[#1d3b73]',
                ],
                'service_card_five' => [
                    'num' => '05',
                    'title' => 'React Applications',
                    'slug' => 'react-applications',
                    'tagline' => 'Interfaces that feel instant.',
                    'short_desc' => 'Interactive dashboards and single-page applications with complex state management.',
                    'long_desc' => 'We specialise in building highly interactive React applications with complex state, real-time features, and demanding performance requirements. We know React deeply.',
                    'icon' => 'Cpu',
                    'includes' => ['Complex state management (Zustand, Redux)', 'Real-time data with WebSockets', 'Data visualisation & dashboards', 'Micro-frontend architecture', 'Component library development'],
                    'tech' => ['React', 'Zustand', 'React Query', 'Recharts', 'Framer Motion'],
                    'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                    'gradient' => 'from-[#1d3b73] to-[#CC3300]',
                ],
                'service_card_six' => [
                    'num' => '06',
                    'title' => 'AI Integrations',
                    'slug' => 'ai-integrations',
                    'tagline' => 'LLMs that actually do the job.',
                    'short_desc' => 'Leveraging LLMs and machine learning to build intelligent features into your product.',
                    'long_desc' => 'We build production-ready AI features — not demos. Retrieval-augmented generation, document processing, classification, and custom LLM pipelines that slot into your existing product.',
                    'icon' => 'Sparkles',
                    'includes' => ['RAG pipelines with vector databases', 'Document processing & extraction', 'AI-powered search & classification', 'Custom fine-tuned models', 'OpenAI, Anthropic, Mistral integrations'],
                    'tech' => ['Python', 'OpenAI', 'Anthropic', 'Pinecone', 'LangChain'],
                    'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                    'gradient' => 'from-[#FF4400] to-[#1d3b73]',
                ],

                'service_card_seven' => [
                    'num' => '07',
                    'title' => 'Business Automation',
                'slug' => 'business-automation',
                'tagline' => 'Software that works while you sleep.',
                'short_desc' => 'Custom workflows and internal tools to replace manual processes and save hundreds of hours.',
                'long_desc' => 'We replace spreadsheets and manual data entry with custom internal tools and automated workflows, connecting your disparate systems into a unified source of truth.',
                'icon' => 'Workflow',
                'includes' => ['Internal tool development', 'Third-party API integrations', 'Data synchronization pipelines', 'Custom CRM/ERP extensions', 'Legacy system modernization'],
                'tech' => ['Node.js', 'Laravel', 'PostgreSQL', 'Retool', 'n8n'],
                'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                'gradient' => 'from-[#41c4bf] to-[#CC3300]',
                ],

                'service_card_eight' => [
                    'num' => '08',
                    'title' => 'Technical SEO',
                    'slug' => 'technical-seo',
                    'tagline' => 'Rank higher, organically.',
                    'short_desc' => 'Optimizing architecture and delivery for maximum visibility and Core Web Vitals.',
                    'long_desc' => 'We fix the structural issues that prevent your site from ranking. From server-side rendering strategies to schema markup and Core Web Vitals optimization.',
                    'icon' => 'LineChart',
                    'includes' => ['Core Web Vitals optimization', 'Server-side rendering (SSR)', 'Dynamic sitemaps & Schema.org markup', 'Site architecture auditing', 'Page speed optimization'],
                    'tech' => ['Next.js', 'Lighthouse', 'Google Search Console', 'Ahrefs'],
                    'cover_image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                    'gradient' => 'from-[#1d3b73] to-[#41c4bf]',
                ],
            ]
        ]);

        $servicesPage->sections()->create([
            'section_name' => 'services_cta',
            'order' => 3,
            'content' => [
                'cta_title' => 'Ready to start?',
                'cta_description' => 'Tell us what you need and we\'ll put together a plan.',
            ]
        ]);

        
    }
}
