@php
    $faqs = [
        [
            'q' => 'Is NextSkill admission counselling and guidance really 100% free?',
            'a' => 'Yes, absolutely. NextSkill provides completely free, unbiased admission counselling for 12th standard students and parents. We do not charge any registration fees, hidden consultation charges, or service commissions from students.'
        ],
        [
            'q' => 'How does the Tamil Nadu Engineering Admissions (TNEA) cutoff calculation work?',
            'a' => 'TNEA cutoff is calculated out of 200 marks using your 12th Board marks: Mathematics is counted out of 100, Physics out of 50 (Marks/2), and Chemistry out of 50 (Marks/2). You can use our real-time Cutoff Calculator to evaluate your score instantly.'
        ],
        [
            'q' => 'Can you help me get admission under both Government Quota and Management Quota?',
            'a' => 'Yes. We guide students through the official TNEA counselling rank lists, choice filling strategies for government quota, as well as institutional direct admissions / management quota pathways for top accredited institutions across Tamil Nadu.'
        ],
        [
            'q' => 'What documents are required for engineering and arts college admissions?',
            'a' => 'Key documents include 10th and 12th Mark Sheets, Transfer Certificate (TC), Community Certificate, Nativity Certificate (if applicable), First Graduate Certificate (for tuition fee concessions), Aadhaar Card, and recent passport-size photographs.'
        ],
        [
            'q' => 'How do I choose between Autonomous, Anna University Affiliated, and Deemed Universities?',
            'a' => 'Autonomous colleges update their curriculum every year according to IT & core industry demands and conduct examinations internally. University affiliated colleges follow Anna University syllabi, while Deemed Universities follow their own academic regulations. Our counsellors help you compare NAAC grades, NBA accreditations, and placement statistics to choose the best option.'
        ],
        [
            'q' => 'Do partner colleges provide campus placement support and internships?',
            'a' => 'Yes. All our recommended institutions maintain dedicated Training & Placement Cells with active tie-ups with leading Fortune 500 MNCs, product tech companies, and core engineering firms. Students receive pre-placement soft skill and coding training starting from the 3rd year.'
        ],
        [
            'q' => 'How can I schedule an in-person counselling session at your Coimbatore office?',
            'a' => 'You can walk in directly to our Coimbatore Admission Desk located at No.90, First Floor, Srinagar, Hopes College, Peelamedu, or call our admission helpline at +91-7358110062 / +91-7358110064 to book a preferred consultation slot.'
        ]
    ];
@endphp

<!-- Frequently Asked Questions (FAQ) Section - Clean White Minimalist Theme (No Top Border Line) -->
<section id="faq-section" class="relative py-12 sm:py-16 lg:py-20 bg-white overflow-hidden select-none">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-14">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-heading tracking-tight leading-tight">
                Frequently Asked Questions
            </h2>
            <p class="mt-2.5 text-xs sm:text-sm md:text-base font-normal text-muted leading-relaxed">
                Everything you need to know about 12th standard admissions, cutoffs, college accreditations, and our free counselling process.
            </p>
        </div>

        <!-- FAQ Accordion List (7 Minimum Questions & Answers) -->
        <div class="space-y-3.5 sm:space-y-4">
            @foreach($faqs as $index => $faq)
                <details 
                    class="group rounded-2xl border border-border/80 bg-zinc-50/50 open:bg-white open:border-brand/30 open:shadow-xs transition-all duration-200 overflow-hidden"
                    {{ $index === 0 ? 'open' : '' }}
                >
                    <summary class="flex items-center justify-between p-4 sm:p-5 font-bold text-heading text-xs sm:text-sm md:text-base cursor-pointer list-none select-none hover:text-brand transition-colors">
                        <span class="pr-4 leading-snug">{{ $faq['q'] }}</span>
                        <span class="w-7 h-7 rounded-full bg-white border border-border/70 flex items-center justify-center shrink-0 group-open:bg-brand group-open:border-brand transition-colors">
                            <i data-lucide="chevron-down" class="w-4 h-4 text-muted group-open:text-white group-open:rotate-180 transition-transform duration-200"></i>
                        </span>
                    </summary>
                    <div class="px-4 pb-4 sm:px-5 sm:pb-5 pt-1 text-xs sm:text-[13px] md:text-sm text-subheading leading-relaxed border-t border-border/50">
                        <p>{{ $faq['a'] }}</p>
                    </div>
                </details>
            @endforeach
        </div>

        <!-- Quick Help Bar Below FAQs -->
        <div class="mt-8 sm:mt-10 p-4 sm:p-5 rounded-2xl bg-[#FEFFFF] border border-border/70 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div>
                <h4 class="text-xs sm:text-sm font-bold text-heading">Have a specific question not listed above?</h4>
                <p class="text-[11px] sm:text-xs text-muted mt-0.5">Talk to our senior academic counsellors directly over phone or WhatsApp.</p>
            </div>
            <a 
                href="{{ url('/contact') }}" 
                class="inline-flex items-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl bg-brand hover:bg-brand-hover text-white text-xs sm:text-sm font-semibold transition-all shrink-0"
            >
                <span>Ask an Admission Expert</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>

    </div>
</section>

