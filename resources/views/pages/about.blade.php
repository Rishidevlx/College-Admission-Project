<x-layouts.app title="About Us - NextSkill College Admission Portal" :hide-glow="true">

    <!-- 1. Fixed Pure White Navigation Bar -->
    <x-ui.navbar />

    <main class="bg-white min-h-[calc(100vh-14rem)]">
        
        <!-- Breadcrumb Navigation -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 sm:pt-8 pb-2">
            <nav class="flex items-center gap-2 text-xs sm:text-sm text-muted font-medium" aria-label="Breadcrumb">
                <a href="{{ url('/') }}" class="hover:text-brand transition-colors">Home</a>
                <span class="text-zinc-300">/</span>
                <span class="text-heading font-semibold" aria-current="page">About Us</span>
            </nav>
        </div>

        <!-- 2. About Hero Section Component -->
        <x-sections.about-hero />

        <!-- 3. What Gives Us An Edge? Sticky Section Component (5 Vector Cards) -->
        <x-sections.about-edge />

        <!-- 4. What Drives Us? Section Component (3 Simple Clean Cards) -->
        <x-sections.about-drives />

        <!-- 5. Reusable CTA Banner Component (Reused from Home Page) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
            <x-ui.cta-banner 
                title="Choose the right College for your future" 
                buttonText="Explore Now"
                :buttonLink="url('/colleges')"
                :image="asset('images/assets/about-cta.png')" 
            />
        </div>

    </main>

    <!-- 6. Reusable Footer Component -->
    <x-ui.footer />

</x-layouts.app>
