<!-- ================= CUTOFF CALCULATOR MAIN INTERACTIVE SECTION ================= -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
    
    <!-- Top Heading & Clean Short Intro -->
    <div class="mb-8 sm:mb-10 text-left">
        <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold text-heading tracking-tight leading-[1.18] mb-2">
            Tamil Nadu 12th <span class="text-brand">Cutoff Calculator</span>
        </h1>
        <p class="text-sm sm:text-base text-muted max-w-2xl leading-relaxed">
            Calculate your 12th standard cutoff score and explore eligible colleges across Tamil Nadu.
        </p>
    </div>

    <!-- Main 2-Column Split: Left Calculator / Right Colleges Feed (Matched Heights on Desktop) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-stretch">
        
        <!-- ================= LEFT COLUMN: DIRECT FORM CARD WITH STREAM DROPDOWN (5 Cols) ================= -->
        <div class="lg:col-span-5 w-full flex flex-col">
            
            <div class="w-full bg-white rounded-2xl border border-zinc-200/90 p-6 sm:p-7 shadow-xs flex-1 flex flex-col justify-between">
                
                <div>
                    <!-- Form Header (Clean title without 200 marks pill) -->
                    <div class="pb-3.5 mb-5 border-b border-zinc-100">
                        <h2 class="text-lg sm:text-xl font-bold text-heading">
                            Enter Your 12th Marks
                        </h2>
                        <p class="text-xs text-muted mt-0.5">
                            Select stream & enter marks out of 100
                        </p>
                    </div>

                    <!-- Form -->
                    <form id="cutoff-calculator-form" onsubmit="return false;" class="space-y-4">
                        
                        <!-- 1. Custom Stream Selection Dropdown (Pure Brand Theme UI, Zero Browser Native Glitches) -->
                        <div>
                            <label class="block text-xs sm:text-[13px] font-semibold text-heading mb-1.5">
                                Select Stream <span class="text-brand">*</span>
                            </label>
                            
                            <!-- Custom Dropdown Container -->
                            <div class="relative" id="custom-stream-dropdown-wrapper">
                                <!-- Trigger Button -->
                                <button 
                                    type="button" 
                                    id="stream-dropdown-btn"
                                    onclick="toggleCustomStreamMenu(event)"
                                    class="w-full pl-11 pr-10 h-[48px] sm:h-[50px] text-xs sm:text-sm md:text-[14px] bg-white border border-zinc-200 hover:border-brand/70 focus:border-brand rounded-xl text-heading font-semibold transition-all flex items-center justify-between text-left shadow-xs cursor-pointer select-none"
                                >
                                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-brand">
                                        <i data-lucide="graduation-cap" class="w-4.5 h-4.5"></i>
                                    </div>
                                    <span id="custom-stream-selected-label">Engineering</span>
                                    <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-muted">
                                        <i id="custom-stream-chevron" data-lucide="chevron-down" class="w-4.5 h-4.5 transition-transform duration-200"></i>
                                    </div>
                                </button>

                                <!-- Custom Floating Dropdown Menu -->
                                <div 
                                    id="custom-stream-menu" 
                                    class="hidden absolute top-full left-0 right-0 mt-1.5 bg-white border border-border/80 rounded-2xl shadow-xl z-30 p-1.5 space-y-1 animate-in fade-in duration-150"
                                >
                                    <!-- Option 1: Engineering -->
                                    <button 
                                        type="button" 
                                        onclick="selectCustomStream('engineering', 'Engineering')"
                                        class="stream-opt-item w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-brand bg-brand/5 hover:bg-brand/10 transition-colors cursor-pointer text-left"
                                        data-value="engineering"
                                    >
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-2 h-2 rounded-full bg-brand"></span>
                                            <span>Engineering</span>
                                        </div>
                                        <i data-lucide="check" class="w-4 h-4 text-brand stream-opt-check"></i>
                                    </button>

                                    <!-- Option 2: Arts & Science -->
                                    <button 
                                        type="button" 
                                        onclick="selectCustomStream('arts', 'Arts & Science')"
                                        class="stream-opt-item w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-medium text-subheading hover:text-heading hover:bg-zinc-100 transition-colors cursor-pointer text-left"
                                        data-value="arts"
                                    >
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-2 h-2 rounded-full bg-zinc-300"></span>
                                            <span>Arts &amp; Science</span>
                                        </div>
                                        <i data-lucide="check" class="w-4 h-4 text-brand stream-opt-check hidden"></i>
                                    </button>

                                    <!-- Option 3: Nursing -->
                                    <button 
                                        type="button" 
                                        onclick="selectCustomStream('nursing', 'Nursing')"
                                        class="stream-opt-item w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-medium text-subheading hover:text-heading hover:bg-zinc-100 transition-colors cursor-pointer text-left"
                                        data-value="nursing"
                                    >
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-2 h-2 rounded-full bg-zinc-300"></span>
                                            <span>Nursing</span>
                                        </div>
                                        <i data-lucide="check" class="w-4 h-4 text-brand stream-opt-check hidden"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Dynamic Subject Fields Container (Populated via JS based on stream) -->
                        <div id="subject-fields-container" class="space-y-3.5 pt-1">
                            <!-- Injected automatically by JavaScript with common placeholder 'Enter mark (0 - 100)' -->
                        </div>

                        <!-- 3. In-line Calculated Cutoff Score Badge (Above Buttons) -->
                        <div id="calculated-cutoff-badge" class="hidden p-4 rounded-xl bg-brand/5 border border-brand/20 text-center transition-all">
                            <span class="text-xs uppercase font-bold tracking-wider text-muted block mb-1">
                                Your Calculated Cutoff
                            </span>
                            <div class="flex items-baseline justify-center gap-1">
                                <span id="calculated-score-val" class="text-3xl sm:text-4xl font-extrabold text-brand tracking-tight">
                                    0.00
                                </span>
                                <span class="text-sm sm:text-base font-semibold text-heading">
                                    / 200
                                </span>
                            </div>
                            <p id="cutoff-formula-hint" class="text-[11px] text-muted mt-1">
                                Formula: Maths + (Physics / 2) + (Chemistry / 2)
                            </p>
                        </div>

                        <!-- 4. Action Buttons (Both styled in NextSkill Brand Theme, No Black Button) -->
                        <div class="pt-2 space-y-2.5">
                            
                            <!-- Button 1: Calculate Cutoff (Brand Solid Button) -->
                            <button 
                                type="button" 
                                onclick="calculateCutoff()"
                                class="w-full h-12 rounded-xl bg-brand hover:bg-brand-hover text-white font-bold text-sm shadow-xs transition-all flex items-center justify-center gap-2 cursor-pointer active:scale-98"
                            >
                                <i data-lucide="calculator" class="w-4 h-4 text-white"></i>
                                <span>Calculate Cutoff</span>
                            </button>

                            <!-- Button 2: Find Colleges for Cutoff (Brand Outline Button) -->
                            <x-ui.outline-button 
                                type="button" 
                                icon="search" 
                                onclick="findCollegesForCutoff()"
                                class="w-full !h-12 !text-sm !border-2 !border-brand hover:!bg-brand hover:!text-white hover:!border-brand !rounded-xl !shadow-none font-bold"
                            >
                                Find Colleges for Cutoff
                            </x-ui.outline-button>

                        </div>

                    </form>
                </div>

            </div>

        </div>

        <!-- ================= RIGHT COLUMN: COLLEGES LIST / EMPTY STATE (7 Cols) ================= -->
        <div class="lg:col-span-7 w-full flex flex-col">
            
            <!-- Default View: Clean & Simple Empty State (Equal Height to Left Card) -->
            <div id="colleges-empty-state" class="w-full bg-white rounded-2xl border border-zinc-200/90 p-8 sm:p-12 text-center flex-1 flex flex-col items-center justify-center min-h-[460px] shadow-xs">
                
                <!-- Clean Minimal Empty Icon -->
                <div class="w-16 h-16 rounded-full bg-zinc-100 flex items-center justify-center text-muted mb-4">
                    <i data-lucide="graduation-cap" class="w-8 h-8 text-muted"></i>
                </div>

                <h3 class="text-base sm:text-lg font-bold text-heading mb-1.5">
                    Select a Stream to View Eligible Colleges
                </h3>

                <p class="text-xs sm:text-sm text-muted max-w-sm leading-relaxed">
                    Enter your marks on the left and click "Find Colleges for Cutoff" to see your eligible colleges here.
                </p>
            </div>

            <!-- Active View: Filtered Eligible Colleges Feed (Hidden initially) -->
            <div id="colleges-results-view" class="hidden w-full">
                
                <!-- Feed Header -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5 pb-3 border-b border-zinc-200/80">
                    <div>
                        <h2 class="text-lg font-bold text-heading">
                            Eligible Colleges Matching Your Cutoff
                        </h2>
                        <p id="results-count-summary" class="text-xs text-muted">
                            Showing top verified colleges matching your cutoff score
                        </p>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="text-xs text-muted">Your Cutoff:</span>
                        <span id="results-cutoff-pill" class="text-xs font-bold px-2.5 py-1 rounded-full bg-brand text-white shadow-xs">
                            0.00 / 200
                        </span>
                    </div>
                </div>

                <!-- Dynamic Colleges Container (Filtered Reusable Cards) -->
                <div id="colleges-cards-container" class="space-y-4">
                    <!-- Populated via JavaScript Reusing the Same Card Layout -->
                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= JAVASCRIPT CALCULATOR & MATCHER LOGIC ================= -->
