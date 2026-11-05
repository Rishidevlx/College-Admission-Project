@php
    $collegeFiles = glob(public_path('images/logo/college/*.*'));
    $baseLogos = array_map(function($path) {
        return asset('images/logo/college/' . basename($path));
    }, $collegeFiles ?: []);

    // Pack logos so it loops continuously
    $miniLogos = [];
    if (!empty($baseLogos)) {
        for ($i = 0; $i < 3; $i++) {
            $miniLogos = array_merge($miniLogos, $baseLogos);
        }
    }
@endphp

<!-- Placement Achievement CTA Card (#FEFFFF Background, Compact Height) -->
<div class="relative w-full rounded-2xl sm:rounded-3xl bg-[#FEFFFF] border border-brand/20 shadow-sm overflow-hidden px-5 py-6 sm:px-8 sm:py-7 lg:px-10 lg:py-7 select-none">
    
    <!-- Subtle Brand Glow in background -->
    <div class="absolute -top-24 -left-24 w-72 h-72 bg-brand/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-72 h-72 bg-brand/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
        
        <!-- Left Content Area (Columns 1-7) -->
        <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left">

            <!-- SEO Friendly Heading (Starts with text rather than numbers) -->
            <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-[32px] font-extrabold text-heading tracking-tight leading-snug">
                Students from Our Recommended Colleges Secure Up to <span class="text-brand">₹30 – ₹40 LPA</span> Packages
            </h3>

            <!-- Supportive Text -->
            <p class="mt-2 text-xs sm:text-sm md:text-base font-normal text-subheading leading-relaxed max-w-xl">
                Get direct admission guidance to top accredited institutions offering premier placements in leading global tech giants and core enterprises.
            </p>

            <!-- Mini College Logo Infinite Marquee Track (Clean without label) -->
            @if(!empty($miniLogos))
                <div class="my-4 w-full max-w-lg overflow-hidden relative">
                    <div class="relative w-full overflow-hidden">
                        <!-- Left & Right Fade Masks for Mini Track -->
                        <div class="absolute left-0 top-0 bottom-0 w-8 bg-gradient-to-r from-[#FEFFFF] to-transparent z-10 pointer-events-none"></div>
                        <div class="absolute right-0 top-0 bottom-0 w-8 bg-gradient-to-l from-[#FEFFFF] to-transparent z-10 pointer-events-none"></div>
                        
                        <div class="animate-marquee flex items-center gap-6 sm:gap-8 py-0.5">
                            <div class="flex items-center gap-6 sm:gap-8 shrink-0">
                                @foreach ($miniLogos as $logo)
                                    <div class="flex items-center justify-center h-7 w-auto shrink-0 grayscale hover:grayscale-0 transition-all opacity-75 hover:opacity-100">
                                        <img src="{{ $logo }}" alt="Partner College" class="h-5 sm:h-6 w-auto max-w-[80px] object-contain" loading="eager" />
                                    </div>
                                @endforeach
                            </div>
                            <div class="flex items-center gap-6 sm:gap-8 shrink-0" aria-hidden="true">
                                @foreach ($miniLogos as $logo)
                                    <div class="flex items-center justify-center h-7 w-auto shrink-0 grayscale hover:grayscale-0 transition-all opacity-75 hover:opacity-100">
                                        <img src="{{ $logo }}" alt="Partner College" class="h-5 sm:h-6 w-auto max-w-[80px] object-contain" loading="eager" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Action Button: SEO Friendly "Apply for Top College Admission" / "Check Eligibility & Seats" -->
            <div>
                <a 
                    href="{{ url('/contact') }}" 
                    class="inline-flex items-center justify-center gap-2 px-6 py-2.5 sm:px-7 sm:py-3 rounded-xl bg-brand hover:bg-brand-hover text-white text-xs sm:text-sm md:text-base font-semibold shadow-sm hover:shadow-md transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0"
                >
                    <span>Check Eligibility &amp; Admission</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

        </div>

        <!-- Right Side: Cutout Vector Image (Compact sizing) -->
        <div class="lg:col-span-5 flex items-center justify-center">
            <div class="relative w-full max-w-[240px] sm:max-w-[280px] lg:max-w-[340px]">
                <img 
                    src="{{ asset('images/vectors/CTA.png') }}" 
                    alt="Student Placement Success and Career Opportunities" 
                    class="w-full h-auto object-contain drop-shadow-sm mx-auto"
                    loading="lazy"
                />
            </div>
        </div>

    </div>

</div>
