@props([
    'title' => 'choose the right College for your future',
    'buttonText' => 'Explore Now',
    'buttonLink' => url('/colleges'),
    'image' => asset('images/assets/admission-cta-student.png'),
])

<!-- Reusable Responsive CTA Banner Component (Clean Pure White, Fully Mobile-Optimized) -->
<div {{ $attributes->merge(['class' => 'relative max-w-4xl mx-auto rounded-2xl bg-white border border-border shadow-xs hover:border-brand/40 hover:shadow-md transition-all duration-300 p-4 sm:px-8 sm:py-5 lg:py-6 overflow-visible']) }}>
    
    <div class="flex flex-row items-center justify-between gap-3 sm:gap-6">
        
        <!-- Left / Center: Headline & Outline CTA Button (Horizontal on desktop, clean stacked on mobile) -->
        <div class="flex-1 min-w-0 flex flex-col md:flex-row md:items-center gap-2.5 sm:gap-4 md:gap-6 text-left">
            <h3 class="text-[15px] sm:text-lg md:text-xl lg:text-2xl font-bold text-heading tracking-tight leading-snug">
                {{ $title }}
            </h3>

            <div class="flex-shrink-0">
                <x-ui.outline-button 
                    :href="$buttonLink" 
                    icon="arrow-right"
                    class="!px-3.5 !py-1.5 sm:!px-5 sm:!py-2 md:!px-6 md:!py-2.5 !text-xs sm:!text-sm !rounded-lg sm:!rounded-xl shadow-none whitespace-nowrap"
                >
                    {{ $buttonText }}
                </x-ui.outline-button>
            </div>
        </div>

        <!-- Right Side: Brand Vector Illustration (Neat & Scaled on Mobile) -->
        <div class="flex-shrink-0 flex items-center justify-center relative -mr-1 sm:-my-6 sm:-mr-2">
            <img 
                src="{{ $image }}" 
                alt="{{ $title }}" 
                class="w-20 sm:w-26 md:w-30 lg:w-34 max-h-20 sm:max-h-26 md:max-h-30 object-contain select-none drop-shadow-xs"
                loading="lazy"
            />
        </div>

    </div>

</div>
