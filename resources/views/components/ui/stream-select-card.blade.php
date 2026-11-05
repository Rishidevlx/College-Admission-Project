@props([
    'id' => '',
    'title' => '',
    'icon' => 'graduation-cap',
])

<!-- Clean Horizontal Rectangle Stream Card (Only Icon, Title, and Action Cue) -->
<button 
    type="button"
    onclick="selectStream('{{ $id }}')"
    class="group w-full p-4 sm:p-4.5 rounded-xl bg-white border border-zinc-200/90 hover:border-brand hover:shadow-xs transition-all duration-200 flex items-center justify-between text-left cursor-pointer"
>
    <!-- Left: Icon & Title -->
    <div class="flex items-center gap-3 sm:gap-3.5 min-w-0">
        <div class="w-10 h-10 rounded-xl bg-brand/10 text-brand flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
            <i data-lucide="{{ $icon }}" class="w-5 h-5"></i>
        </div>
        <h3 class="text-sm sm:text-[15px] font-bold text-heading group-hover:text-brand transition-colors truncate">
            {{ $title }}
        </h3>
    </div>

    <!-- Right: Clean Enter Marks Action Link -->
    <div class="flex items-center gap-1 text-xs font-semibold text-brand flex-shrink-0 ml-2">
        <span class="hidden sm:inline">Enter Marks</span>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform"></i>
    </div>
</button>
