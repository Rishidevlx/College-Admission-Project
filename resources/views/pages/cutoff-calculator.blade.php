<x-layouts.app title="Tamil Nadu 12th Cutoff Calculator 2026 - Find Eligible Colleges" :hide-glow="true">

    <!-- 1. Fixed Pure White Navigation Bar -->
    <x-ui.navbar />

    <main class="bg-white min-h-[calc(100vh-14rem)]">

        <!-- Breadcrumb Navigation -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 sm:pt-8 pb-2">
            <nav class="flex items-center gap-2 text-xs sm:text-sm text-muted font-medium" aria-label="Breadcrumb">
                <a href="{{ url('/') }}" class="hover:text-brand transition-colors">Home</a>
                <span class="text-zinc-300">/</span>
                <span class="text-heading font-semibold" aria-current="page">Cutoff Calculator</span>
            </nav>
        </div>

        <!-- 2. Main 2-Column Cutoff Calculator Section -->
        <x-sections.cutoff-calculator />

        <!-- 3. Reusable Bottom CTA Banner (Same as Home & About) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
            <x-ui.cta-banner 
                title="Choose the right College for your future" 
                buttonText="Explore All Colleges"
                :buttonLink="url('/colleges')"
                :image="asset('images/assets/about-cta.png')" 
            />
        </div>

        <!-- 4. Frequently Asked Questions (FAQ) Section Component -->
        <x-sections.faq-section />

    </main>

    <!-- 5. Reusable Footer Component -->
    <x-ui.footer />

</x-layouts.app>

