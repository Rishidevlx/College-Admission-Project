<!-- Header / Navigation Bar (Minimalist: Logo Left + CTA Right, Simple Natural Scroll - Not Fixed) -->
<header class="relative w-full bg-transparent z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20 md:h-24">
            
            <!-- Left: Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="flex items-center group">
                    <img 
                        src="{{ asset('images/logo/nav-logo.svg') }}" 
                        alt="NextSkill Logo" 
                        class="h-9 sm:h-12 md:h-14 w-auto object-contain transition-transform group-hover:scale-[1.02]"
                    />
                </a>
            </div>

            <!-- Right: Call to Action Button (Call Now) -->
            <div class="flex-shrink-0 flex items-center gap-2 sm:gap-3">
                <x-ui.button variant="action" href="tel:+919876543210" icon="phone-call" class="!px-3.5 sm:!px-5 !py-1.5 sm:!py-2.5 !text-[12px] sm:!text-[14px]">
                    Call Now
                </x-ui.button>
            </div>

        </div>
    </div>
</header>
