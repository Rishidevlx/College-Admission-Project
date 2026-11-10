<!-- Left Multi-Faceted Filter Sidebar Component (Isolated Fixed Header + Separate Scrollable Body) -->
<aside class="w-full bg-white rounded-t-3xl sm:rounded-2xl lg:rounded-2xl border-0 lg:border lg:border-border shadow-none lg:shadow-xs max-h-[85vh] lg:max-h-[calc(100vh-7rem)] flex flex-col overflow-hidden">
    
    <!-- Filter Header (Strictly Fixed at Top, Completely Isolated from Scrollable Area) -->
    <div class="px-5 py-4 border-b border-border/70 bg-white flex items-center justify-between shrink-0 z-20">
        <div class="flex items-center gap-2 font-bold text-heading text-[15px]">
            <i data-lucide="sliders-horizontal" class="w-4 h-4 text-brand"></i>
            <span>Filters</span>
        </div>
        <div class="flex items-center gap-3">
            <button 
                type="button" 
                onclick="resetAllFilters()"
                class="text-xs font-semibold text-brand hover:underline cursor-pointer"
            >
                Clear All
            </button>
            <!-- Mobile Close (X) Button (Visible only on < lg) -->
            <button 
                type="button" 
                onclick="toggleMobileFilters()" 
                class="lg:hidden w-7 h-7 rounded-lg bg-zinc-100 hover:bg-zinc-200 flex items-center justify-center text-heading transition-colors cursor-pointer"
                title="Close Filters"
            >
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
    </div>

    <!-- Scrollable Filter Body Container (Content Scrolls Safely Inside Here Without Bleeding Above Header) -->
    <div class="flex-1 overflow-y-auto px-5 py-2 custom-scrollbar">

        <!-- Active Filters Display Pill Bar (Dynamic) -->
        <div id="active-filter-tags" class="py-2.5 hidden flex-wrap gap-1.5 border-b border-border/70">
            <!-- Rendered via JS -->
        </div>

    <!-- Filter Group 1: Stream & Discipline (OPEN BY DEFAULT) -->
    <div class="filter-group py-3.5 border-b border-border/70">
        <button 
            type="button" 
            onclick="toggleFilterAccordion(this)" 
            class="w-full flex items-center justify-between text-left cursor-pointer group select-none py-1"
        >
            <div class="flex items-center gap-2">
                <span class="font-bold text-heading text-[13px] uppercase tracking-wider group-hover:text-brand transition-colors">
                    Stream / Discipline
                </span>
                <span class="text-xs text-muted font-normal">(5)</span>
            </div>
            <i data-lucide="chevron-up" class="filter-chevron w-4 h-4 text-muted group-hover:text-brand transition-transform duration-200"></i>
        </button>

        <div class="filter-group-body space-y-2 text-[13px] text-subheading pt-3">
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="stream" value="Engineering" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Engineering</span>
                </div>
                <span class="text-xs text-muted">18</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="stream" value="Management" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Management</span>
                </div>
                <span class="text-xs text-muted">12</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="stream" value="Science" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Science & IT</span>
                </div>
                <span class="text-xs text-muted">14</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="stream" value="Commerce" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Commerce & Arts</span>
                </div>
                <span class="text-xs text-muted">10</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="stream" value="Medical" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Medical & Health</span>
                </div>
                <span class="text-xs text-muted">6</span>
            </label>
        </div>
    </div>

    <!-- Filter Group 2: District / Location (COLLAPSED BY DEFAULT) -->
    <div class="filter-group py-3.5 border-b border-border/70">
        <button 
            type="button" 
            onclick="toggleFilterAccordion(this)" 
            class="w-full flex items-center justify-between text-left cursor-pointer group select-none py-1"
        >
            <div class="flex items-center gap-2">
                <span class="font-bold text-heading text-[13px] uppercase tracking-wider group-hover:text-brand transition-colors">
                    District / Location
                </span>
                <span class="text-xs text-muted font-normal">(6)</span>
            </div>
            <i data-lucide="chevron-down" class="filter-chevron w-4 h-4 text-muted group-hover:text-brand transition-transform duration-200"></i>
        </button>

        <div class="filter-group-body hidden space-y-2 text-[13px] text-subheading pt-3">
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="city" value="Chennai" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Chennai</span>
                </div>
                <span class="text-xs text-muted">15</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="city" value="Coimbatore" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Coimbatore</span>
                </div>
                <span class="text-xs text-muted">14</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="city" value="Madurai" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Madurai</span>
                </div>
                <span class="text-xs text-muted">8</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="city" value="Trichy" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Trichy</span>
                </div>
                <span class="text-xs text-muted">6</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="city" value="Salem" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Salem</span>
                </div>
                <span class="text-xs text-muted">5</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="city" value="Vellore" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Vellore</span>
                </div>
                <span class="text-xs text-muted">4</span>
            </label>
        </div>
    </div>

    <!-- Filter Group 3: College Type (COLLAPSED BY DEFAULT) -->
    <div class="filter-group py-3.5 border-b border-border/70">
        <button 
            type="button" 
            onclick="toggleFilterAccordion(this)" 
            class="w-full flex items-center justify-between text-left cursor-pointer group select-none py-1"
        >
            <div class="flex items-center gap-2">
                <span class="font-bold text-heading text-[13px] uppercase tracking-wider group-hover:text-brand transition-colors">
                    College Type
                </span>
                <span class="text-xs text-muted font-normal">(3)</span>
            </div>
            <i data-lucide="chevron-down" class="filter-chevron w-4 h-4 text-muted group-hover:text-brand transition-transform duration-200"></i>
        </button>

        <div class="filter-group-body hidden space-y-2 text-[13px] text-subheading pt-3">
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="type" value="Autonomous" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Autonomous</span>
                </div>
                <span class="text-xs text-muted">22</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="type" value="Govt & Aided" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Govt & Aided</span>
                </div>
                <span class="text-xs text-muted">8</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="type" value="Anna University" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Anna Univ Affiliated</span>
                </div>
                <span class="text-xs text-muted">25</span>
            </label>
        </div>
    </div>

    <!-- Filter Group 4: Annual Fees Range (COLLAPSED BY DEFAULT) -->
    <div class="filter-group py-3.5">
        <button 
            type="button" 
            onclick="toggleFilterAccordion(this)" 
            class="w-full flex items-center justify-between text-left cursor-pointer group select-none py-1"
        >
            <div class="flex items-center gap-2">
                <span class="font-bold text-heading text-[13px] uppercase tracking-wider group-hover:text-brand transition-colors">
                    Annual Fees Range
                </span>
                <span class="text-xs text-muted font-normal">(3)</span>
            </div>
            <i data-lucide="chevron-down" class="filter-chevron w-4 h-4 text-muted group-hover:text-brand transition-transform duration-200"></i>
        </button>

        <div class="filter-group-body hidden space-y-2 text-[13px] text-subheading pt-3">
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="fee" value="< 50k" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">Under ₹50K / Yr</span>
                </div>
                <span class="text-xs text-muted">6</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="fee" value="50k-1.5L" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">₹50K - ₹1.5L / Yr</span>
                </div>
                <span class="text-xs text-muted">18</span>
            </label>
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="fee" value="1.5L-3L" onchange="applySidebarFilters()" class="w-4 h-4 rounded text-brand focus:ring-brand/30 border-border accent-brand" />
                    <span class="group-hover:text-brand transition-colors">₹1.5L - ₹3.0L / Yr</span>
                </div>
                <span class="text-xs text-muted">12</span>
            </label>
        </div>
    </div>

    </div>

</aside>

<!-- Filter Accordion Toggle Script (Locally Scoped to Avoid Desktop/Mobile ID Duplication) -->
<script>
    function toggleFilterAccordion(btn) {
        if (!btn) return;
        const group = btn.closest('.filter-group');
        if (!group) return;

        const body = group.querySelector('.filter-group-body');
        const chevron = group.querySelector('.filter-chevron');

        if (!body) return;

        const isHidden = body.classList.contains('hidden');

        if (isHidden) {
            body.classList.remove('hidden');
            if (chevron) {
                chevron.setAttribute('data-lucide', 'chevron-up');
            }
        } else {
            body.classList.add('hidden');
            if (chevron) {
                chevron.setAttribute('data-lucide', 'chevron-down');
            }
        }

        // Re-render Lucide icon
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }
</script>
