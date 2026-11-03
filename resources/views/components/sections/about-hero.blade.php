<!-- About Hero Section (2-Column Split Layout matching upGrad reference) -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 xl:gap-20 items-center">
        
        <!-- Left Column: Inspiring Headline, Mission Statement & Expert CTA -->
        <div class="lg:col-span-7 flex flex-col justify-center text-left pr-0 lg:pr-4">
            
            <!-- Main Impact Heading -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[50px] xl:text-[54px] font-extrabold text-heading tracking-tight leading-[1.18] sm:leading-[1.14]">
                We are <span class="text-brand">Tamil Nadu's Premier Higher Education</span> Admission Platform.
            </h1>

            <!-- Paragraph Content -->
            <p class="mt-5 sm:mt-7 text-sm sm:text-base md:text-lg text-subheading font-normal leading-relaxed max-w-2xl">
                Empowering thousands of 12th standard students across Tamil Nadu, NextSkill leverages verified cutoffs, direct institutional tie-ups, and experienced academic mentors to make higher education simple, transparent, and donation-free. Our mission? To redefine college counselling by making quality higher education accessible to every aspiring student.
            </p>

            <!-- CTA Button -->
            <div class="mt-8 sm:mt-10 flex items-center">
                <x-ui.button 
                    variant="primary" 
                    href="tel:+917358110062" 
                    icon="phone-call"
                    class="!px-7 sm:!px-8 !py-3.5 sm:!py-4 !text-sm sm:!text-base !rounded-xl font-semibold shadow-md shadow-brand/15 hover:shadow-lg hover:shadow-brand/25"
                >
                    Talk to an admission expert
                </x-ui.button>
            </div>

        </div>

        <!-- Right Column: Rounded Placeholder Image (upGrad Style with large smooth corner radius) -->
        <div class="lg:col-span-5 flex justify-center lg:justify-end w-full">
            <div class="w-full max-w-lg lg:max-w-none">
                
                <!-- Image Container with Smooth 32px / 36px Rounded Corners -->
                <div class="w-full aspect-[4/3] sm:aspect-[16/12] lg:aspect-[4/3] rounded-[28px] sm:rounded-[36px] overflow-hidden shadow-2xl shadow-black/10 border border-border/60 bg-zinc-100 relative group">
                    <img 
                        src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80" 
                        alt="College students celebrating graduation" 
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='{{ asset('images/assets/admission-cta-student.png') }}';"
                    />
                    <!-- Subtle Ambient Bottom Shadow Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent pointer-events-none"></div>
                </div>

            </div>
        </div>

    </div>
</section>

