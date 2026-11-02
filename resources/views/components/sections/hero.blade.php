<!-- Hero Section Component (Desktop 100vh Full Screen Viewport + Mobile Compact Flow) -->
<section class="relative pt-6 pb-12 sm:pt-10 sm:pb-16 lg:min-h-[calc(100vh-5rem)] lg:flex lg:flex-col lg:justify-center lg:py-20 bg-transparent overflow-hidden">
    
    <!-- Minimalist Balanced Floating Vectors (Left-Top: Scaled Rulers, Right-Bottom: Compact Pens) -->
    <!-- 1. Rulers Illustration (Left Side Top, Scaled Up Prominently, Slanted -12deg) -->
    <div class="hidden sm:block absolute left-2 sm:left-4 md:left-6 lg:left-10 xl:left-16 top-10 sm:top-12 md:top-18 z-0 pointer-events-none select-none">
        <img 
            src="{{ asset('images/vectors/rulers.png') }}" 
            alt="Rulers illustration" 
            class="w-32 sm:w-40 md:w-52 lg:w-60 xl:w-64 h-auto drop-shadow-md animate-float-wave-1 opacity-90"
            loading="lazy"
        />
    </div>

    <!-- 2. Pens Illustration (Right Side Bottom, Compact & Scaled Down, Slanted +12deg) -->
    <div class="hidden sm:block absolute right-2 sm:right-5 md:right-8 lg:right-14 xl:right-22 bottom-10 sm:bottom-14 md:bottom-20 z-0 pointer-events-none select-none">
        <img 
            src="{{ asset('images/vectors/pens.png') }}" 
            alt="Pens illustration" 
            class="w-16 sm:w-22 md:w-28 lg:w-34 xl:w-38 h-auto drop-shadow-md animate-float-wave-3 opacity-90"
            loading="lazy"
        />
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 w-full">

        <!-- Dynamic Typing Animated Heading with Stable Container to Prevent Layout Shift -->
        <h1 class="text-[23px] sm:text-3xl md:text-4xl lg:text-[52px] font-bold text-heading tracking-tight leading-[1.24] sm:leading-[1.18] max-w-4xl mx-auto min-h-[60px] sm:min-h-[76px] md:min-h-[96px] lg:min-h-[128px] flex items-center justify-center">
            <span class="inline">
                <span id="hero-typewriter-text">Find the Right College & Course After 12th Standard</span><span class="inline-block w-[3px] sm:w-[4px] lg:w-[5px] h-[0.85em] bg-brand ml-1.5 align-middle animate-cursor-blink"></span>
            </span>
        </h1>

        <!-- Subheading -->
        <p class="mt-3.5 sm:mt-5 text-[14px] sm:text-lg lg:text-xl font-medium text-subheading max-w-2xl mx-auto leading-relaxed px-2 sm:px-0">
            Explore accredited colleges, courses, and fee details across Tamil Nadu to start your higher education journey.
        </p>

        <!-- Reusable Single Search Bar Component -->
        <x-ui.search-bar class="mt-6 sm:mt-10" :action="url('/colleges')" />

    </div>

    <!-- Bottom Soft Smoke / Fog Transition to blend Hero ambient glow seamlessly into next section -->
    <div class="absolute bottom-0 inset-x-0 h-20 sm:h-32 lg:h-40 bg-gradient-to-t from-white via-white/80 to-transparent pointer-events-none z-0"></div>

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
