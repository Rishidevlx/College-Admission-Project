@props([
    'href' => null,
    'type' => 'button',
    'variant' => 'primary',
    'icon' => null,
])

@php
$baseClasses = 'inline-flex items-center justify-center gap-2 text-[14px] font-medium rounded-lg transition-all duration-200 cursor-pointer shadow-xs';

$variants = [
    'primary' => 'bg-brand hover:bg-brand-hover text-white px-6 py-2.5 sm:py-3 active:scale-95 transition-all',
    'action'  => 'bg-brand hover:bg-brand-hover text-white border border-brand hover:border-brand-hover px-5 py-2.5 active:scale-95 transition-all',
    'outline' => 'bg-white hover:bg-brand text-heading hover:text-white border border-border hover:border-brand px-5 py-2.5 transition-all',
];

$classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon)
            <i data-lucide="{{ $icon }}" class="w-4 h-4"></i>
        @endif
        <span>{{ $slot }}</span>
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon)
            <i data-lucide="{{ $icon }}" class="w-4 h-4"></i>
        @endif
        <span>{{ $slot }}</span>
    </button>
@endif

