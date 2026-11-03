<x-layouts.app title="Contact Us - NextSkill College Admission Portal" :hide-glow="true">

    <!-- 1. Fixed Pure White Navigation Bar -->
    <x-ui.navbar />

    <main class="bg-white min-h-[calc(100vh-14rem)]">

        <!-- 2. Main Contact Split Section (Left Info + Right Hero Form) -->
        <x-sections.contact-main />

        <!-- 3. 3 Quick Channel Action Cards (Helpline, WhatsApp, Timings) -->
        <x-sections.contact-cards />

        <!-- 4. Interactive Office Location & Google Maps -->
        <x-sections.contact-map />

        <!-- 5. Reusable Bottom CTA Banner Component (Same as Home & About) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
            <x-ui.cta-banner 
                title="Choose the right College for your future" 
                buttonText="Explore Colleges"
                :buttonLink="url('/colleges')"
                :image="asset('images/assets/about-cta.png')" 
            />
        </div>

    </main>

    <!-- 6. Reusable Footer Component -->
    <x-ui.footer />

</x-layouts.app>

