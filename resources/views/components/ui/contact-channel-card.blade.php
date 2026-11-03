@props([
    'icon' => 'phone',
    'title' => '',
    'contactText' => '',
    'contactHref' => null,
])

<div class="relative bg-white rounded-2xl border border-zinc-200/90 pt-9 pb-7 px-6 sm:px-8 flex flex-col items-center text-center shadow-[0_2px_10px_rgba(0,0,0,0.02)]">
    
    <!-- Top-Floating Centered Circular Icon Badge (Solid white background with border so card outline never cuts through) -->
    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-white border border-zinc-200/90 p-1 flex items-center justify-center shadow-xs z-10">
        <div class="w-full h-full rounded-full bg-brand/10 flex items-center justify-center text-brand">
            <i data-lucide="{{ $icon }}" class="w-5 h-5"></i>
        </div>
    </div>

    <!-- Category / Purpose Title -->
    <h3 class="text-xs sm:text-[13px] md:text-sm font-semibold text-heading leading-snug">
        {{ $title }}
    </h3>

    <!-- Neat Divider Line with Decent Space Between Title and Contact -->
    <div class="w-16 h-[1.5px] bg-zinc-200 my-4 mx-auto"></div>

    <!-- Single Contact Detail -->
    @if ($contactText)
        @if ($contactHref)
            <a 
                href="{{ $contactHref }}" 
                class="text-sm sm:text-base md:text-lg font-bold text-brand hover:underline transition-colors block tracking-wide"
            >
                {{ $contactText }}
            </a>
        @else
            <span class="text-sm sm:text-base md:text-lg font-bold text-brand block tracking-wide">
                {{ $contactText }}
            </span>
        @endif
    @endif

</div>
