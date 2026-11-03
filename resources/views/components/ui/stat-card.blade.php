@props([
    'count' => '',
    'label' => '',
])

<!-- Kutty Stat Card (Clean Minimalist Figma Style: Big Number + Normal Clean Text) -->
<div {{ $attributes->merge(['class' => 'group bg-white border border-border rounded-2xl p-3 sm:p-5 flex flex-col items-center justify-center text-center shadow-xs hover:border-brand hover:shadow-md hover:shadow-brand/10 hover:-translate-y-0.5 transition-all duration-300 min-h-[75px] sm:min-h-[92px]']) }}>
    <!-- Big Bold Stat Number -->
    <span class="text-xl sm:text-2xl lg:text-[30px] font-extrabold text-heading tracking-tight group-hover:text-brand transition-colors duration-200">
        {{ $count }}
    </span>

    <!-- Normal Clean Text (No badges, no dots, no sub-lines) -->
    <span class="mt-1 text-[11px] sm:text-[13px] font-medium text-muted group-hover:text-heading transition-colors line-clamp-1">
        {{ $label }}
    </span>
</div>