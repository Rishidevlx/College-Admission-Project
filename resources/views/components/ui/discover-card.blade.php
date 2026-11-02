@props([
    'title' => '',
    'description' => '',
    'image' => '',
    'alt' => '',
    'link' => '#',
    'linkText' => 'Explore',
    'tags' => [],
    'layout' => 'horizontal', // 'horizontal' | 'vertical' | 'tall'
])

@php
    if (is_string($tags) && !empty($tags)) {
        $tags = array_map('trim', explode(',', $tags));
    }
@endphp

<a 
    href="{{ $link }}" 
    {{ $attributes->merge(['class' => 'group relative flex flex-col justify-between bg-white border border-border rounded-2xl p-4 sm:p-5 lg:p-6 shadow-xs hover:border-brand hover:shadow-[0_12px_32px_rgba(240,80,35,0.12)] hover:-translate-y-1 transition-all duration-300 overflow-hidden']) }}
>
    <!-- ================= 1. MOBILE VIEW (< lg): UNIFORM, 100% CONSISTENT & NO OVERFLOW ================= -->
    <div class="lg:hidden flex items-center justify-between gap-3 sm:gap-4 w-full h-full">
        <!-- Left: Text, Tags, Action Link -->
        <div class="flex-1 flex flex-col justify-between h-full min-h-[120px]">
            <div>
                <h3 class="text-[15px] sm:text-lg font-bold text-heading group-hover:text-brand transition-colors duration-200">
                    {{ $title }}
                </h3>
                <p class="mt-1 text-[12px] sm:text-[13px] font-normal text-muted leading-relaxed line-clamp-2">
                    {{ $description }}
                </p>

                @if (!empty($tags))
                    <div class="mt-2 flex flex-wrap gap-1">
                        @foreach ($tags as $tag)
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] sm:text-[11px] font-medium text-zinc-600 bg-zinc-100/90 border border-zinc-200/60 group-hover:border-brand/30 group-hover:text-brand transition-colors">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Bottom Action Link: Guaranteed in-bounds & clearly visible -->
            <div class="mt-3 inline-flex items-center gap-1 text-[12px] sm:text-[13px] font-semibold text-heading group-hover:text-brand transition-colors">
                <span>{{ $linkText }}</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform"></i>
            </div>
        </div>

        <!-- Right: Mobile Vector Illustration (Proper scaled size) -->
        @if ($image)
            <div class="flex-shrink-0 w-20 h-20 sm:w-24 sm:h-24 flex items-center justify-center">
                <img 
                    src="{{ $image }}" 
                    alt="{{ $alt ?: $title }}" 
                    class="w-full h-full object-contain transform group-hover:scale-105 transition-transform duration-300"
                    loading="lazy"
                />
            </div>
        @endif
    </div>

    <!-- ================= 2. DESKTOP VIEW (lg+): BENTO GRID LAYOUT VARIANTS ================= -->
    <div class="hidden lg:flex flex-col justify-between h-full w-full">
        @if ($layout === 'horizontal')
            <!-- Desktop Horizontal (Find Colleges, Free Counselling) -->
            <div class="flex items-center justify-between gap-4 h-full">
                <div class="flex-1 flex flex-col justify-between h-full py-0.5">
                    <div>
                        <h3 class="text-lg sm:text-xl font-bold text-heading group-hover:text-brand transition-colors duration-200">
                            {{ $title }}
                        </h3>
                        <p class="mt-1.5 text-[13px] sm:text-[14px] font-normal text-muted leading-relaxed line-clamp-2">
                            {{ $description }}
                        </p>

                        @if (!empty($tags))
                            <div class="mt-2.5 flex flex-wrap gap-1.5">
                                @foreach ($tags as $tag)
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-medium text-zinc-600 bg-zinc-100/90 border border-zinc-200/60 group-hover:border-brand/30 group-hover:text-brand transition-colors">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="mt-auto pt-4 inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-semibold text-heading group-hover:text-brand transition-colors">
                        <span>{{ $linkText }}</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>

                @if ($image)
                    <div class="flex-shrink-0 w-28 h-28 lg:w-32 lg:h-32 flex items-center justify-center">
                        <img 
                            src="{{ $image }}" 
                            alt="{{ $alt ?: $title }}" 
                            class="w-full h-full object-contain transform group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                        />
                    </div>
                @endif
            </div>

        @elseif ($layout === 'tall')
            <!-- Desktop Tall (Explore Locations) -->
            <div class="flex flex-col justify-between h-full py-0.5">
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-heading group-hover:text-brand transition-colors duration-200">
                        {{ $title }}
                    </h3>
                    <p class="mt-1.5 text-[13px] sm:text-[14px] font-normal text-muted leading-relaxed">
                        {{ $description }}
                    </p>

                    @if (!empty($tags))
                        <div class="mt-2.5 flex flex-wrap gap-1.5">
                            @foreach ($tags as $tag)
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-medium text-zinc-600 bg-zinc-100/90 border border-zinc-200/60 group-hover:border-brand/30 group-hover:text-brand transition-colors">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>

                @if ($image)
                    <div class="my-auto py-2 w-full flex items-center justify-center">
                        <img 
                            src="{{ $image }}" 
                            alt="{{ $alt ?: $title }}" 
                            class="w-28 h-28 sm:w-32 sm:h-32 object-contain transform group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                        />
                    </div>
                @endif

                <div class="mt-auto pt-3 inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-semibold text-heading group-hover:text-brand transition-colors">
                    <span>{{ $linkText }}</span>
                    <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                </div>
            </div>

        @else
            <!-- Desktop Vertical (Course Finder, Scholarships, 100% Free Guidance) -->
            <div class="flex flex-col justify-between h-full py-0.5">
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-heading group-hover:text-brand transition-colors duration-200">
                        {{ $title }}
                    </h3>
                    <p class="mt-1.5 text-[13px] sm:text-[14px] font-normal text-muted leading-relaxed line-clamp-2">
                        {{ $description }}
                    </p>

                    @if (!empty($tags))
                        <div class="mt-2.5 flex flex-wrap gap-1.5">
                            @foreach ($tags as $tag)
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[11px] font-medium text-zinc-600 bg-zinc-100/90 border border-zinc-200/60 group-hover:border-brand/30 group-hover:text-brand transition-colors">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>

                @if ($image)
                    <div class="my-auto py-1.5 w-full flex items-center justify-center">
                        <img 
                            src="{{ $image }}" 
                            alt="{{ $alt ?: $title }}" 
                            class="w-20 h-20 sm:w-24 sm:h-24 object-contain transform group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                        />
                    </div>
                @endif

                <div class="mt-auto pt-2.5 inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-semibold text-heading group-hover:text-brand transition-colors">
                    <span>{{ $linkText }}</span>
                    <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                </div>
            </div>
        @endif
    </div>
</a>