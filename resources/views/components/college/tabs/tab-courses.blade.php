@props([
    'college' => []
])

@php
    $coursesList = [
        [
            'name' => 'B.E Computer Science & Engineering (CSE)',
            'short_name' => 'CSE',
            'degree' => 'B.E',
            'duration' => '4 Years',
            'fees' => '₹85,000 / Yr',
            'mode' => 'Full Time'
        ],
        [
            'name' => 'B.Tech Artificial Intelligence & Data Science (AI & DS)',
            'short_name' => 'AI & DS',
            'degree' => 'B.Tech',
            'duration' => '4 Years',
            'fees' => '₹85,000 / Yr',
            'mode' => 'Full Time'
        ],
        [
            'name' => 'B.E Electronics & Communication Engineering (ECE)',
            'short_name' => 'ECE',
            'degree' => 'B.E',
            'duration' => '4 Years',
            'fees' => '₹85,000 / Yr',
            'mode' => 'Full Time'
        ],
        [
            'name' => 'B.E Mechanical Engineering',
            'short_name' => 'Mechanical',
            'degree' => 'B.E',
            'duration' => '4 Years',
            'fees' => '₹85,000 / Yr',
            'mode' => 'Full Time'
        ],
        [
            'name' => 'B.E Electrical & Electronics Engineering (EEE)',
            'short_name' => 'EEE',
            'degree' => 'B.E',
            'duration' => '4 Years',
            'fees' => '₹85,000 / Yr',
            'mode' => 'Full Time'
        ],
        [
            'name' => 'B.Tech Information Technology (IT)',
            'short_name' => 'IT',
            'degree' => 'B.Tech',
            'duration' => '4 Years',
            'fees' => '₹85,000 / Yr',
            'mode' => 'Full Time'
        ],
        [
            'name' => 'Master of Business Administration (MBA)',
            'short_name' => 'MBA',
            'degree' => 'MBA',
            'duration' => '2 Years',
            'fees' => '₹1,50,000 / Yr',
            'mode' => 'Full Time'
        ],
        [
            'name' => 'Master of Computer Applications (MCA)',
            'short_name' => 'MCA',
            'degree' => 'MCA',
            'duration' => '2 Years',
            'fees' => '₹75,000 / Yr',
            'mode' => 'Full Time'
        ],
    ];
@endphp

