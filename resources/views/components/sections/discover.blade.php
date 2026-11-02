<!-- "Discover Your Next Step" Section (Desktop 100vh Full Screen + Mobile Responsive Uniform Cards) -->
<section class="relative lg:min-h-screen flex flex-col justify-center pt-2 pb-12 sm:py-14 lg:py-16 bg-white overflow-hidden">
    
    <!-- Top Smoke Mist Fade: Blends Hero ambient glow into pure white section seamlessly (Zero cut lines) -->
    <div class="absolute -top-16 sm:-top-24 inset-x-0 h-24 sm:h-32 bg-gradient-to-b from-transparent via-white/80 to-white pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        
        <!-- Section Header (Figma Inspired: Clean Left-Aligned with Context) -->
        <div class="max-w-2xl mb-6 sm:mb-8 lg:mb-10">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight">
                Discover Your Next Step
            </h2>
            <p class="mt-2 text-[14px] sm:text-base font-normal text-muted leading-relaxed">
                Explore accredited institutions, in-demand degree programs, scholarships, and free counselling across Tamil Nadu.
            </p>
        </div>

        <!-- Figma Bento Grid Layout: Equal Bottom Line on Desktop & Uniform Layout on Mobile -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-5 lg:gap-6 items-stretch">
            
            <!-- ================= LEFT COLUMN (lg:col-span-6): 3 Stat Cards + 2 Wide Cards ================= -->
            <div class="lg:col-span-6 flex flex-col gap-4 sm:gap-5 lg:gap-6 h-full">
                
                <!-- 3 Kutty Stat Cards Row (Clean Minimalist Figma Style) -->
                <div class="grid grid-cols-3 gap-3 sm:gap-4 flex-shrink-0">
                    <x-ui.stat-card 
                        count="500+" 
                        label="Colleges" 
                    />
                    <x-ui.stat-card 
                        count="25K+" 
                        label="Students Guided" 
                    />
                    <x-ui.stat-card 
                        count="150+" 
                        label="Courses" 
                    />
                </div>

                <!-- Card 1: Find Colleges (Figma "Our Commitment" Slot) -->
                <x-ui.discover-card 
                    layout="horizontal"
                    title="Find Colleges"
                    description="Discover top accredited engineering, arts, and science colleges across Tamil Nadu."
                    :tags="['Autonomous', 'NAAC A++', 'Govt Quota']"
                    image="{{ asset('images/vectors/find-colleges.png') }}"
                    link="{{ url('/colleges') }}"
                    linkText="Explore Colleges"
                    class="flex-1"
                />

                <!-- Card 2: Free Admission Counselling (Figma "Customer Focus" Slot - Card 5) -->
                <x-ui.discover-card 
                    layout="horizontal"
                    title="Free Admission Counselling"
                    description="Speak directly with education counselors for personalized advice."
                    :tags="['1-on-1 Call', 'Seat Availability', 'Fee Details']"
                    image="{{ asset('images/vectors/counselling.png') }}"
                    link="#counselling"
                    linkText="Request Call Back"
                    class="flex-1"
                />

            </div>

            <!-- ================= MIDDLE COLUMN (lg:col-span-3): Course Finder + Scholarships ================= -->
            <div class="lg:col-span-3 flex flex-col gap-4 sm:gap-5 lg:gap-6 h-full">
                
                <!-- Card 3: Course Finder (Figma "Innovation" Slot) -->
                <x-ui.discover-card 
                    layout="vertical"
                    title="Course Finder"
                    description="Explore trending degree programs in AI & DS, Computer Science, Commerce, and Management."
                    :tags="['AI & DS', 'B.E CSE', 'B.Com CA']"
                    image="{{ asset('images/vectors/course-finder.png') }}"
                    link="#courses"
                    linkText="Explore Courses"
                    class="flex-1"
                />

                <!-- Card 4: Scholarships & Fees Guide (Figma "Collaboration" Slot) -->
                <x-ui.discover-card 
                    layout="vertical"
                    title="Scholarships & Fees Guide"
                    description="Explore government scholarships, 7.5% school quota, and fee waivers."
                    :tags="['First Graduate', '7.5% Quota', 'Post-Matric']"
                    image="{{ asset('images/vectors/scholarships.png') }}"
                    link="#scholarships"
                    linkText="Check Eligibility"
                    class="flex-1"
                />

            </div>

            <!-- ================= RIGHT COLUMN (lg:col-span-3): Tall Explore Locations + Trust Badge ================= -->
            <div class="lg:col-span-3 flex flex-col gap-4 sm:gap-5 lg:gap-6 h-full">
                
                <!-- Card 5: Explore Locations (Figma "Quality" Tall Slot) -->
                <x-ui.discover-card 
                    layout="tall"
                    title="Explore Locations"
                    description="Search top institutions near Coimbatore, Chennai, Madurai, Trichy, and Salem."
                    :tags="['Coimbatore (45+)', 'Chennai (60+)', 'Trichy']"
                    image="{{ asset('images/vectors/locations.png') }}"
                    link="#locations"
                    linkText="Browse Districts"
                    class="flex-[1.35]"
                />

                <!-- Card 6: 100% Free Guidance (Figma "Security" Slot - Balanced Layout) -->
                <x-ui.discover-card 
                    layout="vertical"
                    title="100% Free Guidance"
                    description="Direct admissions with verified NAAC & NIRF colleges. Zero donation."
                    :tags="['Govt Approved', 'Zero Donation']"
                    image="{{ asset('images/vectors/admission-steps.png') }}"
                    link="#contact"
                    linkText="Learn More"
                    class="flex-1"
                />

            </div>

        </div>

    </div>
</section>