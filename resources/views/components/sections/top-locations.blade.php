@php
    $cities = [
        [
            'name' => 'Chennai',
            'icon' => asset('images/cities/icon-1.png'),
            'link' => '#chennai',
        ],
        [
            'name' => 'Coimbatore',
            'icon' => asset('images/cities/icon-2.png'),
            'link' => '#coimbatore',
        ],
        [
            'name' => 'Madurai',
            'icon' => asset('images/cities/icon-3.png'),
            'link' => '#madurai',
        ],
        [
            'name' => 'Trichy',
            'icon' => asset('images/cities/icon-4.png'),
            'link' => '#trichy',
        ],
        [
            'name' => 'Salem',
            'icon' => asset('images/cities/icon-5.png'),
            'link' => '#salem',
        ],
        [
            'name' => 'Vellore',
            'icon' => asset('images/cities/icon-2.png'),
            'link' => '#vellore',
        ],
    ];
@endphp

<!-- "Explore Colleges by Location" Section (Clean Pure White Theme) -->
<section id="locations" class="relative py-12 sm:py-16 lg:py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header with Right-Side "Explore More Places" Link -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8 sm:mb-10">
            <div class="max-w-2xl">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight">
                    Explore Colleges by Location
                </h2>
                <p class="mt-2 text-[14px] sm:text-base font-normal text-muted leading-relaxed">
                    Find the right college in your preferred city.
                </p>
            </div>

            <!-- Right-Side Link: Explore More Places in Brand Color -->
            <a 
                href="{{ url('/colleges') }}" 
                class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-semibold text-brand hover:text-brand-hover hover:underline transition-colors shrink-0 group"
            >
                <span>Explore More Places</span>
                <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        <!-- City Cards Grid: 2 per row on Mobile, Single Row (6 columns) on Desktop -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3.5 sm:gap-4 lg:gap-5">
            @foreach ($cities as $city)
                <a 
                    href="{{ $city['link'] }}" 
                    class="group relative flex flex-col items-center justify-center text-center bg-white border border-border rounded-2xl p-5 sm:p-6 shadow-xs hover:border-brand hover:shadow-md hover:shadow-brand/5 hover:-translate-y-1 transition-all duration-300"
                >
                    <!-- Landmark Architectural SVG Icon -->
                    <div class="w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-brand">
                        <img 
                            src="{{ $city['icon'] }}" 
                            alt="{{ $city['name'] }} Landmark" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110 select-none"
                            loading="lazy"
                        />
                    </div>

                    <!-- City Name -->
                    <h3 class="mt-3 font-bold text-heading text-[14px] sm:text-[15px] group-hover:text-brand transition-colors">
                        {{ $city['name'] }}
                    </h3>
                </a>
            @endforeach
        </div>

    </div>
</section>

