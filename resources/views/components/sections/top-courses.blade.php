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
<section id="courses" class="relative py-12 sm:py-16 lg:py-20 bg-white border-t border-border/50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header (Clean Minimalist Left-Aligned) -->
        <div class="max-w-2xl mb-8 sm:mb-10">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight">
                Explore Courses & Programs
            </h2>
            <p class="mt-2 text-[14px] sm:text-base font-normal text-muted leading-relaxed">
                Find the right course for your academic and career goals.
            </p>
        </div>

        <!-- Reusable Course Table Component -->
        <div class="relative">
            <x-ui.course-table :courses="$courses" />
        </div>

        <!-- Course CTA Banner Component (Dedicated to Courses with User Reference Image) -->
        <div class="mt-8 sm:mt-10 lg:mt-12">
            <x-ui.cta-banner 
                title="Choose the right Course for your future"
                button-text="Explore Courses"
                button-link="#courses"
                image="{{ asset('images/assets/course-cta-student.png') }}"
            />
        </div>

    </div>
</section>

