@props([
    'activeTab' => 'info'
])

<!-- Sticky Tabs Navigation Bar Component (Visible ONLY on Desktop/Tablet: hidden sm:block) -->
<div class="hidden sm:block sticky top-16 sm:top-20 z-30 bg-white border-b border-border shadow-2xs" id="sticky-tabs-container">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center gap-1 sm:gap-2 overflow-x-auto no-scrollbar text-xs sm:text-sm font-semibold">
            
            <!-- Tab 1: College Info -->
            <button 
                type="button" 
                onclick="switchCollegeTab('info')" 
                id="tab-btn-info"
                class="college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-brand text-brand font-bold flex items-center gap-2 cursor-pointer"
            >
                <i data-lucide="info" class="w-4 h-4"></i>
                <span>College Info</span>
            </button>

            <!-- Tab 2: Courses -->
            <button 
                type="button" 
                onclick="switchCollegeTab('courses')" 
                id="tab-btn-courses"
                class="college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-transparent text-subheading hover:text-heading hover:bg-zinc-100/80 rounded-t-lg flex items-center gap-2 cursor-pointer"
            >
                <i data-lucide="book-open" class="w-4 h-4"></i>
                <span>Courses & Fees</span>
            </button>

            <!-- Tab 3: Reviews (Google Reviews) -->
            <button 
                type="button" 
                onclick="switchCollegeTab('reviews')" 
                id="tab-btn-reviews"
                class="college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-transparent text-subheading hover:text-heading hover:bg-zinc-100/80 rounded-t-lg flex items-center gap-2 cursor-pointer"
            >
                <i data-lucide="star" class="w-4 h-4"></i>
                <span>Google Reviews</span>
            </button>

            <!-- Tab 4: Placements -->
            <button 
                type="button" 
                onclick="switchCollegeTab('placements')" 
                id="tab-btn-placements"
                class="college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-transparent text-subheading hover:text-heading hover:bg-zinc-100/80 rounded-t-lg flex items-center gap-2 cursor-pointer"
            >
                <i data-lucide="briefcase" class="w-4 h-4"></i>
                <span>Placements</span>
            </button>

            <!-- Tab 5: Facilities -->
            <button 
                type="button" 
                onclick="switchCollegeTab('facilities')" 
                id="tab-btn-facilities"
                class="college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-transparent text-subheading hover:text-heading hover:bg-zinc-100/80 rounded-t-lg flex items-center gap-2 cursor-pointer"
            >
                <i data-lucide="building" class="w-4 h-4"></i>
                <span>Facilities</span>
            </button>

        </div>
    </div>
</div>

