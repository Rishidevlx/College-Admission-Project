@php
    $companyFiles = glob(public_path('images/logo/company/*.*'));
    $baseCompanies = array_map(function($path) {
        return asset('images/logo/company/' . basename($path));
    }, $companyFiles ?: []);

    // Repeat companies so the track is always completely packed on 4K/Desktop displays without trailing empty spaces
    $packedCompanies = [];
    if (!empty($baseCompanies)) {
        for ($i = 0; $i < 3; $i++) {
            $packedCompanies = array_merge($packedCompanies, $baseCompanies);
        }
    }

    $count = count($packedCompanies);
    $row1 = $packedCompanies;
    $row2 = $count > 1 ? array_merge(array_slice($packedCompanies, 1), array_slice($packedCompanies, 0, 1)) : $packedCompanies;
    $row3 = $count > 2 ? array_merge(array_slice($packedCompanies, 2), array_slice($packedCompanies, 0, 2)) : $packedCompanies;
    $row4 = $count > 3 ? array_merge(array_slice($packedCompanies, 3), array_slice($packedCompanies, 0, 3)) : $packedCompanies;
@endphp

<!-- "Where Our Students Get Hired" Section (Pure White, 4 Alternating Marquee Rows + 2 CTA Buttons) -->
<section class="bg-white py-12 sm:py-16 md:py-20 overflow-hidden select-none">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8 sm:mb-12 text-center">
        <!-- Section Heading -->
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight">
            Where Our Students Get Hired
        </h2>
        <!-- Subtitle -->
        <p class="mt-2 text-xs sm:text-sm md:text-base font-normal text-muted leading-relaxed max-w-2xl mx-auto">
            Graduates from our partner colleges launch thriving careers at India's leading MNCs, Fortune 500 enterprises, and fast-growing tech giants.
        </p>
    </div>

    <!-- 4 Alternating Direction Rows Container -->
    <div class="space-y-4 sm:space-y-6 relative w-full overflow-hidden">
        
        <!-- Global Left & Right Pure White Gradient Smoke Masks -->
        <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-r from-white via-white/80 to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-l from-white via-white/80 to-transparent z-10 pointer-events-none"></div>

        <!-- ================= ROW 1: RIGHT TO LEFT ================= -->
        <div class="relative w-full overflow-hidden">
            <div class="animate-marquee flex items-center gap-10 sm:gap-14 md:gap-16 py-1.5">
                <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0">
                    @foreach ($row1 as $img)
                        <div class="flex items-center justify-center h-11 sm:h-13 w-auto shrink-0">
                            <img src="{{ $img }}" alt="Recruiting Partner" class="h-9 sm:h-11 w-auto max-w-[130px] sm:max-w-[160px] object-contain" loading="eager" />
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0" aria-hidden="true">
                    @foreach ($row1 as $img)
                        <div class="flex items-center justify-center h-11 sm:h-13 w-auto shrink-0">
                            <img src="{{ $img }}" alt="Recruiting Partner" class="h-9 sm:h-11 w-auto max-w-[130px] sm:max-w-[160px] object-contain" loading="eager" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- ================= ROW 2: LEFT TO RIGHT (REVERSE) ================= -->
        <div class="relative w-full overflow-hidden">
            <div class="animate-marquee-reverse flex items-center gap-10 sm:gap-14 md:gap-16 py-1.5">
                <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0">
                    @foreach ($row2 as $img)
                        <div class="flex items-center justify-center h-11 sm:h-13 w-auto shrink-0">
                            <img src="{{ $img }}" alt="Recruiting Partner" class="h-9 sm:h-11 w-auto max-w-[130px] sm:max-w-[160px] object-contain" loading="eager" />
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0" aria-hidden="true">
                    @foreach ($row2 as $img)
                        <div class="flex items-center justify-center h-11 sm:h-13 w-auto shrink-0">
                            <img src="{{ $img }}" alt="Recruiting Partner" class="h-9 sm:h-11 w-auto max-w-[130px] sm:max-w-[160px] object-contain" loading="eager" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- ================= ROW 3: RIGHT TO LEFT ================= -->
        <div class="relative w-full overflow-hidden">
            <div class="animate-marquee flex items-center gap-10 sm:gap-14 md:gap-16 py-1.5">
                <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0">
                    @foreach ($row3 as $img)
                        <div class="flex items-center justify-center h-11 sm:h-13 w-auto shrink-0">
                            <img src="{{ $img }}" alt="Recruiting Partner" class="h-9 sm:h-11 w-auto max-w-[130px] sm:max-w-[160px] object-contain" loading="eager" />
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0" aria-hidden="true">
                    @foreach ($row3 as $img)
                        <div class="flex items-center justify-center h-11 sm:h-13 w-auto shrink-0">
                            <img src="{{ $img }}" alt="Recruiting Partner" class="h-9 sm:h-11 w-auto max-w-[130px] sm:max-w-[160px] object-contain" loading="eager" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- ================= ROW 4: LEFT TO RIGHT (REVERSE) ================= -->
        <div class="relative w-full overflow-hidden">
            <div class="animate-marquee-reverse flex items-center gap-10 sm:gap-14 md:gap-16 py-1.5">
                <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0">
                    @foreach ($row4 as $img)
                        <div class="flex items-center justify-center h-11 sm:h-13 w-auto shrink-0">
                            <img src="{{ $img }}" alt="Recruiting Partner" class="h-9 sm:h-11 w-auto max-w-[130px] sm:max-w-[160px] object-contain" loading="eager" />
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0" aria-hidden="true">
                    @foreach ($row4 as $img)
                        <div class="flex items-center justify-center h-11 sm:h-13 w-auto shrink-0">
                            <img src="{{ $img }}" alt="Recruiting Partner" class="h-9 sm:h-11 w-auto max-w-[130px] sm:max-w-[160px] object-contain" loading="eager" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <!-- 2 Action Buttons (Call Now Button on Left + Contact Page Button on Right) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10 sm:mt-12 md:mt-14 flex flex-col sm:flex-row items-center justify-center gap-3.5 sm:gap-5">
        
        <!-- Left: Call Now Button -->
        <a 
            href="tel:+917358110062" 
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3 rounded-xl bg-brand text-white text-xs sm:text-sm font-semibold hover:bg-brand-hover shadow-xs active:scale-95 transition-all"
        >
            <i data-lucide="phone-call" class="w-4 h-4"></i>
            <span>Call Now: +91-7358110062</span>
        </a>

        <!-- Right: Contact Page Button -->
        <a 
            href="{{ url('/contact') }}" 
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3 rounded-xl bg-white border border-border text-heading text-xs sm:text-sm font-semibold hover:border-brand hover:text-brand hover:bg-brand/5 shadow-xs active:scale-95 transition-all"
        >
            <i data-lucide="mail" class="w-4 h-4 text-brand"></i>
            <span>Contact Admission Desk</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-muted"></i>
        </a>

    </div>

</section>
