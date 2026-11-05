<x-layouts.app title="404 - Page Not Found | NextSkill College Admission" :hide-glow="true">

    <!-- 1. Pure White Navigation Bar -->
    <x-ui.navbar />

    <!-- 2. Clean Pure White Background (No Card Box, Seamless Flat Layout) -->
    <main class="bg-white min-h-[calc(100vh-14rem)] flex items-center justify-center py-12 sm:py-16 md:py-20 px-4 sm:px-6 lg:px-8">

        <div class="w-full max-w-2xl mx-auto text-center">
            
            <!-- 404 Illustration Image directly on Pure White -->
            <div class="flex justify-center mb-6 sm:mb-8">
                <img 
                    src="{{ asset('images/assets/404-page.png') }}" 
                    alt="404 Page Not Found" 
                    class="w-full max-w-sm sm:max-w-md md:max-w-lg h-auto object-contain select-none hover:scale-[1.02] transition-transform duration-300"
                    loading="eager"
                />
            </div>

            <!-- OPPS! PAGE NOT FOUND Heading -->
            <h1 class="text-xs sm:text-sm md:text-base font-bold uppercase tracking-[0.25em] text-zinc-700 mb-2">
                OPPS! PAGE NOT FOUND
            </h1>

            <!-- Description -->
            <p class="text-xs sm:text-sm text-zinc-500 max-w-md mx-auto mb-8 font-normal leading-relaxed">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>

            <!-- Reusable Button Components (Primary Brand & Outline) -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
                <x-ui.button 
                    :href="url('/')" 
                    variant="primary" 
                    icon="home"
                >
                    Back to Home
                </x-ui.button>

                <x-ui.button 
                    :href="url('/colleges')" 
                    variant="outline" 
                    icon="compass"
                >
                    Browse Colleges
                </x-ui.button>
            </div>

        </div>

    </main>

    <!-- 3. Reusable 2-Tier Mega Footer Component -->
    <x-ui.footer />

</x-layouts.app>
