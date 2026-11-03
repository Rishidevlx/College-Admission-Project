@props([
    'courses' => [],
])

<!-- Responsive Hybrid Course Explorer Component (Desktop Table + Mobile Cards) -->
<div {{ $attributes->merge(['class' => 'w-full']) }}>
    
    <!-- ================= 1. DESKTOP VIEW: Sleek 5-Column Table (Visible on md: and above) ================= -->
    <div class="hidden md:block w-full rounded-2xl border border-border bg-white shadow-xs overflow-hidden">
        <table class="w-full text-left border-collapse">
            
            <!-- Table Header -->
            <thead>
                <tr class="bg-zinc-50/80 border-b border-border text-[12px] font-semibold uppercase tracking-wider text-muted">
                    <th scope="col" class="py-4 px-6">Course</th>
                    <th scope="col" class="py-4 px-6">Duration</th>
                    <th scope="col" class="py-4 px-6">Eligibility</th>
                    <th scope="col" class="py-4 px-6">Avg. Fees</th>
                    <th scope="col" class="py-4 px-6 text-right">Action</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="divide-y divide-border/70 text-sm">
                @forelse ($courses as $course)
                    <tr class="hover:bg-brand/5 transition-colors duration-150 group">
                        
                        <!-- 1. Course Icon, Name & Subtitle -->
                        <td class="py-4 px-6 whitespace-nowrap">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-brand/10 text-brand flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform duration-200">
                                    <i data-lucide="{{ $course['icon'] ?? 'graduation-cap' }}" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-heading text-[15px] sm:text-base leading-snug">
                                        {{ $course['name'] }}
                                    </div>
                                    @if (!empty($course['full_name']))
                                        <div class="text-[12px] text-muted font-normal mt-0.5">
                                            {{ $course['full_name'] }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </td>

                        <!-- 2. Course Duration -->
                        <td class="py-4 px-6 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 font-medium text-heading">
                                <i data-lucide="clock" class="w-3.5 h-3.5 text-muted"></i>
                                <span>{{ $course['duration'] }}</span>
                            </span>
                        </td>

                        <!-- 3. Course Eligibility -->
                        <td class="py-4 px-6 whitespace-nowrap">
                            <span class="text-subheading font-normal">
                                {{ $course['eligibility'] }}
                            </span>
                        </td>

                        <!-- 4. Average Total Fees -->
                        <td class="py-4 px-6 whitespace-nowrap">
                            <span class="font-bold text-heading">
                                {{ $course['fees'] }}
                            </span>
                        </td>

                        <!-- 5. Action: Clean Brand Orange Link with Arrow -->
                        <td class="py-4 px-6 text-right whitespace-nowrap">
                            <a 
                                href="{{ $course['link'] ?? '#course-details' }}" 
                                class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand hover:underline transition-all"
                            >
                                <span>View</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-200"></i>
                            </a>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 px-6 text-center text-muted">
                            No courses available at the moment.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

    <!-- ================= 2. MOBILE VIEW: Compact Stacked Cards (Visible on mobile < md) ================= -->
    <div class="block md:hidden space-y-3">
        @forelse ($courses as $course)
            <div class="bg-white border border-border rounded-2xl p-4 shadow-xs hover:border-brand/60 transition-all duration-200">
                
                <!-- Card Header: Icon + Title & Subtitle + Normal Duration Text (No Pill) -->
                <div class="flex items-start justify-between gap-3">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-10 h-10 rounded-xl bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                            <i data-lucide="{{ $course['icon'] ?? 'graduation-cap' }}" class="w-5 h-5"></i>
                        </div>
                        <div class="min-w-0">
                            <h3 class="font-bold text-heading text-[15px] leading-tight truncate">
                                {{ $course['name'] }}
                            </h3>
                            @if (!empty($course['full_name']))
                                <p class="text-[12px] text-muted font-normal mt-0.5 truncate">
                                    {{ $course['full_name'] }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <!-- Normal Duration Text without Pill (As requested) -->
                    <div class="flex items-center gap-1.5 text-xs font-semibold text-subheading flex-shrink-0 pt-0.5">
                        <i data-lucide="clock" class="w-3.5 h-3.5 text-muted"></i>
                        <span>{{ $course['duration'] }}</span>
                    </div>
                </div>

                <!-- Eligibility Information Box -->
                <div class="mt-3 px-3 py-2 rounded-xl bg-zinc-50 border border-border/70 flex items-start gap-2 text-xs">
                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                    <div class="leading-relaxed">
                        <span class="text-muted font-medium">Eligibility:</span>
                        <span class="font-semibold text-heading ml-1">{{ $course['eligibility'] }}</span>
                    </div>
                </div>

                <!-- Bottom Action Strip: Fees & CTA Button -->
                <div class="mt-3.5 pt-3 border-t border-border/70 flex items-center justify-between gap-3">
                    <div class="flex flex-col">
                        <span class="text-[11px] font-medium text-muted">Avg. Annual Fees</span>
                        <span class="text-[14px] sm:text-[15px] font-bold text-heading">{{ $course['fees'] }}</span>
                    </div>

                    <a 
                        href="{{ $course['link'] ?? '#course-details' }}"
                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-brand text-white text-xs font-semibold shadow-xs hover:bg-brand-hover active:scale-95 transition-all"
                    >
                        <span>View</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

            </div>
        @empty
            <div class="py-8 px-4 text-center text-muted bg-white border border-border rounded-2xl">
                No courses available at the moment.
            </div>
        @endforelse
    </div>

</div>
