<!-- Hero Section Component (Desktop Full Screen Viewport + Mobile Compact Flow) -->
<section class="relative pt-4 sm:pt-6 md:pt-8 pb-4 sm:pb-8 bg-transparent overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10 w-full pt-2 sm:pt-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 xl:gap-20 items-start">

            <!-- ================= LEFT COLUMN: HEADING + MICRO BORDER ITEMS + 3 BUTTONS ================= -->
            <div class="lg:col-span-7 flex flex-col text-left pr-0 lg:pr-4 xl:pr-6">
                
                <!-- Dynamic Typing Animated Heading with Stable Container -->
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-[42px] xl:text-[46px] font-bold text-heading tracking-tight leading-[1.22] sm:leading-[1.18] min-h-[50px] sm:min-h-[64px] md:min-h-[76px] lg:min-h-[96px] flex items-start">
                    <span class="inline">
                        <span id="hero-typewriter-text">Find the Right College & Course After 12th Standard</span><span class="inline-block w-[3px] sm:w-[4px] lg:w-[5px] h-[0.85em] bg-brand ml-1.5 align-middle animate-cursor-blink"></span>
                    </span>
                </h1>

                <!-- Subheading -->
                <p class="mt-3 sm:mt-4 text-[14px] sm:text-base lg:text-lg font-medium text-subheading leading-relaxed max-w-2xl">
                    Explore accredited colleges, courses, and fee details across Tamil Nadu to start your higher education journey.
                </p>

                <!-- 3 Simple Clean Line Items Split by Left & Right Borders (No cards, pure line dividers with SVGs) -->
                <div class="mt-6 sm:mt-7 flex flex-col sm:flex-row sm:items-center py-1 divide-y sm:divide-y-0 sm:divide-x divide-border/80">
                    
                    <!-- Item 1: ₹0 Broker Donation -->
                    <div class="pb-3 sm:pb-0 sm:pr-4 md:pr-5 xl:pr-6">
                        <div class="flex items-center gap-1.5">
                            <i data-lucide="shield-check" class="w-4 h-4 text-brand flex-shrink-0"></i>
                            <h4 class="text-xs sm:text-[13px] font-bold text-heading leading-tight">₹0 Broker Donation</h4>
                        </div>
                        <p class="mt-1 text-[11px] text-muted leading-snug">Strictly institutional fees & official bank receipts.</p>
                    </div>

                    <!-- Item 2: 45+ Verified Colleges (Split with left & right border) -->
                    <div class="py-3 sm:py-0 sm:px-4 md:px-5 xl:px-6">
                        <div class="flex items-center gap-1.5">
                            <i data-lucide="graduation-cap" class="w-4 h-4 text-brand flex-shrink-0"></i>
                            <h4 class="text-xs sm:text-[13px] font-bold text-heading leading-tight">45+ Verified Colleges</h4>
                        </div>
                        <p class="mt-1 text-[11px] text-muted leading-snug">Autonomous & NAAC A++ accredited partner campuses.</p>
                    </div>

                    <!-- Item 3: Hopes Office -->
                    <div class="pt-3 sm:pt-0 sm:pl-4 md:pl-5 xl:pl-6">
                        <div class="flex items-center gap-1.5">
                            <i data-lucide="map-pin" class="w-4 h-4 text-brand flex-shrink-0"></i>
                            <h4 class="text-xs sm:text-[13px] font-bold text-heading leading-tight">Hopes Office</h4>
                        </div>
                        <p class="mt-1 text-[11px] text-muted leading-snug">Physical walk-in counseling center open 7 days.</p>
                    </div>

                </div>

                <!-- 3 Action Buttons -->
                <div class="mt-6 sm:mt-8 flex flex-wrap items-center gap-2.5 sm:gap-3">
                    
                    <!-- 1. Browse All College & Fees (Primary Brand Button) -->
                    <x-ui.button variant="primary" href="{{ url('/colleges') }}" icon="arrow-right" class="!px-4 sm:!px-5 !py-2.5 !text-xs sm:!text-[13px]">
                        Browse All Colleges & Fees
                    </x-ui.button>

                    <!-- 2. Calculate Cutoff -->
                    <x-ui.button variant="action" href="{{ url('/#predict-cutoff') }}" icon="calculator" class="!px-4 sm:!px-5 !py-2.5 !text-xs sm:!text-[13px]">
                        Calculate Cutoff
                    </x-ui.button>

                    <!-- 3. CTA Button with Outline UI -->
                    <x-ui.outline-button href="tel:+917358110062" icon="phone-call" class="!px-4 sm:!px-5 !py-2 sm:!py-2.5 !text-xs sm:!text-[13px] !border-brand hover:!bg-brand hover:!text-white hover:!border-brand !rounded-lg !shadow-xs">
                        Talk to Expert
                    </x-ui.outline-button>

                </div>

            </div>

            <!-- ================= RIGHT COLUMN: "CHECK COLLEGE SEATS & FEES" LEAD FORM (REUSABLE COMPONENT) ================= -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end w-full">
                <div class="w-full max-w-md lg:max-w-none relative">
                    <x-ui.enquiry-form 
                        prefix="hero" 
                        title="Check College Seats & Fees"
                        badgeText="100% Free"
                        subtitle="Get verified cutoffs, fee quotes & seat status in 5 mins."
                    />
                </div>
            </div>

        </div>
    </div>

    <!-- Clean Minimalist Dual Curved Accent Wave with Generous Top Gap from Hero Content -->
    <div class="w-full overflow-hidden pointer-events-none select-none relative z-10 pt-12 sm:pt-16 lg:pt-20">
        <svg class="w-full h-12 sm:h-16 md:h-20 lg:h-24" viewBox="0 0 1440 90" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M -30 60 C 360 90, 540 15, 860 20 C 1160 25, 1320 75, 1470 55" stroke="#EE2C3C" stroke-width="2.5" stroke-linecap="round" opacity="0.6" />
            <path d="M -30 76 C 360 106, 540 31, 860 36 C 1160 41, 1320 91, 1470 71" stroke="#EE2C3C" stroke-width="2.5" stroke-linecap="round" opacity="0.35" />
        </svg>
    </div>

    <!-- Vanilla Javascript Typewriter Engine -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const el = document.getElementById('hero-typewriter-text');
            if (!el) return;

            const phrases = [
                "Find the Right College & Course After 12th Standard",
                "Discover Top Engineering & Arts Colleges in Tamil Nadu",
                "Explore In-Demand Degree Programs for 2026-27",
                "Get Direct Admission with Zero Donation & Top Guidance"
            ];

            let phraseIndex = 0;
            let charIndex = phrases[0].length;
            let isDeleting = false;
            let typingSpeed = 65;

            function typeCycle() {
                const currentPhrase = phrases[phraseIndex];

                if (isDeleting) {
                    el.textContent = currentPhrase.substring(0, charIndex - 1);
                    charIndex--;
                    typingSpeed = 30;
                } else {
                    el.textContent = currentPhrase.substring(0, charIndex + 1);
                    charIndex++;
                    typingSpeed = 65;
                }

                if (!isDeleting && charIndex === currentPhrase.length) {
                    typingSpeed = 2200; // Pause when full sentence is typed
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                    typingSpeed = 400; // Pause before typing next phrase
                }

                setTimeout(typeCycle, typingSpeed);
            }

            // Start typing cycle smoothly after viewing initial text
            setTimeout(() => {
                isDeleting = true;
                typeCycle();
            }, 2500);
        });
    </script>
</section>
