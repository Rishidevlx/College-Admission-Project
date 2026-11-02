<!-- Hero Header Section for College Finder (Centered Matching Home Typography, Synchronized Button Height) -->
<section class="relative pt-2 sm:pt-4 pb-10 sm:pb-16 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        
        <!-- Main Title matching Home Hero Font Size & Leading with Two-Line Split & Blinking Cursor -->
        <div class="max-w-4xl mx-auto">
            <h1 class="text-[23px] sm:text-3xl md:text-4xl lg:text-[52px] font-bold text-heading tracking-tight leading-[1.24] sm:leading-[1.18] max-w-4xl mx-auto">
                <span>Explore Top Colleges & Courses</span>
                <span class="block mt-1 sm:mt-2">
                    <span class="text-heading font-bold">in </span><span class="text-brand">Tamil Nadu</span><span class="inline-block w-[3px] sm:w-[4px] lg:w-[5px] h-[0.82em] bg-brand ml-1.5 sm:ml-2 align-middle animate-cursor-blink"></span>
                </span>
            </h1>

            <!-- Subheading matching Home Hero Size & Tone -->
            <p class="mt-3.5 sm:mt-5 text-[14px] sm:text-lg lg:text-xl font-medium text-subheading max-w-2xl mx-auto leading-relaxed px-2 sm:px-0">
                Compare verified engineering, arts, science & medical colleges with cutoffs, annual fees, and direct admission counselling.
            </p>
        </div>

        <!-- Integrated Search Area: Stream Selector on Left + Search Bar on Right (Exact Matching Height h-[52px] sm:h-[60px]) -->
        <div class="mt-8 sm:mt-10 max-w-4xl mx-auto flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-2.5 sm:gap-3 px-2 sm:px-0">
            
            <!-- 1. Left: Stream Selector Button with Pointed Dropdown Menu (Matching Search Bar Height) -->
            <div id="stream-selector-container" class="relative z-50 flex-shrink-0 text-left">
                <button 
                    type="button" 
                    id="stream-dropdown-trigger"
                    onclick="toggleStreamDropdown(event)"
                    class="w-full sm:w-auto inline-flex items-center justify-between sm:justify-center gap-2.5 px-5 sm:px-6 h-[52px] sm:h-[60px] bg-white border border-brand hover:border-brand rounded-xl shadow-[0_4px_24px_rgba(240,80,35,0.12)] hover:shadow-[0_6px_30px_rgba(240,80,35,0.18)] text-heading hover:text-brand transition-all cursor-pointer text-xs sm:text-sm font-semibold flex-shrink-0 group relative z-50"
                >
                    <div class="flex items-center gap-2">
                        <i data-lucide="graduation-cap" class="w-4 h-4 text-brand"></i>
                        <span id="stream-preference-btn-text" class="whitespace-nowrap">Select Stream</span>
                    </div>
                    <i id="stream-dropdown-chevron" data-lucide="chevron-down" class="w-3.5 h-3.5 text-muted group-hover:text-brand transition-transform duration-200"></i>
                </button>

                <!-- Embedded Pointed Dropdown Popover (Matches Screenshot Reference) -->
                <x-ui.course-preference-modal />
            </div>

            <!-- 2. Right: Search Bar Component (Takes Remaining Width, exact h-[52px] sm:h-[60px]) -->
            <div class="flex-1 max-w-2xl">
                <x-ui.search-bar 
                    action="javascript:void(0)"
                    placeholder="Search by college name, city (e.g. Coimbatore, Chennai)..."
                    input-id="finder-search-input"
                    button-text="Find Colleges"
                    class="!max-w-none !mx-0 !px-0"
                />
            </div>

        </div>

        <!-- Quick Filter Chips (Centered) -->
        <div class="mt-5 flex flex-wrap items-center justify-center gap-2 text-xs">
            <span class="text-muted font-medium">Quick Filters:</span>
            <button type="button" onclick="quickFilterDistrict('Chennai')" class="quick-chip px-3 py-1 rounded-full border border-border bg-white hover:border-brand hover:text-brand font-medium text-subheading transition-all">Chennai</button>
            <button type="button" onclick="quickFilterDistrict('Coimbatore')" class="quick-chip px-3 py-1 rounded-full border border-border bg-white hover:border-brand hover:text-brand font-medium text-subheading transition-all">Coimbatore</button>
            <button type="button" onclick="quickFilterDistrict('Madurai')" class="quick-chip px-3 py-1 rounded-full border border-border bg-white hover:border-brand hover:text-brand font-medium text-subheading transition-all">Madurai</button>
            <button type="button" onclick="quickFilterType('Autonomous')" class="quick-chip px-3 py-1 rounded-full border border-border bg-white hover:border-brand hover:text-brand font-medium text-subheading transition-all">Autonomous</button>
            <button type="button" onclick="quickFilterStream('Engineering')" class="quick-chip px-3 py-1 rounded-full border border-border bg-white hover:border-brand hover:text-brand font-medium text-subheading transition-all">Engineering</button>
            <button type="button" onclick="resetAllFilters()" class="text-brand font-semibold hover:underline ml-1">Reset All</button>
        </div>

    </div>
</section>