<!-- Tab Pane 2: Courses & Fee Structure (Encapsulated Clean Parent Card) -->
<div id="pane-courses" class="college-tab-pane hidden">

    <div class="bg-white rounded-2xl border border-border p-6 sm:p-7 shadow-xs space-y-6">
        
        <!-- Header & Top Course Search Box inside parent card -->
        <div class="space-y-4">
            <div>
                <h3 class="text-base sm:text-lg font-bold text-heading">
                    Available Courses & Annual Fee Structure
                </h3>
                <p class="text-xs text-muted mt-0.5">Explore degree programs, duration, and tuition fee details.</p>
            </div>

            <div class="relative">
                <i data-lucide="search" class="w-4 h-4 text-muted absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                <input 
                    type="text" 
                    id="course-tab-search-input"
                    placeholder="Search courses by name or stream..." 
                    oninput="filterCollegeCourses(this.value)"
                    class="w-full pl-10 pr-10 py-3 text-xs sm:text-sm rounded-xl border border-border bg-zinc-50/70 text-heading placeholder-muted focus:bg-white focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand transition-all"
                />
                <button 
                    type="button" 
                    id="clear-course-search" 
                    onclick="clearCourseSearch()"
                    class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-muted hover:text-heading cursor-pointer"
                    title="Clear Search"
                >
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>
        </div>

        <!-- Courses List Container -->
        <div id="courses-list-container" class="space-y-4">
            @foreach ($coursesList as $course)
                <div 
                    class="course-card-item bg-white rounded-xl border border-border/80 px-5 py-6 sm:px-6 sm:py-6 shadow-2xs hover:border-brand/40 hover:shadow-xs transition-all flex flex-col sm:flex-row sm:items-center justify-between gap-4"
                    data-coursename="{{ strtolower($course['name']) }}"
                >
                    <!-- Left: Course Name, Duration & Fees -->
                    <div class="space-y-2">
                        <h4 class="text-sm sm:text-[15px] font-bold text-heading leading-snug">
                            {{ $course['name'] }}
                        </h4>
                        
                        <div class="flex flex-wrap items-center gap-3 sm:gap-6 text-xs text-subheading">
                            <span class="flex items-center gap-1.5 font-medium">
                                <i data-lucide="clock" class="w-3.5 h-3.5 text-muted"></i>
                                <span>Duration: <strong class="text-heading font-semibold">{{ $course['duration'] }}</strong></span>
                            </span>
                            
                            <span class="flex items-center gap-1.5 font-medium">
                                <i data-lucide="banknote" class="w-3.5 h-3.5 text-brand"></i>
                                <span>Fees: <strong class="text-heading font-bold text-brand">{{ $course['fees'] }}</strong></span>
                            </span>
                        </div>
                    </div>

                    <!-- Right: CTA Buttons (Enquire routes to /contact, Call icon-only) -->
                    <div class="flex items-center gap-2 flex-shrink-0 pt-2 sm:pt-0 border-t sm:border-t-0 border-border/60">
                        <a 
                            href="tel:+917358110062" 
                            class="inline-flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl border border-border hover:border-brand hover:text-brand bg-white text-xs font-semibold transition-all cursor-pointer shadow-2xs hover:bg-brand/5"
                            title="Call for Admission Guidance"
                        >
                            <i data-lucide="phone" class="w-4 h-4 text-brand"></i>
                        </a>

                        <a 
                            href="{{ url('/contact') }}" 
                            class="flex-1 sm:flex-none inline-flex items-center justify-center gap-1.5 px-4.5 py-2.5 rounded-xl bg-brand hover:bg-brand-hover text-white text-xs font-semibold transition-all shadow-2xs active:scale-95 cursor-pointer"
                        >
                            <span>Enquire Now</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Empty Search State -->
        <div id="no-courses-matched" class="hidden bg-zinc-50/50 rounded-xl border border-border p-8 text-center">
            <div class="w-12 h-12 rounded-full bg-brand/10 text-brand flex items-center justify-center mx-auto mb-3">
                <i data-lucide="search-x" class="w-6 h-6"></i>
            </div>
            <h4 class="text-sm font-bold text-heading">No matching courses found</h4>
            <p class="text-xs text-muted mt-1">Try searching with a different term like "B.E", "MBA", or "Computer Science".</p>
            <button 
                type="button" 
                onclick="clearCourseSearch()"
                class="mt-3 px-4 py-1.5 rounded-lg bg-zinc-200/80 hover:bg-zinc-200 text-xs font-semibold text-heading transition-colors cursor-pointer"
            >
                Clear Search
            </button>
        </div>

    </div>

    <!-- Inline FAQs for Courses & Fees Tab -->
    <x-college.college-tab-faq 
        title="Courses & Fee Structure FAQs"
    />

</div>

<script>
    function filterCollegeCourses(query) {
        const q = (query || '').toLowerCase().trim();
        const items = document.querySelectorAll('#courses-list-container .course-card-item');
        const emptyState = document.getElementById('no-courses-matched');
        const clearBtn = document.getElementById('clear-course-search');

        if (clearBtn) {
            clearBtn.classList.toggle('hidden', !q);
        }

        let visibleCount = 0;
        items.forEach(item => {
            const name = item.getAttribute('data-coursename') || '';
            if (!q || name.includes(q)) {
                item.style.display = 'flex';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        if (emptyState) {
            emptyState.classList.toggle('hidden', visibleCount > 0);
        }
    }

    function clearCourseSearch() {
        const input = document.getElementById('course-tab-search-input');
        if (input) {
            input.value = '';
            filterCollegeCourses('');
            input.focus();
        }
    }
</script>
