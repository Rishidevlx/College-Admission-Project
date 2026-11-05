<!-- Click-Outside Transparent Backdrop: Dismisses dropdown when clicking anywhere outside without freezing the page scroll -->
<div 
    id="stream-freeze-backdrop" 
    onclick="closeStreamDropdown()" 
    class="hidden fixed inset-0 z-40 transition-opacity duration-200 cursor-default"
    aria-hidden="true"
></div>

<!-- Select Your Study Preference Pointed Dropdown Popover (Responsive Scrollable Popover) -->
<div 
    id="stream-dropdown-panel" 
    class="hidden absolute top-full left-1/2 -translate-x-1/2 sm:left-0 sm:translate-x-0 mt-3.5 w-[calc(100vw-2rem)] sm:w-[580px] md:w-[640px] max-w-[calc(100vw-2rem)] bg-white rounded-2xl border border-zinc-200/90 z-50 transition-all duration-200 text-left shadow-[0_25px_60px_-15px_rgba(0,0,0,0.3),0_10px_20px_-5px_rgba(0,0,0,0.1)]"
    role="region" 
    aria-label="Select Your Study Preference"
>
    <!-- Upward Pointing Edge Triangle (Arrow pointing directly to Select Stream button) -->
    <div class="absolute -top-2 left-1/2 -translate-x-1/2 sm:left-12 sm:translate-x-0 w-4 h-4 bg-white border-t border-l border-zinc-200/90 transform rotate-45 z-20"></div>

    <!-- Inner Popover Window (Opaque pure white container with responsive max-height) -->
    <div class="relative z-10 bg-white rounded-2xl overflow-hidden flex flex-col max-h-[calc(100vh-140px)] sm:max-h-[520px]">
        
        <!-- Header -->
        <div class="flex items-center justify-between px-4 sm:px-6 py-3 sm:py-4 border-b border-border/70 bg-white sticky top-0 z-10 gap-2">
            <h3 class="text-sm sm:text-lg font-bold text-heading whitespace-nowrap truncate">
                Study Preference
            </h3>
            
            <div class="flex items-center gap-2 flex-shrink-0">
                <!-- Clear Button (Visible when a stream is selected) -->
                <button 
                    type="button" 
                    id="clear-stream-btn"
                    onclick="clearSelectedStream()" 
                    class="hidden text-[11px] sm:text-xs font-semibold text-brand hover:underline px-2 py-1 rounded bg-brand/5 hover:bg-brand/10 transition-colors cursor-pointer whitespace-nowrap"
                >
                    Clear
                </button>

                <!-- Close Button: 'X' icon button -->
                <button 
                    type="button" 
                    onclick="closeStreamDropdown()"
                    class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-zinc-100 hover:bg-zinc-200/80 text-heading hover:text-brand flex items-center justify-center transition-colors cursor-pointer flex-shrink-0"
                    title="Close"
                    aria-label="Close study preference modal"
                >
                    <i data-lucide="x" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                </button>
            </div>
        </div>

        <!-- Course Search Input Bar -->
        <div class="p-4 sm:p-5 border-b border-border/70 bg-zinc-50/70">
            <div class="relative">
                <i data-lucide="search" class="w-4 h-4 text-muted absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                <input 
                    type="text" 
                    id="course-dropdown-search"
                    placeholder="Search and Select Your Course (e.g. B.Tech, MBA, BCA)..." 
                    class="w-full pl-10 pr-4 py-2.5 text-xs sm:text-sm rounded-xl border border-border bg-white text-heading placeholder-muted focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all"
                    oninput="filterDropdownCourses(this.value)"
                />
            </div>
        </div>

        <!-- Stream & Courses Scrollable List -->
        <div class="p-5 sm:p-6 overflow-y-auto space-y-5 flex-1 text-subheading bg-white custom-scrollbar" id="dropdown-streams-container">
            
            <!-- Stream 1: Engineering -->
            <div class="stream-group" data-stream="engineering">
                <div class="flex items-center gap-2.5 font-bold text-heading text-[14px] sm:text-[15px] mb-2.5">
                    <span class="w-6 h-6 rounded-md bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                        <i data-lucide="cpu" class="w-3.5 h-3.5"></i>
                    </span>
                    <span>Engineering</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <button type="button" onclick="selectCourse('BE / B.Tech', 'Engineering')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">BE / B.Tech</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('Diploma in Engg', 'Engineering')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">Diploma in Engg</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('ME / M.Tech', 'Engineering')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">ME / M.Tech</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                </div>
            </div>

            <!-- Stream 2: Management -->
            <div class="stream-group" data-stream="management">
                <div class="flex items-center gap-2.5 font-bold text-heading text-[14px] sm:text-[15px] mb-2.5">
                    <span class="w-6 h-6 rounded-md bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                        <i data-lucide="briefcase" class="w-3.5 h-3.5"></i>
                    </span>
                    <span>Management</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <button type="button" onclick="selectCourse('MBA / PGDM', 'Management')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">MBA / PGDM</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('BBA / BMS', 'Management')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">BBA / BMS</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('Executive MBA', 'Management')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">Executive MBA</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                </div>
            </div>

            <!-- Stream 3: Commerce -->
            <div class="stream-group" data-stream="commerce">
                <div class="flex items-center gap-2.5 font-bold text-heading text-[14px] sm:text-[15px] mb-2.5">
                    <span class="w-6 h-6 rounded-md bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                        <i data-lucide="coins" class="w-3.5 h-3.5"></i>
                    </span>
                    <span>Commerce</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <button type="button" onclick="selectCourse('B.Com (General)', 'Commerce')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">B.Com</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('B.Com (CA & IT)', 'Commerce')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">B.Com (CA / AF)</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('M.Com', 'Commerce')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">M.Com</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                </div>
            </div>

            <!-- Stream 4: Arts & Humanities -->
            <div class="stream-group" data-stream="arts">
                <div class="flex items-center gap-2.5 font-bold text-heading text-[14px] sm:text-[15px] mb-2.5">
                    <span class="w-6 h-6 rounded-md bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                        <i data-lucide="palette" class="w-3.5 h-3.5"></i>
                    </span>
                    <span>Arts & Media</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <button type="button" onclick="selectCourse('BA (English / Tamil)', 'Arts')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">BA Literature</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('B.Des / Visual Comm', 'Arts')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">B.Des / VisCom</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('MA / M.Sc', 'Arts')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">Post Graduation</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                </div>
            </div>

            <!-- Stream 5: Computer Applications & Science -->
            <div class="stream-group" data-stream="science">
                <div class="flex items-center gap-2.5 font-bold text-heading text-[14px] sm:text-[15px] mb-2.5">
                    <span class="w-6 h-6 rounded-md bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                        <i data-lucide="laptop" class="w-3.5 h-3.5"></i>
                    </span>
                    <span>Science & IT</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <button type="button" onclick="selectCourse('BCA', 'Science')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">BCA</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('B.Sc Computer Science', 'Science')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">B.Sc CS / Data</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('MCA', 'Science')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">MCA</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                </div>
            </div>

            <!-- Stream 6: Medical & Healthcare -->
            <div class="stream-group" data-stream="medical">
                <div class="flex items-center gap-2.5 font-bold text-heading text-[14px] sm:text-[15px] mb-2.5">
                    <span class="w-6 h-6 rounded-md bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                        <i data-lucide="heart-pulse" class="w-3.5 h-3.5"></i>
                    </span>
                    <span>Medical & Healthcare</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <button type="button" onclick="selectCourse('MBBS / BDS', 'Medical')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">MBBS / BDS</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('B.Pharm', 'Medical')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">B.Pharm</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                    <button type="button" onclick="selectCourse('B.Sc Nursing', 'Medical')" class="course-chip text-left px-3.5 py-2.5 rounded-xl border border-border/80 hover:border-brand hover:bg-brand/5 bg-white text-[12px] sm:text-[13px] font-semibold text-heading hover:text-brand flex items-center justify-between group transition-all cursor-pointer shadow-2xs">
                        <span class="truncate">B.Sc Nursing</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-muted group-hover:text-brand group-hover:translate-x-0.5 transition-all flex-shrink-0 ml-1.5"></i>
                    </button>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Dropdown Control Scripts -->
