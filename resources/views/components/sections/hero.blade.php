<!-- Hero Section Component (Desktop Full Viewport Screen, Balanced 2 Columns, 3 Stat/Benefit Cards) -->
<section class="relative min-h-[calc(100vh-5rem)] flex items-center justify-center py-8 sm:py-10 lg:py-0 bg-transparent overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <!-- Equal Grid Columns (lg:grid-cols-2) with Perfect Alignment -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16 items-center">

            <!-- ================= LEFT COLUMN: CENTERED ON MOBILE, LEFT-ALIGNED ON DESKTOP ================= -->
            <div class="flex flex-col text-center sm:text-left items-center sm:items-start justify-center">
                
                <!-- 1. Heading (Matched exactly to other section headings) -->
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight leading-[1.2] sm:leading-[1.18] max-w-xl">
                    Find the Right College & Course in Tamil Nadu.
                </h1>

                <!-- 2. Subtitle -->
                <p class="mt-3 sm:mt-3.5 text-xs sm:text-sm md:text-[15px] text-muted leading-relaxed font-normal max-w-xl mx-auto sm:mx-0">
                    Dedicated admission guidance platform helping 12th standard students choose top accredited colleges, verified courses, and clear cutoff pathways with 100% free counselling.
                </p>

                <!-- 3. 3 Simple, Neat Cards (Clean Grid on Mobile & Desktop) -->
                <div class="mt-5 sm:mt-6 grid grid-cols-3 gap-2 sm:gap-3.5 w-full max-w-lg">
                    
                    <!-- Card 1 -->
                    <div class="bg-[#FEFFFF] border border-zinc-200/80 rounded-xl p-2.5 sm:p-3.5 transition-all text-center sm:text-left flex flex-col items-center sm:items-start">
                        <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-brand/10 text-brand flex items-center justify-center mb-1.5 sm:mb-2">
                            <i data-lucide="shield-check" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                        </div>
                        <h4 class="text-[11px] sm:text-[13px] font-bold text-heading leading-snug">100% Free</h4>
                        <p class="text-[10px] sm:text-[11px] text-muted mt-0.5 leading-tight">Zero Donation</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#FEFFFF] border border-zinc-200/80 rounded-xl p-2.5 sm:p-3.5 transition-all text-center sm:text-left flex flex-col items-center sm:items-start">
                        <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-brand/10 text-brand flex items-center justify-center mb-1.5 sm:mb-2">
                            <i data-lucide="graduation-cap" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                        </div>
                        <h4 class="text-[11px] sm:text-[13px] font-bold text-heading leading-snug">45+ Campuses</h4>
                        <p class="text-[10px] sm:text-[11px] text-muted mt-0.5 leading-tight">NAAC & Auto</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#FEFFFF] border border-zinc-200/80 rounded-xl p-2.5 sm:p-3.5 transition-all text-center sm:text-left flex flex-col items-center sm:items-start">
                        <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-brand/10 text-brand flex items-center justify-center mb-1.5 sm:mb-2">
                            <i data-lucide="map-pin" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                        </div>
                        <h4 class="text-[11px] sm:text-[13px] font-bold text-heading leading-snug">Hopes Center</h4>
                        <p class="text-[10px] sm:text-[11px] text-muted mt-0.5 leading-tight">Coimbatore</p>
                    </div>

                </div>

                <!-- 4. Action Buttons (Centered on Mobile, Left-aligned on Desktop) -->
                <div class="mt-6 sm:mt-7 flex flex-wrap items-center justify-center sm:justify-start gap-2.5 sm:gap-3 w-full">
                    <!-- Browse All Colleges (Primary Brand Button) -->
                    <x-ui.button variant="primary" href="{{ url('/colleges') }}" icon="arrow-right" class="!px-5 !py-2.5 sm:!py-3 !text-xs sm:!text-[13px] font-semibold !rounded-xl">
                        Browse All Colleges
                    </x-ui.button>

                    <!-- Talk to Expert CTA -->
                    <x-ui.outline-button href="tel:+917358110062" icon="phone-call" class="!px-5 !py-2 sm:!py-2.5 !text-xs sm:!text-[13px] !border-2 !border-brand hover:!bg-brand hover:!text-white hover:!border-brand !rounded-xl !shadow-none font-semibold">
                        Talk to Expert
                    </x-ui.outline-button>
                </div>

            </div>

            <!-- ================= RIGHT COLUMN: FORM CARD IN #FEFFFF, NO BOXSHADOW ================= -->
            <div class="flex justify-center lg:justify-end w-full mt-4 lg:mt-0">
                <div class="w-full max-w-md bg-[#FEFFFF] rounded-2xl border border-zinc-200 p-4 sm:p-5 md:p-6 transition-all mx-auto lg:mx-0">
                    <x-ui.enquiry-form 
                        prefix="hero" 
                        title="Check College Seats & Fees"
                        badgeText="100% Free"
                        subtitle="Get verified cutoffs, fee quotes & seat status in 5 mins."
                    />
                </div>
            </div>

        </div>
    </div>

</section>