<script>
    // Stream configuration dictionary (3 Streams: Engineering, Arts & Science, Nursing)
    const streamsData = {
        engineering: {
            title: "Engineering",
            formula: "Mathematics + (Physics / 2) + (Chemistry / 2)",
            subjects: [
                { id: "maths", name: "Mathematics", icon: "function-square" },
                { id: "physics", name: "Physics", icon: "zap" },
                { id: "chemistry", name: "Chemistry", icon: "flask-conical" }
            ],
            calc: (vals) => {
                const m = vals.maths || 0;
                const p = vals.physics || 0;
                const c = vals.chemistry || 0;
                return m + (p / 2) + (c / 2);
            }
        },
        arts: {
            title: "Arts & Science",
            formula: "Mathematics + (Physics / 2) + (Chemistry / 2)",
            subjects: [
                { id: "maths", name: "Mathematics", icon: "function-square" },
                { id: "physics", name: "Physics", icon: "zap" },
                { id: "chemistry", name: "Chemistry", icon: "flask-conical" }
            ],
            calc: (vals) => {
                const m = vals.maths || 0;
                const p = vals.physics || 0;
                const c = vals.chemistry || 0;
                return m + (p / 2) + (c / 2);
            }
        },
        nursing: {
            title: "Nursing",
            formula: "Biology + (Physics + Chemistry) / 2",
            subjects: [
                { id: "physics", name: "Physics", icon: "zap" },
                { id: "chemistry", name: "Chemistry", icon: "flask-conical" },
                { id: "biology", name: "Biology", icon: "dna" }
            ],
            calc: (vals) => {
                const p = vals.physics || 0;
                const c = vals.chemistry || 0;
                const b = vals.biology || 0;
                return b + ((p + c) / 2);
            }
        }
    };

    // Verified Mock Database of Colleges with Cutoff Ranges & Details
    const collegesDatabase = [
        {
            name: "PSG College of Technology",
            city: "Coimbatore",
            stream: "engineering",
            type: "Autonomous",
            image: "{{ asset('images/colleges/psg-tech.jpg') }}",
            accreditation: "NAAC A++",
            nirf: "NIRF #63",
            courses: "B.E Computer Science, Robotics, AI & Data Science",
            fees: "₹85,000 / Yr",
            minCutoff: 185,
            maxCutoff: 198,
            cutoffLabel: "185 - 198 (TNEA)",
            rating: "4.8",
            reviews: "240+"
        },
        {
            name: "SSN College of Engineering",
            city: "Chennai",
            stream: "engineering",
            type: "Autonomous",
            image: "{{ asset('images/colleges/ssn.jpg') }}",
            accreditation: "NAAC A++",
            nirf: "NIRF #45",
            courses: "B.Tech IT, B.E ECE, Computer Science",
            fees: "₹95,000 / Yr",
            minCutoff: 180,
            maxCutoff: 196,
            cutoffLabel: "180 - 196 (TNEA)",
            rating: "4.7",
            reviews: "190+"
        },
        {
            name: "Coimbatore Institute of Technology (CIT)",
            city: "Coimbatore",
            stream: "engineering",
            type: "Govt-Aided Autonomous",
            image: "{{ asset('images/colleges/cit.jpg') }}",
            accreditation: "NAAC A",
            nirf: "NIRF #101",
            courses: "B.E Mechanical, Civil, Electrical, AI & DS",
            fees: "₹45,000 / Yr",
            minCutoff: 172,
            maxCutoff: 192,
            cutoffLabel: "172 - 192 (TNEA)",
            rating: "4.6",
            reviews: "165+"
        },
        {
            name: "Kumaraguru College of Technology (KCT)",
            city: "Coimbatore",
            stream: "engineering",
            type: "Autonomous",
            image: "{{ asset('images/colleges/kct.jpg') }}",
            accreditation: "NAAC A++",
            nirf: "NIRF #82",
            courses: "B.E Mechatronics, Aeronautical, AI & ML",
            fees: "₹85,000 / Yr",
            minCutoff: 165,
            maxCutoff: 188,
            cutoffLabel: "165 - 188 (TNEA)",
            rating: "4.6",
            reviews: "180+"
        },
        {
            name: "PSG Institute of Medical Sciences & Research",
            city: "Coimbatore",
            stream: "nursing",
            type: "Affiliated to TN MGR Medical Univ",
            image: "{{ asset('images/colleges/psg-tech.jpg') }}",
            accreditation: "NABH / NABL",
            nirf: "Top Medical",
            courses: "B.Sc Nursing, B.Pharm, Allied Health Sciences",
            fees: "₹1,10,000 / Yr",
            minCutoff: 170,
            maxCutoff: 195,
            cutoffLabel: "170 - 195 (Nursing)",
            rating: "4.8",
            reviews: "150+"
        },
        {
            name: "Sri Ramachandra Faculty of Nursing",
            city: "Chennai",
            stream: "nursing",
            type: "Deemed University",
            image: "{{ asset('images/colleges/ssn.jpg') }}",
            accreditation: "NAAC A++",
            nirf: "NIRF #57",
            courses: "B.Sc Nursing, Post Basic B.Sc Nursing",
            fees: "₹1,25,000 / Yr",
            minCutoff: 160,
            maxCutoff: 190,
            cutoffLabel: "160 - 190 (Nursing)",
            rating: "4.7",
            reviews: "210+"
        },
        {
            name: "Loyola College (Autonomous)",
            city: "Chennai",
            stream: "arts",
            type: "Autonomous Arts & Science",
            image: "{{ asset('images/colleges/cit.jpg') }}",
            accreditation: "NAAC A++ (CGPA 3.70)",
            nirf: "NIRF #7 (Colleges)",
            courses: "B.Sc Computer Science, Mathematics, Physics, Statistics",
            fees: "₹45,000 / Yr",
            minCutoff: 175,
            maxCutoff: 198,
            cutoffLabel: "175 - 198 (Merit)",
            rating: "4.9",
            reviews: "320+"
        },
        {
            name: "PSG College of Arts & Science",
            city: "Coimbatore",
            stream: "arts",
            type: "Autonomous Arts & Science",
            image: "{{ asset('images/colleges/kct.jpg') }}",
            accreditation: "NAAC A++",
            nirf: "NIRF #20 (Colleges)",
            courses: "B.Sc Data Science, IT, Electronics, BCA",
            fees: "₹50,000 / Yr",
            minCutoff: 165,
            maxCutoff: 192,
            cutoffLabel: "165 - 192 (Merit)",
            rating: "4.8",
            reviews: "280+"
        },
        {
            name: "Madras Christian College (MCC)",
            city: "Chennai",
            stream: "arts",
            type: "Autonomous Arts & Science",
            image: "{{ asset('images/colleges/ssn.jpg') }}",
            accreditation: "NAAC A++",
            nirf: "NIRF #16 (Colleges)",
            courses: "B.Sc Mathematics, Physics, Chemistry, BCA",
            fees: "₹42,000 / Yr",
            minCutoff: 170,
            maxCutoff: 195,
            cutoffLabel: "170 - 195 (Merit)",
            rating: "4.8",
            reviews: "260+"
        },
        {
            name: "CMC Vellore College of Nursing",
            city: "Vellore",
            stream: "nursing",
            type: "Private Autonomous",
            image: "{{ asset('images/colleges/cit.jpg') }}",
            accreditation: "INC Approved",
            nirf: "Top Nursing",
            courses: "B.Sc Nursing (4 Years)",
            fees: "₹65,000 / Yr",
            minCutoff: 175,
            maxCutoff: 198,
            cutoffLabel: "175 - 198 (Nursing)",
            rating: "4.9",
            reviews: "410+"
        },
        {
            name: "Government College of Technology (GCT)",
            city: "Coimbatore",
            stream: "engineering",
            type: "Govt Autonomous",
            image: "{{ asset('images/colleges/cit.jpg') }}",
            accreditation: "NAAC A",
            nirf: "NIRF #105",
            courses: "B.E EEE, ECE, Civil, Production Engg",
            fees: "₹35,000 / Yr",
            minCutoff: 170,
            maxCutoff: 194,
            cutoffLabel: "170 - 194 (TNEA)",
            rating: "4.7",
            reviews: "210+"
        }
    ];

    let currentStreamKey = 'engineering';
    let lastCalculatedCutoff = null;

    // Toggle Custom Stream Dropdown Menu
    function toggleCustomStreamMenu(e) {
        if (e) e.stopPropagation();
        const menu = document.getElementById('custom-stream-menu');
        const chevron = document.getElementById('custom-stream-chevron');
        if (!menu) return;

        const isHidden = menu.classList.contains('hidden');
        if (isHidden) {
            menu.classList.remove('hidden');
            if (chevron) chevron.classList.add('rotate-180');
        } else {
            menu.classList.add('hidden');
            if (chevron) chevron.classList.remove('rotate-180');
        }
    }

    // Select Stream from Custom Dropdown Menu
    function selectCustomStream(streamKey, label) {
        // Close menu
        const menu = document.getElementById('custom-stream-menu');
        const chevron = document.getElementById('custom-stream-chevron');
        if (menu) menu.classList.add('hidden');
        if (chevron) chevron.classList.remove('rotate-180');

        // Update Label
        const labelEl = document.getElementById('custom-stream-selected-label');
        if (labelEl) labelEl.textContent = label;

        // Update Option Item UI states
        document.querySelectorAll('.stream-opt-item').forEach(item => {
            const val = item.getAttribute('data-value');
            const dot = item.querySelector('span:first-child');
            const check = item.querySelector('.stream-opt-check');

            if (val === streamKey) {
                item.className = "stream-opt-item w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-brand bg-brand/5 hover:bg-brand/10 transition-colors cursor-pointer text-left";
                if (dot) dot.className = "w-2 h-2 rounded-full bg-brand";
                if (check) check.classList.remove('hidden');
            } else {
                item.className = "stream-opt-item w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-medium text-subheading hover:text-heading hover:bg-zinc-100 transition-colors cursor-pointer text-left";
                if (dot) dot.className = "w-2 h-2 rounded-full bg-zinc-300";
                if (check) check.classList.add('hidden');
            }
        });

        // Trigger engine update
        onStreamDropdownChange(streamKey);
    }

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        const wrapper = document.getElementById('custom-stream-dropdown-wrapper');
        const menu = document.getElementById('custom-stream-menu');
        const chevron = document.getElementById('custom-stream-chevron');
        if (wrapper && !wrapper.contains(e.target) && menu && !menu.classList.contains('hidden')) {
            menu.classList.add('hidden');
            if (chevron) chevron.classList.remove('rotate-180');
        }
    });

    // 1. Switch Stream & Update Fields
    function onStreamDropdownChange(streamKey) {
        currentStreamKey = streamKey;
        const stream = streamsData[streamKey];
        if (!stream) return;

        // Update Formula Hint
        document.getElementById('cutoff-formula-hint').innerText = "Formula: " + stream.formula;

        // Render Subject Inputs with Common Unified Placeholder
        const container = document.getElementById('subject-fields-container');
        container.innerHTML = '';

        stream.subjects.forEach(sub => {
            const field = document.createElement('div');
            field.innerHTML = `
                <label for="sub-${sub.id}" class="block text-xs sm:text-[13px] font-semibold text-heading mb-1.5">
                    ${sub.name} Mark (Out of 100) <span class="text-brand">*</span>
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-muted">
                        <i data-lucide="${sub.icon}" class="w-4.5 h-4.5"></i>
                    </div>
                    <input 
                        type="number" 
                        min="0" 
                        max="100" 
                        id="sub-${sub.id}" 
                        placeholder="Enter mark (0 - 100)" 
                        oninput="onMarksInputChanged()"
                        class="w-full pl-11 pr-4 h-[46px] sm:h-[48px] text-xs sm:text-sm md:text-[14px] bg-white border border-zinc-200 rounded-xl text-heading placeholder:text-muted focus:outline-none focus:border-brand focus:ring-4 focus:ring-brand/10 transition-all shadow-xs"
                    />
                </div>
            `;
            container.appendChild(field);
        });

        // Initialize Lucide icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Reset calculated badge and empty state if stream changes
        document.getElementById('calculated-cutoff-badge').classList.add('hidden');
        lastCalculatedCutoff = null;
    }

    // 2. Collect Values and Calculate Cutoff (No browser alert popup, graceful fallback)
    function calculateCutoff() {
        if (!currentStreamKey) return 0;
        const stream = streamsData[currentStreamKey];

        const values = {};

        stream.subjects.forEach(sub => {
            const input = document.getElementById(`sub-${sub.id}`);
            const val = parseFloat(input ? input.value : 0);
            values[sub.id] = (isNaN(val) || val < 0) ? 0 : Math.min(val, 100);
        });

        const score = stream.calc(values);
        const formattedScore = score.toFixed(2);
        lastCalculatedCutoff = score;

        // Display In-line Badge
        const badge = document.getElementById('calculated-cutoff-badge');
        const scoreVal = document.getElementById('calculated-score-val');
        scoreVal.innerText = formattedScore;
        badge.classList.remove('hidden');

        return score;
    }

    function onMarksInputChanged() {
        // Automatically update score badge if already calculating
        if (lastCalculatedCutoff !== null) {
            calculateCutoff();
        }
    }

    // 3. Find Colleges for Calculated Cutoff
    function findCollegesForCutoff() {
        let cutoff = lastCalculatedCutoff;
        if (cutoff === null) {
            cutoff = calculateCutoff();
        }

        // Filter Colleges
        const eligibleColleges = collegesDatabase.filter(c => {
            const matchesStream = (c.stream === currentStreamKey);
            // Show colleges where cutoff is within eligible reach
            const matchesScore = (cutoff >= (c.minCutoff - 15));
            return matchesStream && (cutoff > 0 ? matchesScore : true);
        });

        renderCollegesResults(eligibleColleges, cutoff);
    }

    // 4. Render Eligible Colleges on the Right Side
    function renderCollegesResults(colleges, cutoff) {
        const emptyState = document.getElementById('colleges-empty-state');
        const resultsView = document.getElementById('colleges-results-view');
        const container = document.getElementById('colleges-cards-container');
        const cutoffPill = document.getElementById('results-cutoff-pill');
        const countSummary = document.getElementById('results-count-summary');

        emptyState.classList.add('hidden');
        resultsView.classList.remove('hidden');

        cutoffPill.innerText = cutoff.toFixed(2) + " / 200";
        countSummary.innerText = `Found ${colleges.length} colleges matching your score and stream`;

        if (colleges.length === 0) {
            container.innerHTML = `
                <div class="bg-white rounded-2xl border border-zinc-200 p-8 text-center">
                    <p class="text-sm font-semibold text-heading mb-1">No colleges found strictly within this cutoff band.</p>
                    <p class="text-xs text-muted mb-4">Try checking private colleges or management quota options.</p>
                    <a href="tel:+917358110062" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand text-white text-xs font-bold">
                        <i data-lucide="phone" class="w-3.5 h-3.5"></i>
                        <span>Call Admission Helpdesk (+91 73581 10062)</span>
                    </a>
                </div>
            `;
            if (typeof lucide !== 'undefined') lucide.createIcons();
            return;
        }

        // Generate college cards (identical layout to finder-college-card)
        container.innerHTML = colleges.map(c => `
            <article class="bg-white border border-border hover:border-brand rounded-2xl overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col md:flex-row">
                <div class="relative w-full md:w-56 h-40 md:h-auto flex-shrink-0 bg-zinc-900 overflow-hidden">
                    <img src="${c.image}" alt="${c.name}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute top-3 left-3 flex flex-wrap gap-1.5 z-10">
                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-white/95 text-heading shadow-xs">${c.accreditation}</span>
                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-brand text-white shadow-xs">${c.nirf}</span>
                    </div>
                </div>
                <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-start justify-between gap-2 mb-1.5">
                            <h3 class="text-sm sm:text-base font-bold text-heading hover:text-brand transition-colors">
                                ${c.name}
                            </h3>
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-50 text-emerald-600 flex-shrink-0">
                                ★ ${c.rating}
                            </span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-muted mb-3">
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-brand"></i> ${c.city}</span>
                            <span>•</span>
                            <span>${c.type}</span>
                        </div>
                        <p class="text-xs text-subheading mb-3 line-clamp-1">
                            <strong class="font-semibold text-heading">Courses:</strong> ${c.courses}
                        </p>
                    </div>
                    <div class="pt-3 border-t border-zinc-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-muted block uppercase font-bold">Cutoff Range</span>
                            <span class="text-xs sm:text-sm font-bold text-brand">${c.cutoffLabel}</span>
                        </div>
                        <a href="tel:+917358110062" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-brand hover:bg-brand-hover text-white text-xs font-semibold shadow-xs transition-all">
                            <span>Check Seat</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>
            </article>
        `).join('');

        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }

    // Auto-initialize with default Engineering stream on page load
    document.addEventListener('DOMContentLoaded', function () {
        onStreamDropdownChange('engineering');
    });
</script>
