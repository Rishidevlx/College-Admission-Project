@props([
    'id' => '',
    'name' => '',
    'city' => '',
    'stream' => '',
    'type' => 'Autonomous',
    'image' => '',
    'logo' => '',
    'accreditation' => 'NAAC A++',
    'nirf' => '',
    'courses' => '',
    'fees' => '',
    'cutoff' => '',
    'rating' => '4.6',
    'reviews' => '120+',
    'link' => '#',
])

<!-- Directory Finder College Card Component (Horizontal on Desktop, Responsive Stack on Mobile) -->
<article 
    class="finder-college-item group bg-white border border-border rounded-2xl overflow-hidden hover:border-brand hover:shadow-lg hover:shadow-brand/10 transition-all duration-300 flex flex-col md:flex-row"
    data-name="{{ strtolower($name) }}"
    data-city="{{ $city }}"
    data-stream="{{ $stream }}"
    data-type="{{ $type }}"
    data-fees="{{ $fees }}"
>
    <!-- Left: Campus Image Container -->
    <div class="relative w-full md:w-60 lg:w-64 h-48 md:h-auto flex-shrink-0 bg-zinc-900 overflow-hidden">
        <img 
            src="{{ $image }}" 
            alt="{{ $name }}" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
        />
        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-black/70 via-black/20 to-transparent"></div>
        
        <!-- Accreditation / Rank Badges on Image -->
        <div class="absolute top-3 left-3 flex flex-wrap gap-1.5 z-10">
            <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-white/95 text-heading shadow-xs">
                {{ $accreditation }}
            </span>
            @if ($nirf)
                <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-brand text-white shadow-xs">
                    {{ $nirf }}
                </span>
            @endif
        </div>

        <!-- Rating Pill -->
        <div class="absolute bottom-3 left-3 flex items-center gap-1 px-2 py-0.5 rounded-full bg-black/60 backdrop-blur-xs text-white text-xs font-bold z-10">
            <span class="text-amber-400">★</span>
            <span>{{ $rating }}</span>
            <span class="text-[10px] text-zinc-300 font-normal">({{ $reviews }})</span>
        </div>
    </div>

    <!-- Right: College Details & Specs -->
    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
        
        <div>
            <!-- Header Row: Name & College Type -->
            <div class="flex items-start justify-between gap-3">
                <div class="min-w-0 flex-1">
                    <div class="flex items-center gap-2">
                        @if ($logo)
                            <img src="{{ $logo }}" alt="{{ $name }} Logo" class="w-6 h-6 rounded-full object-contain border border-border" />
                        @endif
                        <span class="text-xs font-semibold text-brand tracking-wide uppercase">
                            {{ $type }}
                        </span>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-heading mt-1 leading-snug group-hover:text-brand transition-colors">
                        {{ $name }}
                    </h3>
                </div>

                <div class="flex items-center gap-1 text-xs text-muted font-medium flex-shrink-0">
                    <i data-lucide="map-pin" class="w-3.5 h-3.5 text-brand"></i>
                    <span>{{ $city }}</span>
                </div>
            </div>

            <!-- Key Info Specs Grid -->
            <div class="mt-4 grid grid-cols-2 sm:grid-cols-3 gap-2.5 p-3 rounded-xl bg-zinc-50/70 border border-border/70 text-xs">
                <div>
                    <span class="text-muted block text-[11px]">Primary Courses</span>
                    <span class="font-semibold text-heading truncate block mt-0.5">{{ $courses }}</span>
                </div>
                <div>
                    <span class="text-muted block text-[11px]">Avg Annual Fees</span>
                    <span class="font-bold text-heading block mt-0.5">{{ $fees }}</span>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <span class="text-muted block text-[11px]">Admission / Cutoff</span>
                    <span class="font-semibold text-brand block mt-0.5">{{ $cutoff }}</span>
                </div>
            </div>
        </div>

        <!-- Card Footer Actions: Enquire Now & View Details -->
        <div class="mt-4 pt-3.5 border-t border-border/70 flex items-center justify-between gap-3">
            <a 
                href="{{ $link }}" 
                class="inline-flex items-center gap-1 text-xs sm:text-[13px] font-semibold text-heading hover:text-brand transition-colors group/btn"
            >
                <span>View Full Profile</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 transform group-hover/btn:translate-x-1 transition-transform"></i>
            </a>

            <div class="flex items-center gap-2">
                <a 
                    href="tel:+917358110062" 
                    class="hidden sm:inline-flex items-center justify-center w-8 h-8 rounded-lg border border-border text-muted hover:text-brand hover:border-brand hover:bg-brand/5 transition-all"
                    title="Call for Guidance"
                >
                    <i data-lucide="phone" class="w-3.5 h-3.5"></i>
                </a>
                
                <a 
                    href="tel:+917358110062" 
                    class="inline-flex items-center justify-center gap-1.5 px-4 py-2 rounded-xl text-xs sm:text-[13px] font-semibold text-white bg-brand hover:bg-brand-hover active:scale-95 transition-all duration-200 shadow-xs hover:shadow-md cursor-pointer"
                >
                    <span>Enquire Now</span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </div>

    </div>
</article>

