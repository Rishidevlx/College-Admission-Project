<x-layouts.app title="PSG College of Technology - Profile, Courses, Placements & Reviews" :hide-glow="true">

    <!-- 1. Fixed Pure White Navigation Bar -->
    <x-ui.navbar />

    <!-- 2. College Hero Header Component (Cover Banner, Badges, Name, Fast Action Buttons) -->
    <x-college.hero-header />

    <!-- 3. Sticky Tab Navigation Bar Component -->
    <x-college.tabs-navigation />

    <!-- 4. Main 2-Column Content Layout (Left: Tab Panes, Right: Sticky Sidebar) -->
    <main class="py-8 sm:py-12 pb-24 sm:pb-12 bg-white min-h-[700px] relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative">
                
                <!-- Left 8 Columns: Dynamic Modular Tab Panes -->
                <div class="lg:col-span-8 space-y-6">
                    <!-- Tab 1: College Info -->
                    <x-college.tabs.tab-info />

                    <!-- Tab 2: Courses & Fee Structure -->
                    <x-college.tabs.tab-courses />

                    <!-- Tab 3: Google Reviews -->
                    <x-college.tabs.tab-reviews />

                    <!-- Tab 4: Placements & Recruiters -->
                    <x-college.tabs.tab-placements />

                    <!-- Tab 5: Facilities & Campus -->
                    <x-college.tabs.tab-facilities />
                </div>

                <!-- Right 4 Columns: Sticky Sidebar (Anchored neatly within parent column, stopping at bottom of main) -->
                <div class="lg:col-span-4 sticky top-36 z-20 self-start">
                    <x-college.detail-sidebar />
                </div>

            </div>
        </div>
    </main>

    <!-- 5. Reusable Footer -->
    <x-ui.footer />

</x-layouts.app>

