@php
    $colleges = [
        [
            'name' => 'PSG College of Technology',
            'location' => 'Coimbatore, Tamil Nadu',
            'accreditation' => 'Autonomous • NAAC A++ • NIRF #63',
            'image' => asset('images/colleges/psg-tech.jpg'),
            'logo' => asset('images/colleges/logos/psg-logo.svg'),
            'course' => 'B.Tech Artificial Intelligence & Data Science',
            'duration' => '4 Years • Full Time',
            'fees' => '₹2.40 Lakhs',
            'rating' => '4.8',
            'reviews' => '320 reviews',
            'status' => 'Open',
            'link' => '#psg-tech',
        ],
        [
            'name' => 'SSN College of Engineering',
            'location' => 'Chennai, Tamil Nadu',
            'accreditation' => 'Autonomous • NAAC A++ • NIRF #45',
            'image' => asset('images/colleges/ssn.jpg'),
            'logo' => asset('images/colleges/logos/ssn-logo.svg'),
            'course' => 'B.E Computer Science & Engineering',
            'duration' => '4 Years • Full Time',
            'fees' => '₹2.20 Lakhs',
            'rating' => '4.7',
            'reviews' => '280 reviews',
            'status' => 'Open',
            'link' => '#ssn-chennai',
        ],
        [
            'name' => 'Coimbatore Institute of Technology',
            'location' => 'Coimbatore, Tamil Nadu',
            'accreditation' => 'Govt Aided • NAAC A+ • Anna Univ',
            'image' => asset('images/colleges/cit.jpg'),
            'logo' => asset('images/colleges/logos/cit-logo.svg'),
            'course' => 'B.Tech Information Technology',
            'duration' => '4 Years • Full Time',
            'fees' => '₹1.80 Lakhs',
            'rating' => '4.6',
            'reviews' => '190 reviews',
            'status' => 'Open',
            'link' => '#cit-coimbatore',
        ],
        [
            'name' => 'Loyola College',
            'location' => 'Chennai, Tamil Nadu',
            'accreditation' => 'Autonomous • NAAC A++ (CGPA 3.72)',
            'image' => asset('images/colleges/loyola.jpg'),
            'logo' => asset('images/colleges/logos/loyola-logo.svg'),
            'course' => 'B.Sc Computer Science & Data Analytics',
            'duration' => '3 Years • Full Time',
            'fees' => '₹1.45 Lakhs',
            'rating' => '4.9',
            'reviews' => '410 reviews',
            'status' => 'Limited',
            'link' => '#loyola-chennai',
        ],
        [
            'name' => 'Kumaraguru College of Technology',
            'location' => 'Coimbatore, Tamil Nadu',
            'accreditation' => 'Autonomous • NAAC A++ • ISO Certified',
            'image' => asset('images/colleges/kct.jpg'),
            'logo' => asset('images/colleges/logos/kct-logo.svg'),
            'course' => 'B.Tech AI & Machine Learning',
            'duration' => '4 Years • Full Time',
            'fees' => '₹2.10 Lakhs',
            'rating' => '4.6',
            'reviews' => '215 reviews',
            'status' => 'Open',
            'link' => '#kct-coimbatore',
        ],
        [
            'name' => 'Thiagarajar College of Engineering',
            'location' => 'Madurai, Tamil Nadu',
            'accreditation' => 'Govt Aided • Autonomous • NAAC A+',
            'image' => asset('images/colleges/tce.jpg'),
            'logo' => asset('images/colleges/logos/tce-logo.svg'),
            'course' => 'B.E Computer Science & Business Systems',
            'duration' => '4 Years • Full Time',
            'fees' => '₹1.75 Lakhs',
            'rating' => '4.7',
            'reviews' => '185 reviews',
            'status' => 'Open',
            'link' => '#tce-madurai',
        ],
    ];
@endphp

<!-- "Explore Top Colleges" Section (Pure White Background, Non-Scrollable 3x2 Grid) -->
<section id="colleges" class="relative py-12 sm:py-16 lg:py-24 bg-white border-t border-border/50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header (Clean Minimalist Left-Aligned) -->
        <div class="max-w-2xl mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight">
                Explore Top Colleges
            </h2>
            <p class="mt-2 text-[14px] sm:text-base font-normal text-muted leading-relaxed">
                Compare verified programmes, total fee structures, accreditations, and admission status across Tamil Nadu.
            </p>
        </div>

        <!-- 3 Cards per Row x 2 Rows Grid: SVGs strictly on 1st row 3rd card, and 2nd row 1st & 3rd card -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 lg:gap-8 items-stretch relative">
            
            @foreach ($colleges as $index => $college)
                <div class="relative h-full flex flex-col">
                    
                    <!-- ================= SINGLE DECORATIVE SVG PER SELECTED CARD ================= -->
                    
                    <!-- 1st Row, 3rd Card (CIT): Single Donut Ring at Top-Right -->
                    @if ($index === 2)
                        <div class="hidden sm:block absolute -right-6 -top-6 w-20 h-20 -z-10 pointer-events-none opacity-85">
                            <img src="{{ asset('images/assets/decor-ring.svg') }}" alt="decor" class="w-full h-full object-contain" />
                        </div>
                    @endif

                    <!-- 2nd Row, 1st Card (Loyola): Single Diagonal Stripes at Bottom-Left -->
                    @if ($index === 3)
                        <div class="hidden sm:block absolute -left-6 -bottom-5 w-16 h-16 -z-10 pointer-events-none opacity-80">
                            <img src="{{ asset('images/assets/decor-diagonal-stripes.svg') }}" alt="decor" class="w-full h-full object-contain" />
                        </div>
                    @endif

                    <!-- 2nd Row, 3rd Card (TCE): Single Zigzag Waves at Bottom-Right (CCBP Style) -->
                    @if ($index === 5)
                        <div class="hidden sm:block absolute -right-7 -bottom-6 w-24 sm:w-28 -z-10 pointer-events-none opacity-85">
                            <img src="{{ asset('images/assets/decor-zigzag.svg') }}" alt="decor" class="w-full h-full object-contain" />
                        </div>
                    @endif

                    <!-- The College Card -->
                    <x-ui.college-card 
                        :name="$college['name']"
                        :location="$college['location']"
                        :accreditation="$college['accreditation']"
                        :image="$college['image']"
                        :logo="$college['logo']"
                        :course="$college['course']"
                        :duration="$college['duration']"
                        :fees="$college['fees']"
                        :rating="$college['rating']"
                        :reviews="$college['reviews']"
                        :status="$college['status']"
                        :link="$college['link']"
                    />

                </div>
            @endforeach

        </div>

        <!-- Dedicated Reusable CTA Banner Component -->
        <div class="mt-10 sm:mt-12">
            <x-ui.cta-banner />
        </div>

    </div>
</section>