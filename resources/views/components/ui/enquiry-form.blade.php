@props([
    'title' => 'Check College Seats & Fees',
    'badgeText' => '100% Free',
    'subtitle' => 'Get verified cutoffs, fee quotes & seat status in 5 mins.',
    'prefix' => 'lead',
    'showBorder' => false,
])

<div {{ $attributes->merge(['class' => 'w-full relative']) }}>
    
    <!-- Header -->
    <div class="mb-3 sm:mb-3.5">
        <div class="flex items-center justify-between gap-2">
            <h3 class="text-base sm:text-lg md:text-xl font-bold text-heading">{{ $title }}</h3>
            @if ($badgeText)
                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[11px] font-semibold bg-brand/10 text-brand">
                    {{ $badgeText }}
                </span>
            @endif
        </div>
        @if ($subtitle)
            <p class="text-xs text-muted mt-0.5">{{ $subtitle }}</p>
        @endif
    </div>

    <!-- Clean UI Form (Pure White Inputs, Compact Heights) -->
    <form onsubmit="return false;" class="space-y-2.5 sm:space-y-3">
        
        <!-- 1. Student Name -->
        <div>
            <label for="{{ $prefix }}-student-name" class="block text-xs font-semibold text-heading mb-1">
                Student Name <span class="text-brand">*</span>
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-muted">
                    <i data-lucide="user" class="w-4 h-4"></i>
                </div>
                <input 
                    type="text" 
                    id="{{ $prefix }}-student-name" 
                    placeholder="Enter student name" 
                    class="w-full pl-9.5 pr-3.5 h-[38px] sm:h-[40px] text-xs sm:text-[13px] bg-white border border-zinc-200 rounded-lg text-heading placeholder:text-muted focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/10 transition-all shadow-xs"
                />
            </div>
        </div>

        <!-- 2. Phone Number -->
        <div>
            <label for="{{ $prefix }}-phone-number" class="block text-xs font-semibold text-heading mb-1">
                Phone Number <span class="text-brand">*</span>
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-muted">
                    <i data-lucide="phone" class="w-4 h-4"></i>
                </div>
                <input 
                    type="tel" 
                    id="{{ $prefix }}-phone-number" 
                    placeholder="Enter phone number" 
                    class="w-full pl-9.5 pr-3.5 h-[38px] sm:h-[40px] text-xs sm:text-[13px] bg-white border border-zinc-200 rounded-lg text-heading placeholder:text-muted focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/10 transition-all shadow-xs"
                />
            </div>
        </div>

        <!-- 3. Preferred Course (Dropdown) -->
        <div>
            <label for="{{ $prefix }}-preferred-course" class="block text-xs font-semibold text-heading mb-1">
                Preferred Course <span class="text-brand">*</span>
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-muted">
                    <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                </div>
                <select 
                    id="{{ $prefix }}-preferred-course" 
                    class="w-full pl-9.5 pr-9 h-[38px] sm:h-[40px] text-xs sm:text-[13px] bg-white border border-zinc-200 rounded-lg text-heading focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/10 transition-all appearance-none cursor-pointer shadow-xs"
                >
                    <option value="" disabled selected>Select Preferred Course</option>
                    <option value="btech-cse">B.E / B.Tech Computer Science (CSE)</option>
                    <option value="btech-aids">B.Tech AI & Data Science (AI & DS)</option>
                    <option value="be-ece">B.E Electronics & Communication (ECE)</option>
                    <option value="btech-it">B.Tech Information Technology (IT)</option>
                    <option value="be-mech-civil">B.E Mechanical / Civil / Mechatronics</option>
                    <option value="bsc-cs-bca">B.Sc Computer Science / IT / BCA</option>
                    <option value="bcom">B.Com / B.Com Computer Applications</option>
                    <option value="bba">BBA / Management Programs</option>
                    <option value="other">Other Degree Programs</option>
                </select>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-muted">
                    <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </div>
            </div>
        </div>

        <!-- 4. Student Location -->
        <div>
            <label for="{{ $prefix }}-student-location" class="block text-xs font-semibold text-heading mb-1">
                Student Location <span class="text-brand">*</span>
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-muted">
                    <i data-lucide="map-pin" class="w-4 h-4"></i>
                </div>
                <input 
                    type="text" 
                    id="{{ $prefix }}-student-location" 
                    placeholder="Enter student location" 
                    class="w-full pl-9.5 pr-3.5 h-[38px] sm:h-[40px] text-xs sm:text-[13px] bg-white border border-zinc-200 rounded-lg text-heading placeholder:text-muted focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/10 transition-all shadow-xs"
                />
            </div>
        </div>

        <!-- 5. Instant Call Back Outline Button with phone-call icon -->
        <div class="pt-1.5">
            <x-ui.outline-button 
                type="button" 
                icon="phone-call" 
                class="w-full !h-[40px] sm:!h-[42px] !py-0 !text-xs sm:!text-[13px] !border-2 !border-brand hover:!bg-brand hover:!text-white hover:!border-brand !rounded-lg !shadow-none font-semibold"
            >
                Instant Call Back
            </x-ui.outline-button>
        </div>

    </form>
</div>
