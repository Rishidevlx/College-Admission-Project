@php
    $cards = [
        [
            'stat' => '500+',
            'title' => 'Partner Colleges',
            'desc' => 'Top Autonomous, Anna University affiliated & NAAC A++ engineering & arts campuses across Tamil Nadu.',
            'image' => asset('images/vectors/find-colleges.png'),
            'alt' => 'Partner Colleges Vector',
            'span' => 'sm:col-span-1',
        ],
        [
            'stat' => '150+',
            'title' => 'Degree Programs',
            'desc' => 'Compare verified cutoffs, fee structures, and career pathways for B.Tech, B.E, & Science courses.',
            'image' => asset('images/vectors/course-finder.png'),
            'alt' => 'Degree Programs Vector',
            'span' => 'sm:col-span-1',
        ],
        [
            'stat' => '25+',
            'title' => 'TNEA Specialists',
            'desc' => 'Boost your admission success with 1-on-1 live cutoff counselling and choice-filling strategy.',
            'image' => asset('images/vectors/counselling.png'),
            'alt' => 'TNEA Specialists Vector',
            'span' => 'sm:col-span-1',
        ],
        [
            'stat' => '25,000+',
            'title' => 'Students Guided',
            'desc' => 'Personalized advice on picking the right college, branch, and future career pathway.',
            'image' => asset('images/vectors/admission-steps.png'),
            'alt' => 'Students Guided Vector',
            'span' => 'sm:col-span-1',
        ],
        [
            'stat' => '₹0',
            'title' => 'Broker Donation',
            'desc' => 'Strictly institutional fee structure with official bank-verified receipts and transparent counseling across Tamil Nadu. Zero middleman charges, 100% genuine admission support.',
            'image' => asset('images/vectors/scholarships.png'),
            'alt' => 'Zero Broker Donation Vector',
            'span' => 'sm:col-span-2',
        ],
    ];
@endphp

<!-- ================= "WHAT GIVES US AN EDGE?" STICKY SECTION ================= -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24 border-t border-border/60">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 xl:gap-16 items-start">
        
        <!-- 1. STICKY LEFT COLUMN: Overline + Heading + CTA Button -->
        <div class="lg:col-span-4 xl:col-span-4 lg:sticky lg:top-28 self-start space-y-6 pt-2">
            
            <!-- Overline Label -->
            <span class="inline-block text-xs sm:text-[13px] font-bold text-muted uppercase tracking-wider">
                Learner Support & Success
            </span>

            <!-- Big Section Heading -->
            <h2 class="text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-heading tracking-tight leading-[1.15]">
                What gives us <br>
                <span class="text-brand">an edge?</span>
            </h2>

            <!-- Action CTA Button -->
            <div class="pt-2">
                <x-ui.button 
                    variant="primary" 
                    href="tel:+917358110062" 
                    icon="phone-call"
                    class="!px-6 sm:!px-7 !py-3.5 !text-sm sm:!text-[15px] !rounded-xl font-semibold shadow-md shadow-brand/20 hover:shadow-lg hover:shadow-brand/30"
                >
                    Get started with NextSkill
                </x-ui.button>
            </div>

        </div>

        <!-- 2. RIGHT COLUMN: 5 CARDS WITH DEDICATED VECTOR IMAGE SLOTS -->
        <div class="lg:col-span-8 xl:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">
            
            @foreach ($cards as $card)
                <div class="{{ $card['span'] }} bg-white rounded-[24px] sm:rounded-[28px] border border-border/70 p-6 sm:p-7 shadow-sm hover:shadow-md hover:border-brand/30 transition-all flex items-center justify-between overflow-hidden relative group min-h-[220px] sm:min-h-[260px]">
                    
                    <!-- Left Side: Stat + Title + Description -->
                    <div class="{{ $card['span'] === 'sm:col-span-2' ? 'sm:max-w-md' : 'w-1/2' }} pr-3 z-10">
                        <div class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight">
                            {{ $card['stat'] }}
                        </div>
                        <div class="text-base sm:text-lg font-bold text-heading mt-1">
                            {{ $card['title'] }}
                        </div>
                        <p class="text-xs sm:text-sm text-subheading mt-2 leading-relaxed">
                            {{ $card['desc'] }}
                        </p>
                    </div>

                    <!-- Right Side: Clean Vector Image Slot (Future-ready for user uploaded vectors) -->
                    <div class="{{ $card['span'] === 'sm:col-span-2' ? 'sm:w-1/2' : 'w-1/2' }} flex justify-end items-center relative z-0">
                        <img 
                            src="{{ $card['image'] }}" 
                            alt="{{ $card['alt'] }}" 
                            class="w-auto h-28 sm:h-36 md:h-40 max-w-[140px] sm:max-w-[180px] object-contain group-hover:scale-105 transition-transform duration-300 select-none drop-shadow-sm"
                            loading="lazy"
                        />
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>

