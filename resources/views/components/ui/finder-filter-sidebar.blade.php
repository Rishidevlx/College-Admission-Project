<!-- Left Multi-Faceted Filter Sidebar Component (Collapsible Accordion with Visible Sticky Header & Custom Scrollbar) -->
<aside class="w-full bg-white rounded-2xl border border-border p-5 shadow-xs max-h-[calc(100vh-7rem)] overflow-y-auto custom-scrollbar">
    
    <!-- Filter Header (Always Visible at Top of Card) -->
    <div class="flex items-center justify-between pb-4 border-b border-border/70 sticky top-0 bg-white z-10">
        <div class="flex items-center gap-2 font-bold text-heading text-[15px]">
            <i data-lucide="sliders-horizontal" class="w-4 h-4 text-brand"></i>
            <span>Filters</span>
        </div>
        <button 
            type="button" 
            onclick="resetAllFilters()"
            class="text-xs font-semibold text-brand hover:underline cursor-pointer"
        >
            Clear All
        </button>
    </div>

    <!-- Active Filters Display Pill Bar (Dynamic) -->
    <div id="active-filter-tags" class="pt-3 pb-2 hidden flex-wrap gap-1.5 border-b border-border/70">
        <!-- Rendered via JS -->
    </div>

    <!-- Filter Group 1: Stream & Discipline (OPEN BY DEFAULT) -->
    <div class="py-3.5 border-b border-border/70">
        <button 
            type="button" 
            onclick="toggleFilterAccordion('group-stream')" 
            class="w-full flex items-center justify-between text-left cursor-pointer group select-none py-1"
        >
            <div class="flex items-center gap-2">
                <span class="font-bold text-heading text-[13px] uppercase tracking-wider group-hover:text-brand transition-colors">
                    Stream / Discipline
                </span>
                <span class="text-xs text-muted font-normal">(5)</span>
            </div>
            <i id="chevron-group-stream" data-lucide="chevron-up" class="w-4 h-4 text-muted group-hover:text-brand transition-transform duration-200"></i>
        </button>

        <div id="body-group-stream" class="space-y-2 text-[13px] text-subheading pt-3">
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
    <div class="py-3.5 border-b border-border/70">
        <button 
            type="button" 
            onclick="toggleFilterAccordion('group-district')" 
            class="w-full flex items-center justify-between text-left cursor-pointer group select-none py-1"
        >
            <div class="flex items-center gap-2">
                <span class="font-bold text-heading text-[13px] uppercase tracking-wider group-hover:text-brand transition-colors">
                    District / Location
                </span>
                <span class="text-xs text-muted font-normal">(6)</span>
            </div>
            <i id="chevron-group-district" data-lucide="chevron-down" class="w-4 h-4 text-muted group-hover:text-brand transition-transform duration-200"></i>
        </button>

        <div id="body-group-district" class="hidden space-y-2 text-[13px] text-subheading pt-3">
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
    <div class="py-3.5 border-b border-border/70">
        <button 
            type="button" 
            onclick="toggleFilterAccordion('group-type')" 
            class="w-full flex items-center justify-between text-left cursor-pointer group select-none py-1"
        >
            <div class="flex items-center gap-2">
                <span class="font-bold text-heading text-[13px] uppercase tracking-wider group-hover:text-brand transition-colors">
                    College Type
                </span>
                <span class="text-xs text-muted font-normal">(3)</span>
            </div>
            <i id="chevron-group-type" data-lucide="chevron-down" class="w-4 h-4 text-muted group-hover:text-brand transition-transform duration-200"></i>
        </button>

        <div id="body-group-type" class="hidden space-y-2 text-[13px] text-subheading pt-3">
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
    <div class="py-3.5">
        <button 
            type="button" 
            onclick="toggleFilterAccordion('group-fees')" 
            class="w-full flex items-center justify-between text-left cursor-pointer group select-none py-1"
        >
            <div class="flex items-center gap-2">
                <span class="font-bold text-heading text-[13px] uppercase tracking-wider group-hover:text-brand transition-colors">
                    Annual Fees Range
                </span>
                <span class="text-xs text-muted font-normal">(3)</span>
            </div>
            <i id="chevron-group-fees" data-lucide="chevron-down" class="w-4 h-4 text-muted group-hover:text-brand transition-transform duration-200"></i>
        </button>

        <div id="body-group-fees" class="hidden space-y-2 text-[13px] text-subheading pt-3">
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

</aside>

<!-- Filter Accordion Toggle Script -->
<script>
    function toggleFilterAccordion(groupId) {
        const body = document.getElementById('body-' + groupId);
        const chevron = document.getElementById('chevron-' + groupId);

        if (!body || !chevron) return;

        const isHidden = body.classList.contains('hidden');

        if (isHidden) {
            body.classList.remove('hidden');
            chevron.setAttribute('data-lucide', 'chevron-up');
        } else {
            body.classList.add('hidden');
            chevron.setAttribute('data-lucide', 'chevron-down');
        }

        // Re-render Lucide icon
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }
</script>
