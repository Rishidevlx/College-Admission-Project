@php
    $courses = [
        [
            'name' => 'B.Tech',
            'full_name' => 'Bachelor of Technology',
            'icon' => 'cpu',
            'duration' => '4 Years',
            'eligibility' => '12th with PCM (50%+)',
            'fees' => '₹1.80L - ₹3.50L / Yr',
            'link' => url('/colleges?stream=Engineering'),
        ],
        [
            'name' => 'MBA',
            'full_name' => 'Master of Business Administration',
            'icon' => 'briefcase',
            'duration' => '2 Years',
            'eligibility' => 'UG Degree in any stream (50%+)',
            'fees' => '₹2.00L - ₹5.50L / Yr',
            'link' => url('/colleges?stream=Management'),
        ],
        [
            'name' => 'BCA',
            'full_name' => 'Bachelor of Computer Applications',
            'icon' => 'laptop',
            'duration' => '3 Years',
            'eligibility' => '12th Pass (Maths / CS preferred)',
            'fees' => '₹80K - ₹1.60L / Yr',
            'link' => url('/colleges?stream=Science'),
        ],
        [
            'name' => 'MBBS',
            'full_name' => 'Bachelor of Medicine & Surgery',
            'icon' => 'heart-pulse',
            'duration' => '5.5 Years',
            'eligibility' => '12th with PCB (NEET-UG)',
            'fees' => '₹4.50L - ₹14.00L / Yr',
            'link' => url('/colleges?stream=Medical'),
        ],
        [
            'name' => 'B.Sc (CS)',
            'full_name' => 'Computer Science & Data Science',
            'icon' => 'code-2',
            'duration' => '3 Years',
            'eligibility' => '12th with Mathematics',
            'fees' => '₹60K - ₹1.40L / Yr',
            'link' => url('/colleges?stream=Science'),
        ],
    ];
@endphp

<!-- "Explore Courses & Programs" Table Section (Pure White Theme) -->
<section id="courses" class="relative py-12 sm:py-16 lg:py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header with Right-Side "Explore Programs" Link -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8 sm:mb-10">
            <div class="max-w-2xl">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight">
                    Explore Courses & Programs
                </h2>
                <p class="mt-2 text-[14px] sm:text-base font-normal text-muted leading-relaxed">
                    Find the right course for your academic and career goals.
                </p>
            </div>

            <!-- Right-Side Explore Link with Arrow in Brand Color -->
            <a 
                href="{{ url('/colleges') }}" 
                class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-semibold text-brand hover:text-brand-hover hover:underline transition-colors shrink-0 group"
            >
                <span>Explore Programs</span>
                <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        <!-- Reusable Course Table Component -->
        <div class="relative">
            <x-ui.course-table :courses="$courses" />
        </div>

        <!-- Placement Achievement CTA Card -->
        <div class="mt-10 sm:mt-12 lg:mt-14">
            <x-sections.placement-achievement-cta />
        </div>

    </div>
</section>

