@props([
    'href' => null,
    'icon' => null,
    'type' => 'button',
])

@php
    $classes = 'inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-xl text-sm sm:text-base font-semibold text-heading bg-transparent border-2 border-brand hover:bg-heading hover:text-white hover:border-heading transition-all duration-300 shadow-xs hover:shadow-lg hover:shadow-black/15 hover:-translate-y-0.5 group';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        <span>{{ $slot }}</span>
        @if ($icon)
            <i data-lucide="{{ $icon }}" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-200"></i>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        <span>{{ $slot }}</span>
        @if ($icon)
            <i data-lucide="{{ $icon }}" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-200"></i>
        @endif
    </button>
@endif
