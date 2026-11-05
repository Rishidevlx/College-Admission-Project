@props([
    'activeTab' => 'info'
])

<!-- Sticky Tabs Navigation Bar Component (Floating Clean Sticky with Bottom Line & Centered System View) -->
<div class="sticky top-16 sm:top-20 z-30 bg-white border-b border-border shadow-2xs" id="sticky-tabs-container">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-start sm:justify-center gap-1 sm:gap-2 overflow-x-auto no-scrollbar text-xs sm:text-sm font-semibold">
            
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

            <!-- Tab 6: FAQs -->
            <button 
                type="button" 
                onclick="switchCollegeTab('faq')" 
                id="tab-btn-faq"
                class="college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-transparent text-subheading hover:text-heading hover:bg-zinc-100/80 rounded-t-lg flex items-center gap-2 cursor-pointer"
            >
                <i data-lucide="help-circle" class="w-4 h-4"></i>
                <span>FAQs</span>
            </button>

        </div>
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

        // Reset all button styles to normal border-b-2 border-transparent with light grey hover effect
        document.querySelectorAll('.college-tab-btn').forEach(btn => {
            btn.className = "college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-transparent text-subheading hover:text-heading hover:bg-zinc-100/80 rounded-t-lg flex items-center gap-2 cursor-pointer";
        });

        // Highlight selected button with bottom underline only (touching container bottom line)
        const activeBtn = document.getElementById('tab-btn-' + tabId);
        if (activeBtn) {
            activeBtn.className = "college-tab-btn py-3.5 px-3.5 sm:px-4 whitespace-nowrap transition-all border-b-2 border-brand text-brand font-bold flex items-center gap-2 cursor-pointer";
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

