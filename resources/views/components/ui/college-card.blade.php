@props([
    'name' => '',
    'location' => '',
    'accreditation' => '',
    'image' => '',
    'logo' => '',
    'course' => '',
    'duration' => '4 Years • Full Time',
    'fees' => '',
    'rating' => '4.5',
    'reviews' => '100+ reviews',
    'status' => 'Open', // 'Open' | 'Limited' | 'Closed'
    'link' => '#',
])

<!-- Global Reusable College Card Component (Clean Line List Style, Consistent Theme Colors) -->
<div {{ $attributes->merge(['class' => 'group relative bg-white border border-border rounded-2xl overflow-hidden shadow-xs hover:border-brand hover:shadow-lg hover:shadow-brand/15 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full']) }}>

    <!-- ================= 1. CAMPUS BANNER WITH OVERLAID COLLEGE IDENTITY ================= -->
    <div class="relative w-full h-44 sm:h-48 overflow-hidden bg-zinc-900 flex-shrink-0">
        <!-- Campus Cover Image (Static: Zoom Effect Removed) -->
        @if ($image)
            <img 
                src="{{ $image }}" 
                alt="{{ $name }}" 
                class="w-full h-full object-cover"
                loading="lazy"
            />
        @else
            <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900 flex items-center justify-center">
                <i data-lucide="building-2" class="w-12 h-12 text-zinc-600"></i>
            </div>
        @endif

        <!-- Dark Gradient Vignette for Clear Text Legibility -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>

        <!-- College Logo & College Name Overlaid Directly on Top of Card Image (No Hover Color Change) -->
        <div class="absolute bottom-3.5 inset-x-3.5 flex items-center gap-3 z-10">
            <!-- Circular College Logo -->
            @if ($logo)
                <div class="flex-shrink-0 w-11 h-11 sm:w-12 sm:h-12 rounded-full border-2 border-white/90 shadow-md bg-white overflow-hidden p-0.5">
                    <img src="{{ $logo }}" alt="{{ $name }} Logo" class="w-full h-full object-contain rounded-full" />
                </div>
            @endif

            <!-- College Name Only: Pure White, Stays White on Hover -->
            <div class="min-w-0 flex-1">
                <h3 class="text-white font-bold text-[15px] sm:text-base leading-snug line-clamp-2 drop-shadow-sm">
                    {{ $name }}
                </h3>
            </div>
        </div>
    </div>

    <!-- ================= 2. CARD CONTENT: COURSE TITLE & LINE-BY-LINE DETAILS ================= -->
    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
        
        <div>
            <!-- Course / Programme Name & Star Rating (Multi-line enabled, No Hover Color Change, Fixed Min-Height for Evenness) -->
            <div class="flex items-start justify-between gap-3 pb-3 border-b border-border/70 min-h-[48px] sm:min-h-[52px]">
                <div class="min-w-0 flex-1">
                    <h4 class="text-[14px] sm:text-[15px] font-bold text-heading leading-snug break-words">
                        {{ $course }}
                    </h4>
                </div>

                @if ($rating)
                    <div class="flex-shrink-0 flex items-center gap-1 text-[12px] sm:text-[13px] font-bold text-heading pt-0.5">
                        <span class="text-amber-500">★</span>
                        <span>{{ $rating }}</span>
                        @if ($reviews)
                            <span class="text-[11px] text-muted font-normal">({{ $reviews }})</span>
                        @endif
                    </div>
                @endif
            </div>

            <!-- Line-by-Line Structured Details List -->
            <div class="mt-3.5 space-y-2.5 text-[12px] sm:text-[13px]">
                
                <!-- 1. College Location -->
                <div class="flex items-center justify-between gap-2">
                    <span class="text-muted flex items-center gap-1.5 flex-shrink-0">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-brand"></i>
                        <span>Location</span>
                    </span>
                    <span class="font-medium text-heading text-right truncate">
                        {{ $location }}
                    </span>
                </div>

                <!-- 2. Accreditation & Ranking -->
                <div class="flex items-center justify-between gap-2">
                    <span class="text-muted flex items-center gap-1.5 flex-shrink-0">
                        <i data-lucide="award" class="w-3.5 h-3.5 text-brand"></i>
                        <span>Accreditation</span>
                    </span>
                    <span class="font-medium text-heading text-right truncate">
                        {{ $accreditation }}
                    </span>
                </div>

                <!-- 3. Course Duration -->
                <div class="flex items-center justify-between gap-2">
                    <span class="text-muted flex items-center gap-1.5 flex-shrink-0">
                        <i data-lucide="clock" class="w-3.5 h-3.5 text-brand"></i>
                        <span>Duration</span>
                    </span>
                    <span class="font-medium text-heading text-right">
                        {{ $duration }}
                    </span>
                </div>

                <!-- 4. Total Fees (Common Black Color) -->
                <div class="flex items-center justify-between gap-2">
                    <span class="text-muted flex items-center gap-1.5 flex-shrink-0">
                        <i data-lucide="badge-indian-rupee" class="w-3.5 h-3.5 text-brand"></i>
                        <span>Total Fees</span>
                    </span>
                    <span class="font-bold text-heading text-right">
                        {{ $fees }}
                    </span>
                </div>

                <!-- 5. Admission Status (Matching Brand Icon + Normal Clean Text) -->
                <div class="flex items-center justify-between gap-2">
                    <span class="text-muted flex items-center gap-1.5 flex-shrink-0">
                        <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-brand"></i>
                        <span>Admission Status</span>
                    </span>
                    <span class="font-medium text-heading text-right">
                        {{ $status }}
                    </span>
                </div>

            </div>
        </div>

        <!-- ================= 3. BOTTOM ACTIONS: VIEW DETAILS & ENQUIRE NOW ================= -->
        <div class="mt-5 pt-3.5 border-t border-border/70 flex items-center justify-between gap-2">
            <!-- View Details Link (Color transitions to Brand Orange on hover) -->
            <a 
                href="{{ $link }}" 
                class="inline-flex items-center gap-1 text-[12px] sm:text-[13px] font-semibold text-heading group-hover:text-brand hover:underline transition-colors"
            >
                <span>View Details</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5 transform group-hover:translate-x-0.5 transition-transform"></i>
            </a>

            <!-- Enquire Now Action Button -->
            <x-ui.button 
                variant="action" 
                href="{{ $link ?: '#enquire' }}" 
                class="!px-3.5 !py-1.5 !text-[12px] sm:!text-[13px] !rounded-lg"
            >
                Enquire Now
            </x-ui.button>
        </div>

    </div>

</div>