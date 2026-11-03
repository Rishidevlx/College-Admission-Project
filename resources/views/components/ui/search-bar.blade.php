@props([
    'action' => '#colleges',
    'placeholder' => 'Search colleges, courses, or locations...',
    'inputId' => 'search-input',
    'buttonText' => 'Search',
])

<div {{ $attributes->merge(['class' => 'max-w-2xl mx-auto px-2 sm:px-0']) }}>
    <form 
        action="{{ $action }}" 
        method="GET" 
        class="flex items-center gap-1.5 sm:gap-2 px-2 sm:px-3 h-[52px] sm:h-[60px] bg-white border border-brand rounded-xl shadow-md shadow-brand/10 hover:shadow-lg hover:shadow-brand/20 focus-within:ring-4 focus-within:ring-brand/20 transition-all"
    >
        <!-- Search Icon -->
        <div class="pl-1 sm:pl-2 flex-shrink-0 text-brand">
            <i data-lucide="search" class="w-4 h-4 sm:w-5 sm:h-5 text-brand"></i>
        </div>

        <!-- Input Field -->
        <input 
            type="text" 
            name="query" 
            id="{{ $inputId }}"
            placeholder="{{ $placeholder }}" 
            class="w-full py-2 sm:py-2.5 px-2 sm:px-3 bg-transparent text-heading text-[13px] sm:text-[15px] font-medium placeholder-muted focus:outline-none"
        />

        <!-- Optional Slot (e.g. Stream Selector Button) -->
        {{ $slot }}

        <!-- Reusable Submit Button -->
        <x-ui.button type="submit" variant="primary" class="flex-shrink-0 !px-4 sm:!px-6 !py-2 sm:!py-2.5 !text-[13px] sm:!text-[14px]">
            {{ $buttonText }}
        </x-ui.button>
    </form>
</div>
