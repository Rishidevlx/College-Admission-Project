<x-layouts.app title="College Finder - Find Top Colleges & Courses in Tamil Nadu" :hide-glow="true">

    <!-- 1. Fixed Pure White Navigation Bar -->
    <x-ui.navbar />

    <!-- Top Header Area (Hero with Ambient Glow) -->
    <div class="relative bg-white border-b border-border/70 z-30">
        <!-- Ambient Glow: Central Brand Theme Tone (Isolated overflow-hidden layer so dropdowns are not clipped) -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute -top-28 sm:-top-40 left-1/2 -translate-x-1/2 w-[700px] sm:w-[1100px] lg:w-[1300px] h-[360px] sm:h-[480px] bg-brand rounded-full filter blur-[90px] sm:blur-[130px] opacity-25 sm:opacity-30 pointer-events-none"></div>
            <div class="absolute -top-20 -left-20 sm:-top-28 sm:-left-24 w-[350px] sm:w-[480px] h-[260px] sm:h-[360px] bg-brand rounded-full filter blur-[75px] sm:blur-[110px] opacity-20 sm:opacity-25 pointer-events-none"></div>
            <div class="absolute -top-20 -right-20 sm:-top-28 sm:-right-24 w-[350px] sm:w-[480px] h-[260px] sm:h-[360px] bg-brand rounded-full filter blur-[75px] sm:blur-[110px] opacity-20 sm:opacity-25 pointer-events-none"></div>
        </div>

        <!-- 2. Hero Header Section with Search Bar & Stream Preference Selector -->
        <x-sections.finder-hero />
    </div>

    <!-- 3. Main 2-Column Split Section: Filter Sidebar (Left) & Colleges Feed (Right) -->
    <main class="py-8 sm:py-12 bg-white min-h-[600px] relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Mobile Filter Toggle Bar (Visible on < lg) -->
            <div class="lg:hidden mb-4 flex items-center justify-between p-3.5 bg-white border border-border rounded-xl shadow-xs">
                <button 
                    type="button" 
                    onclick="toggleMobileFilters()" 
                    class="flex items-center gap-2 text-xs sm:text-sm font-bold text-heading"
                >
                    <i data-lucide="sliders-horizontal" class="w-4 h-4 text-brand"></i>
                    <span>Filter Colleges</span>
                    <span id="mobile-filter-count" class="w-5 h-5 rounded-full bg-brand text-white text-[11px] flex items-center justify-center font-bold hidden">0</span>
                </button>

                <div class="text-xs text-muted font-medium">
                    <span id="mobile-college-count">6 Colleges Found</span>
                </div>
            </div>

            <!-- 2-Column Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Column: Filter Sidebar (lg:col-span-4 xl:col-span-3) -->
                <div id="filter-sidebar-wrapper" class="hidden lg:block lg:col-span-4 xl:col-span-3 sticky top-6 z-20">
                    <x-ui.finder-filter-sidebar />
                </div>

                <!-- Right Column: Colleges Result Feed (lg:col-span-8 xl:col-span-9) -->
                <div class="lg:col-span-8 xl:col-span-9">
                    
                    <!-- Feed Header: Counter & Sort Options -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6 pb-4 border-b border-border/70">
                        <div>
                            <h2 class="text-lg sm:text-xl font-bold text-heading tracking-tight">
                                Top Colleges in Tamil Nadu
                            </h2>
                            <p class="text-xs sm:text-sm text-muted mt-0.5" id="results-count-text">
                                Showing 6 verified institutions matching your criteria
                            </p>
                        </div>

                        <!-- Sort Dropdown -->
                        <div class="flex items-center gap-2 self-start sm:self-auto">
                            <span class="text-xs text-muted font-medium">Sort by:</span>
                            <select 
                                id="sort-select" 
                                onchange="sortColleges(this.value)"
                                class="text-xs font-semibold text-heading bg-white border border-border rounded-lg px-2.5 py-1.5 focus:outline-none focus:border-brand"
                            >
                                <option value="rating">Rating (Highest First)</option>
                                <option value="fees-low">Fees (Low to High)</option>
                                <option value="name">College Name (A-Z)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Colleges List Container -->
                    <div id="colleges-container" class="space-y-4 sm:space-y-5">
                        
                        <!-- College 1: PSG College of Technology -->
                        <x-ui.finder-college-card 
                            name="PSG College of Technology"
                            city="Coimbatore"
                            stream="Engineering"
                            type="Autonomous"
                            image="{{ asset('images/colleges/psg-tech.jpg') }}"
                            logo="{{ asset('images/colleges/logos/psg-logo.svg') }}"
                            accreditation="NAAC A++"
                            nirf="NIRF #63"
                            courses="B.E Computer Science, Robotics, AI & Data Science"
                            fees="₹85,000 / Yr"
                            cutoff="192 - 198 (TNEA)"
                            rating="4.8"
                            reviews="240+"
                            link="javascript:void(0)"
                        />

                        <!-- College 2: SSN College of Engineering -->
                        <x-ui.finder-college-card 
                            name="SSN College of Engineering"
                            city="Chennai"
                            stream="Engineering"
                            type="Autonomous"
                            image="{{ asset('images/colleges/ssn.jpg') }}"
                            logo="{{ asset('images/colleges/logos/ssn-logo.svg') }}"
                            accreditation="NAAC A++"
                            nirf="NIRF #45"
                            courses="B.Tech IT, B.E ECE, Mechanical, Cyber Security"
                            fees="₹1,20,000 / Yr"
                            cutoff="190 - 197 (TNEA)"
                            rating="4.7"
                            reviews="190+"
                            link="javascript:void(0)"
                        />

                        <!-- College 3: Coimbatore Institute of Technology -->
                        <x-ui.finder-college-card 
                            name="Coimbatore Institute of Technology (CIT)"
                            city="Coimbatore"
                            stream="Engineering"
                            type="Govt & Aided"
                            image="{{ asset('images/colleges/cit.jpg') }}"
                            logo="{{ asset('images/colleges/logos/cit-logo.svg') }}"
                            accreditation="NAAC A+"
                            nirf="NIRF #90"
                            courses="B.E Civil, Electrical, AI & DS, Computer Science"
                            fees="₹45,000 / Yr"
                            cutoff="186 - 194 (TNEA)"
                            rating="4.6"
                            reviews="150+"
                            link="javascript:void(0)"
                        />

                        <!-- College 4: Thiagarajar College of Engineering -->
                        <x-ui.finder-college-card 
                            name="Thiagarajar College of Engineering (TCE)"
                            city="Madurai"
                            stream="Engineering"
                            type="Govt & Aided"
                            image="{{ asset('images/colleges/tce.jpg') }}"
                            logo="{{ asset('images/colleges/logos/tce-logo.svg') }}"
                            accreditation="NAAC A++"
                            nirf="NIRF #85"
                            courses="B.E Mechanical, CSE, Electronics, Architecture"
                            fees="₹48,000 / Yr"
                            cutoff="185 - 193 (TNEA)"
                            rating="4.6"
                            reviews="135+"
                            link="javascript:void(0)"
                        />

                        <!-- College 5: Loyola College -->
                        <x-ui.finder-college-card 
                            name="Loyola College (Autonomous)"
                            city="Chennai"
                            stream="Commerce"
                            type="Autonomous"
                            image="{{ asset('images/colleges/loyola.jpg') }}"
                            logo="{{ asset('images/colleges/logos/loyola-logo.svg') }}"
                            accreditation="NAAC A++"
                            nirf="NIRF #7 (Colleges)"
                            courses="B.Com General, BCA, B.Sc Computer Science, BBA"
                            fees="₹55,000 / Yr"
                            cutoff="Merit Based (92%+ in 12th)"
                            rating="4.8"
                            reviews="310+"
                            link="javascript:void(0)"
                        />

                        <!-- College 6: Kumaraguru College of Technology -->
                        <x-ui.finder-college-card 
                            name="Kumaraguru College of Technology (KCT)"
                            city="Coimbatore"
                            stream="Engineering"
                            type="Autonomous"
                            image="{{ asset('images/colleges/kct.jpg') }}"
                            logo="{{ asset('images/colleges/logos/kct-logo.svg') }}"
                            accreditation="NAAC A++"
                            nirf="NIRF #102"
                            courses="B.Tech AI & Data Science, Mechatronics, Aeronautical"
                            fees="₹95,000 / Yr"
                            cutoff="180 - 192 (TNEA)"
                            rating="4.5"
                            reviews="165+"
                            link="javascript:void(0)"
                        />

                    </div>

                    <!-- Empty State (Shown when no filter match) -->
                    <div id="no-results-state" class="hidden bg-white border border-border rounded-2xl p-8 sm:p-12 text-center">
                        <div class="w-16 h-16 rounded-full bg-brand/10 text-brand flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="search-x" class="w-8 h-8"></i>
                        </div>
                        <h3 class="text-base sm:text-lg font-bold text-heading">No Colleges Found</h3>
                        <p class="text-xs sm:text-sm text-muted mt-1 max-w-sm mx-auto">
                            We couldn't find any college matching your selected filters. Try clearing some filters or searching with a different term.
                        </p>
                        <button 
                            type="button" 
                            onclick="resetAllFilters()" 
                            class="mt-4 px-5 py-2 rounded-xl bg-brand text-white text-xs sm:text-sm font-semibold hover:bg-heading transition-all"
                        >
                            Reset All Filters
                        </button>
                    </div>

                    <!-- Bottom Need Guidance Card -->
                    <div class="mt-8 p-5 sm:p-6 bg-gradient-to-r from-orange-50/70 via-white to-orange-50/40 border border-brand/20 rounded-2xl flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <span class="inline-block text-[11px] font-bold text-brand uppercase tracking-wider mb-1">Confused About Cutoff?</span>
                            <h4 class="text-sm sm:text-base font-bold text-heading">Get 100% Free TNEA & College Counselling</h4>
                            <p class="text-xs text-muted mt-0.5">Talk to our senior admission counsellors to know your best eligible college options.</p>
                        </div>
                        <a 
                            href="tel:+917358110062" 
                            class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-heading hover:bg-brand text-white text-xs sm:text-sm font-semibold transition-all duration-200 shadow-xs flex-shrink-0"
                        >
                            <i data-lucide="phone-call" class="w-4 h-4 text-brand group-hover:text-white"></i>
                            <span>Call +91-7358110062</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </main>

    <!-- 5. Reusable Footer Component -->
    <x-ui.footer />

    <!-- ================= CLIENT-SIDE REALTIME FILTER & SEARCH CONTROLLER ================= -->
    <script>
        // State
        const filterState = {
            query: '',
            streams: [],
            cities: [],
            types: [],
            fees: []
        };

        function handleSearchInput(val) {
            filterState.query = (val || '').toLowerCase().trim();
            runFilter();
        }

        function executeSearch() {
            runFilter();
            // Smooth scroll to results
            const resultsEl = document.getElementById('colleges-container');
            if (resultsEl) {
                resultsEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        function applySidebarFilters() {
            // Collect checked checkboxes
            filterState.streams = Array.from(document.querySelectorAll('input[name="stream"]:checked')).map(el => el.value);
            filterState.cities = Array.from(document.querySelectorAll('input[name="city"]:checked')).map(el => el.value);
            filterState.types = Array.from(document.querySelectorAll('input[name="type"]:checked')).map(el => el.value);
            filterState.fees = Array.from(document.querySelectorAll('input[name="fee"]:checked')).map(el => el.value);
            runFilter();
        }

        function quickFilterDistrict(city) {
            document.querySelectorAll('input[name="city"]').forEach(cb => {
                cb.checked = (cb.value.toLowerCase() === city.toLowerCase());
            });
            applySidebarFilters();
        }

        function quickFilterType(type) {
            document.querySelectorAll('input[name="type"]').forEach(cb => {
                cb.checked = (cb.value.toLowerCase().includes(type.toLowerCase()));
            });
            applySidebarFilters();
        }

        function quickFilterStream(stream) {
            document.querySelectorAll('input[name="stream"]').forEach(cb => {
                cb.checked = (cb.value.toLowerCase() === stream.toLowerCase());
            });
            applySidebarFilters();
        }

        window.applyStreamOrCourseFilter = function(courseName, streamName) {
            // Check matching stream checkbox
            if (streamName) {
                document.querySelectorAll('input[name="stream"]').forEach(cb => {
                    cb.checked = (cb.value.toLowerCase().includes(streamName.toLowerCase()) || streamName.toLowerCase().includes(cb.value.toLowerCase()));
                });
            }
            // Put course into query if specific
            const searchInput = document.getElementById('finder-search-input');
            if (searchInput && courseName) {
                searchInput.value = courseName;
                filterState.query = courseName.toLowerCase().trim();
            }
            applySidebarFilters();
        };

        function resetAllFilters() {
            filterState.query = '';
            filterState.streams = [];
            filterState.cities = [];
            filterState.types = [];
            filterState.fees = [];

            const searchInput = document.getElementById('finder-search-input');
            if (searchInput) searchInput.value = '';

            const btnText = document.getElementById('stream-preference-btn-text');
            if (btnText) btnText.textContent = 'Select Stream';

            document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
            runFilter();
        }

        function runFilter() {
            const items = document.querySelectorAll('.finder-college-item');
            let visibleCount = 0;

            items.forEach(item => {
                const name = item.getAttribute('data-name') || '';
                const city = item.getAttribute('data-city') || '';
                const stream = item.getAttribute('data-stream') || '';
                const type = item.getAttribute('data-type') || '';

                let matchQuery = true;
                if (filterState.query) {
                    matchQuery = name.includes(filterState.query) || city.toLowerCase().includes(filterState.query) || stream.toLowerCase().includes(filterState.query);
                }

                let matchStream = true;
                if (filterState.streams.length > 0) {
                    matchStream = filterState.streams.some(s => stream.toLowerCase().includes(s.toLowerCase()));
                }

                let matchCity = true;
                if (filterState.cities.length > 0) {
                    matchCity = filterState.cities.some(c => city.toLowerCase() === c.toLowerCase());
                }

                let matchType = true;
                if (filterState.types.length > 0) {
                    matchType = filterState.types.some(t => type.toLowerCase().includes(t.toLowerCase()));
                }

                if (matchQuery && matchStream && matchCity && matchType) {
                    item.style.display = 'flex';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            // Update Counters & Empty state
            const countText = document.getElementById('results-count-text');
            if (countText) {
                countText.textContent = `Showing ${visibleCount} verified institution${visibleCount === 1 ? '' : 's'} matching your criteria`;
            }

            const mobileCount = document.getElementById('mobile-college-count');
            if (mobileCount) {
                mobileCount.textContent = `${visibleCount} Colleges Found`;
            }

            const noResults = document.getElementById('no-results-state');
            if (noResults) {
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }

            // Update mobile filter badge
            const totalActive = filterState.streams.length + filterState.cities.length + filterState.types.length + filterState.fees.length;
            const mobileFilterBadge = document.getElementById('mobile-filter-count');
            if (mobileFilterBadge) {
                if (totalActive > 0) {
                    mobileFilterBadge.classList.remove('hidden');
                    mobileFilterBadge.textContent = totalActive;
                } else {
                    mobileFilterBadge.classList.add('hidden');
                }
            }
        }

        function toggleMobileFilters() {
            const sidebar = document.getElementById('filter-sidebar-wrapper');
            if (sidebar) {
                sidebar.classList.toggle('hidden');
            }
        }

        function sortColleges(criteria) {
            const container = document.getElementById('colleges-container');
            const items = Array.from(document.querySelectorAll('.finder-college-item'));

            items.sort((a, b) => {
                if (criteria === 'name') {
                    return (a.getAttribute('data-name') || '').localeCompare(b.getAttribute('data-name') || '');
                } else if (criteria === 'rating') {
                    return -1; // Keep top rated
                }
                return 0;
            });

            items.forEach(el => container.appendChild(el));
        }
    </script>

</x-layouts.app>