<!-- ================= MOBILE BOTTOM TASKBAR (FLUSH TO BOTTOM, PURE WHITE BG, 100% WIDTH) ================= -->
<div class="fixed bottom-0 inset-x-0 z-50 sm:hidden bg-white border-t border-border shadow-[0_-4px_20px_rgba(0,0,0,0.06)] pb-[env(safe-area-inset-bottom)]" id="mobile-floating-tabs-bar">
    <div class="flex items-center justify-between w-full px-2 py-1.5">
        
        <!-- Tab 1: Info -->
        <button 
            type="button" 
            onclick="switchCollegeTab('info')" 
            id="m-tab-btn-info"
            class="mobile-float-btn flex-1 py-1.5 px-1 flex flex-col items-center justify-center rounded-xl text-brand font-bold bg-brand/10 transition-all cursor-pointer"
        >
            <i data-lucide="info" class="w-4 h-4 mb-1"></i>
            <span class="text-[10px] tracking-tight leading-none font-semibold">Info</span>
        </button>

        <!-- Tab 2: Courses -->
        <button 
            type="button" 
            onclick="switchCollegeTab('courses')" 
            id="m-tab-btn-courses"
            class="mobile-float-btn flex-1 py-1.5 px-1 flex flex-col items-center justify-center rounded-xl text-zinc-500 font-medium hover:text-heading transition-all cursor-pointer"
        >
            <i data-lucide="book-open" class="w-4 h-4 mb-1"></i>
            <span class="text-[10px] tracking-tight leading-none font-medium">Courses</span>
        </button>

        <!-- Tab 3: Reviews -->
        <button 
            type="button" 
            onclick="switchCollegeTab('reviews')" 
            id="m-tab-btn-reviews"
            class="mobile-float-btn flex-1 py-1.5 px-1 flex flex-col items-center justify-center rounded-xl text-zinc-500 font-medium hover:text-heading transition-all cursor-pointer"
        >
            <i data-lucide="star" class="w-4 h-4 mb-1"></i>
            <span class="text-[10px] tracking-tight leading-none font-medium">Reviews</span>
        </button>

        <!-- Tab 4: Placements -->
        <button 
            type="button" 
            onclick="switchCollegeTab('placements')" 
            id="m-tab-btn-placements"
            class="mobile-float-btn flex-1 py-1.5 px-1 flex flex-col items-center justify-center rounded-xl text-zinc-500 font-medium hover:text-heading transition-all cursor-pointer"
        >
            <i data-lucide="briefcase" class="w-4 h-4 mb-1"></i>
            <span class="text-[10px] tracking-tight leading-none font-medium">Placements</span>
        </button>

        <!-- Tab 5: Facilities -->
        <button 
            type="button" 
            onclick="switchCollegeTab('facilities')" 
            id="m-tab-btn-facilities"
            class="mobile-float-btn flex-1 py-1.5 px-1 flex flex-col items-center justify-center rounded-xl text-zinc-500 font-medium hover:text-heading transition-all cursor-pointer"
        >
            <i data-lucide="building" class="w-4 h-4 mb-1"></i>
            <span class="text-[10px] tracking-tight leading-none font-medium">Campus</span>
        </button>

    </div>
</div>

<script>
    function switchCollegeTab(tabId) {
        // Hide all tab panes
        document.querySelectorAll('.college-tab-pane').forEach(pane => {
            pane.classList.add('hidden');
        });

        // Show active tab pane
        const activePane = document.getElementById('pane-' + tabId);
        if (activePane) {
            activePane.classList.remove('hidden');
        }

        // Reset all top button styles
        document.querySelectorAll('.college-tab-btn').forEach(btn => {
            btn.className = "college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-transparent text-subheading hover:text-heading hover:bg-zinc-100/80 rounded-t-lg flex items-center gap-2 cursor-pointer";
        });

        // Highlight selected top button
        const activeBtn = document.getElementById('tab-btn-' + tabId);
        if (activeBtn) {
            activeBtn.className = "college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-brand text-brand font-bold flex items-center gap-2 cursor-pointer";
        }

        // Reset all mobile floating buttons
        document.querySelectorAll('.mobile-float-btn').forEach(btn => {
            btn.className = "mobile-float-btn flex-1 py-1.5 px-1 flex flex-col items-center justify-center rounded-xl text-zinc-500 font-medium hover:text-heading transition-all cursor-pointer";
        });

        // Highlight selected mobile floating button
        const activeMobileBtn = document.getElementById('m-tab-btn-' + tabId);
        if (activeMobileBtn) {
            activeMobileBtn.className = "mobile-float-btn flex-1 py-1.5 px-1 flex flex-col items-center justify-center rounded-xl text-brand font-bold bg-brand/10 transition-all cursor-pointer";
        }

        // Update URL hash without jump
        if (history.pushState) {
            history.pushState(null, null, '#' + tabId);
        }
    }

    // Auto-activate tab from URL hash on load
    document.addEventListener('DOMContentLoaded', () => {
        const hash = window.location.hash.replace('#', '');
        if (hash && document.getElementById('pane-' + hash)) {
            switchCollegeTab(hash);
        }
    });
</script>