<script>
    function toggleStreamDropdown(event) {
        if (event) event.stopPropagation();
        const panel = document.getElementById('stream-dropdown-panel');
        if (!panel) return;

        const isHidden = panel.classList.contains('hidden');
        if (isHidden) {
            openStreamDropdown();
        } else {
            closeStreamDropdown();
        }
    }

    function openStreamDropdown() {
        const panel = document.getElementById('stream-dropdown-panel');
        const chevron = document.getElementById('stream-dropdown-chevron');
        const backdrop = document.getElementById('stream-freeze-backdrop');

        if (panel) {
            panel.classList.remove('hidden');
            if (chevron) chevron.classList.add('rotate-180');
            if (backdrop) backdrop.classList.remove('hidden');
            // Kept natural body scrolling enabled so users can scroll the page freely
            document.body.style.overflow = '';

            const searchInput = document.getElementById('course-dropdown-search');
            if (searchInput) {
                searchInput.value = '';
                filterDropdownCourses('');
                setTimeout(() => searchInput.focus(), 60);
            }
        }
    }

    function closeStreamDropdown() {
        const panel = document.getElementById('stream-dropdown-panel');
        const chevron = document.getElementById('stream-dropdown-chevron');
        const backdrop = document.getElementById('stream-freeze-backdrop');

        if (panel) {
            panel.classList.add('hidden');
            if (chevron) chevron.classList.remove('rotate-180');
            if (backdrop) backdrop.classList.add('hidden');
            document.body.style.overflow = '';
        }
    }

    // Close on Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeStreamDropdown();
    });

    function selectCourse(courseName, streamName) {
        const triggerBtn = document.getElementById('stream-preference-btn-text');
        if (triggerBtn) {
            triggerBtn.textContent = courseName;
        }

        const clearBtn = document.getElementById('clear-stream-btn');
        if (clearBtn) {
            clearBtn.classList.remove('hidden');
        }

        if (typeof window.applyStreamOrCourseFilter === 'function') {
            window.applyStreamOrCourseFilter(courseName, streamName);
        }

        closeStreamDropdown();
    }

    function clearSelectedStream() {
        const triggerBtn = document.getElementById('stream-preference-btn-text');
        if (triggerBtn) {
            triggerBtn.textContent = 'Select Stream';
        }

        const clearBtn = document.getElementById('clear-stream-btn');
        if (clearBtn) {
            clearBtn.classList.add('hidden');
        }

        // Reset search input if it held course name
        const searchInput = document.getElementById('finder-search-input');
        if (searchInput) {
            searchInput.value = '';
        }

        // Uncheck stream checkboxes in sidebar
        document.querySelectorAll('input[name="stream"]').forEach(cb => {
            cb.checked = false;
        });

        if (typeof window.applySidebarFilters === 'function') {
            window.applySidebarFilters();
        }

        closeStreamDropdown();
    }

    function filterDropdownCourses(query) {
        const q = (query || '').toLowerCase().trim();
        const chips = document.querySelectorAll('#dropdown-streams-container .course-chip');
        const groups = document.querySelectorAll('#dropdown-streams-container .stream-group');

        chips.forEach(chip => {
            const text = chip.textContent.toLowerCase();
            if (!q || text.includes(q)) {
                chip.style.display = 'flex';
            } else {
                chip.style.display = 'none';
            }
        });

        // Hide empty groups
        groups.forEach(group => {
            let hasVisible = false;
            group.querySelectorAll('.course-chip').forEach(c => {
                if (c.style.display !== 'none') hasVisible = true;
            });
            group.style.display = hasVisible ? 'block' : 'none';
        });
    }
</script>
