<!-- Left Multi-Faceted Filter Sidebar Component (Collegedunia & Nextskill Style) -->
<aside class="w-full bg-white rounded-2xl border border-border p-5 shadow-xs">
    
    <!-- Filter Header -->
    <div class="flex items-center justify-between pb-4 border-b border-border/70">
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

    <!-- Filter Group 1: Stream & Discipline -->
    <div class="py-4 border-b border-border/70">
        <h4 class="font-bold text-heading text-[13px] uppercase tracking-wider mb-3 flex items-center justify-between">
            <span>Stream / Discipline</span>
            <span class="text-xs text-muted font-normal">5</span>
        </h4>
        <div class="space-y-2 text-[13px] text-subheading">
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

    <!-- Filter Group 2: District / City -->
    <div class="py-4 border-b border-border/70">
        <h4 class="font-bold text-heading text-[13px] uppercase tracking-wider mb-3 flex items-center justify-between">
            <span>District / Location</span>
            <span class="text-xs text-muted font-normal">6</span>
        </h4>
        <div class="space-y-2 text-[13px] text-subheading">
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

    <!-- Filter Group 3: College Ownership & Accreditation -->
    <div class="py-4 border-b border-border/70">
        <h4 class="font-bold text-heading text-[13px] uppercase tracking-wider mb-3">
            College Type
        </h4>
        <div class="space-y-2 text-[13px] text-subheading">
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

    <!-- Filter Group 4: Annual Fees Range -->
    <div class="pt-4">
        <h4 class="font-bold text-heading text-[13px] uppercase tracking-wider mb-3">
            Annual Fees Range
        </h4>
        <div class="space-y-2 text-[13px] text-subheading">
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

