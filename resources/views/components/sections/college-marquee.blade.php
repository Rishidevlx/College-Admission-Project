@php
    $collegeFiles = glob(public_path('images/logo/college/*.*'));
    $baseLogos = array_map(function($path) {
        return asset('images/logo/college/' . basename($path));
    }, $collegeFiles ?: []);

    // Repeat the logos multiple times so the continuous track is wide enough to prevent any trailing white gaps
    $collegeImages = [];
    if (!empty($baseLogos)) {
        for ($i = 0; $i < 3; $i++) {
            $collegeImages = array_merge($collegeImages, $baseLogos);
        }
    }
@endphp

<!-- Partner Institutions Marquee Section (Pure White, Seamless Zero-Gap Infinite Marquee) -->
<section class="bg-white py-8 sm:py-12 overflow-hidden select-none">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6 sm:mb-8 text-center">
        <!-- Standard Section Heading matching Discover / Top Colleges -->
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight">
            Our Partner Institutions
        </h2>
        <!-- Standard Subtitle -->
        <p class="mt-2 text-xs sm:text-sm md:text-base font-normal text-muted leading-relaxed max-w-2xl mx-auto">
            Explore admission opportunities across top-tier universities, autonomous institutions, and accredited colleges in Tamil Nadu.
        </p>
    </div>

    <!-- Infinite Scrolling Track with Left & Right Pure White Gradient Smoke Fade -->
    <div class="relative w-full overflow-hidden">
        
        <!-- Left White Fade Mask -->
        <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-r from-white via-white/80 to-transparent z-10 pointer-events-none"></div>
        
        <!-- Right White Fade Mask -->
        <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-l from-white via-white/80 to-transparent z-10 pointer-events-none"></div>

        <!-- Marquee Row (Continuous Loop with Exact Identical Width for Zero White Gaps) -->
        <div class="animate-marquee flex items-center gap-10 sm:gap-14 md:gap-16 py-2">
            
            <!-- Loop Set 1 -->
            <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0">
                @foreach ($collegeImages as $img)
                    <div class="flex items-center justify-center h-12 sm:h-14 w-auto shrink-0">
                        <img 
                            src="{{ $img }}" 
                            alt="College Partner" 
                            class="h-10 sm:h-12 w-auto max-w-[140px] sm:max-w-[170px] object-contain"
                            loading="eager"
                        />
                    </div>
                @endforeach
            </div>

            <!-- Loop Set 2 (Exact Duplicate for Infinite Loop) -->
            <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0" aria-hidden="true">
                @foreach ($collegeImages as $img)
                    <div class="flex items-center justify-center h-12 sm:h-14 w-auto shrink-0">
                        <img 
                            src="{{ $img }}" 
                            alt="College Partner" 
                            class="h-10 sm:h-12 w-auto max-w-[140px] sm:max-w-[170px] object-contain"
                            loading="eager"
                        />
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</section>
