@props([
    'college' => [],
    'title' => 'Frequently Asked Questions',
    'faqs' => []
])

@php
    $defaultFaqs = [
        [
            'q' => 'How can I get admission to this college for B.E / B.Tech / UG courses?',
            'a' => 'Undergraduate admissions are conducted through single-window TNEA counselling based on 12th standard PCM cutoff scores. Institutional management quota seats are also available for eligible candidates through direct application.'
        ],
        [
            'q' => 'What is the expected cutoff score for top engineering branches like CSE & AI?',
            'a' => 'For top branches like CSE, IT, and AI & Data Science, competitive cutoffs generally range between 190.0 and 198.5 out of 200, depending on community category (OC, BC, MBC, SC/ST).'
        ],
        [
            'q' => 'Are hostel facilities available for outstation and international students?',
            'a' => 'Yes. The institution provides secure residential hostel blocks with nutritious multi-cuisine mess food, high-speed Wi-Fi, 24/7 security, gym, and emergency medical assistance.'
        ],
        [
            'q' => 'Does the college provide fee concessions or scholarships?',
            'a' => 'Yes. Government post-matric scholarships for SC/ST and BC/MBC students, First Graduate fee concessions (₹25,000/yr), sports quota fee waivers, and merit scholarships are offered.'
        ],
        [
            'q' => 'What is the average and highest placement package secured by students?',
            'a' => 'The campus boasts premier placement records with top-tier packages reaching up to ₹38–40 LPA and healthy average salaries ranging between ₹6.5 and ₹9.5 LPA across reputed MNCs and product enterprises.'
        ]
    ];

    $displayFaqs = !empty($faqs) ? $faqs : $defaultFaqs;
@endphp

<!-- College Inline FAQ Component (Positioned inside left content area of each tab) -->
<div class="mt-8 pt-6 border-t border-border/80">
    <div class="bg-white rounded-2xl border border-border p-6 sm:p-7 shadow-xs">
        
        <div class="flex items-center gap-2 mb-2">
            <i data-lucide="help-circle" class="w-4 h-4 text-brand"></i>
            <h4 class="text-sm sm:text-base font-bold text-heading uppercase tracking-wider">
                {{ $title }}
            </h4>
        </div>
        <p class="text-xs text-muted mb-5 leading-relaxed">
            Commonly asked queries about cutoffs, seat allotment, fees, and campus life for this institution.
        </p>

        <div class="space-y-3">
            @foreach($displayFaqs as $faq)
                <details class="group border border-border rounded-xl p-3.5 sm:p-4 bg-zinc-50/50 open:bg-white open:border-brand/30 transition-all cursor-pointer">
                    <summary class="flex items-center justify-between font-bold text-heading text-xs sm:text-sm select-none list-none">
                        <span class="pr-3 leading-snug">{{ $faq['q'] }}</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-muted group-open:text-brand group-open:rotate-180 transition-transform shrink-0"></i>
                    </summary>
                    <p class="mt-2.5 text-xs sm:text-[13px] text-subheading leading-relaxed pt-2 border-t border-border/60">
                        {{ $faq['a'] }}
                    </p>
                </details>
            @endforeach
        </div>

    </div>
</div>

