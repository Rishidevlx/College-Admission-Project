@php
    $currentRoute = request()->path();
    $isHome = ($currentRoute === '/' || $currentRoute === '');
    $isColleges = request()->is('colleges*');
    $isAbout = request()->is('about*');
    $isContact = request()->is('contact*');
@endphp

<!-- Fixed Pure White Navigation Bar with Transforming Full-Width Search & Seamless Mobile Dropdown -->
<header id="site-main-navbar" class="sticky top-0 z-50 w-full bg-white border-b border-border/80 shadow-[0_2px_12px_rgba(0,0,0,0.03)] transition-all duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        
        <!-- ================= 1. NORMAL NAVBAR MAIN CONTENT ================= -->
        <div id="navbar-main-content" class="flex items-center justify-between h-16 sm:h-20 transition-all duration-200">
            
            <!-- Left: Brand Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img 
                        src="{{ asset('images/logo/nav-logo.svg') }}" 
                        alt="NextSkill Logo" 
                        class="h-10 sm:h-12 md:h-13.5 w-auto object-contain"
                    />
                </a>
            </div>

            <!-- Center: Desktop Navigation Links (Visible on lg and above) -->
            <nav class="hidden lg:flex items-center gap-7 xl:gap-8 text-[14px]">
                <a 
                    href="{{ url('/') }}" 
                    class="font-medium transition-colors hover:text-brand relative py-1 {{ $isHome ? 'text-brand font-semibold' : 'text-subheading' }}"
                >
                    <span>Home</span>
                    @if ($isHome)
                        <span class="absolute bottom-0 left-0 right-0 h-[2px] bg-brand rounded-full"></span>
                    @endif
                </a>

                <a 
                    href="{{ url('/colleges') }}" 
                    class="font-medium transition-colors hover:text-brand relative py-1 {{ $isColleges ? 'text-brand font-semibold' : 'text-subheading' }}"
                >
                    <span>Colleges</span>
                    @if ($isColleges)
                        <span class="absolute bottom-0 left-0 right-0 h-[2px] bg-brand rounded-full"></span>
                    @endif
                </a>

                <a 
                    href="{{ url('/#predict-cutoff') }}" 
                    class="font-medium text-subheading hover:text-brand transition-colors py-1"
                >
                    <span>Cutoff Calculator</span>
                </a>

                <a 
                    href="{{ url('/about') }}" 
                    class="font-medium transition-colors hover:text-brand relative py-1 {{ $isAbout ? 'text-brand font-semibold' : 'text-subheading' }}"
                >
                    <span>About</span>
                    @if ($isAbout)
                        <span class="absolute bottom-0 left-0 right-0 h-[2px] bg-brand rounded-full"></span>
                    @endif
                </a>

                <a 
                    href="{{ url('/contact') }}" 
                    class="font-medium transition-colors hover:text-brand relative py-1 {{ $isContact ? 'text-brand font-semibold' : 'text-subheading' }}"
                >
                    <span>Contact</span>
                    @if ($isContact)
                        <span class="absolute bottom-0 left-0 right-0 h-[2px] bg-brand rounded-full"></span>
                    @endif
                </a>
            </nav>

            <!-- Right: Search Icon + Desktop CTA Button + Mobile Hamburger Toggle -->
            <div class="flex items-center gap-2 sm:gap-3">
                
                <!-- Search Icon Button (Transforms Entire Navbar on Click) -->
                <button 
                    type="button" 
                    id="navbar-search-btn"
                    onclick="openNavbarSearch()"
                    class="inline-flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl text-subheading hover:text-brand bg-transparent border border-border/80 hover:border-brand transition-colors duration-200 cursor-pointer"
                    title="Search colleges, courses..."
                    aria-label="Open search bar"
                >
                    <i data-lucide="search" class="w-4 h-4 sm:w-5 sm:h-5"></i>
                </button>

                <!-- Desktop Call Now CTA -->
                <div class="hidden sm:flex items-center">
                    <x-ui.button variant="action" href="tel:+917358110062" icon="phone-call" class="!px-4 sm:!px-5 !py-2 sm:!py-2.5 !text-[12px] sm:!text-[13px] !rounded-xl">
                        Call Now
                    </x-ui.button>
                </div>

                <!-- Mobile Hamburger Toggle Button (< lg) -->
                <button 
                    type="button" 
                    id="mobile-nav-toggle-btn"
                    onclick="toggleMobileNav()" 
                    class="lg:hidden inline-flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl text-heading hover:text-brand hover:bg-brand/5 focus:outline-none transition-colors cursor-pointer border border-border/80"
                    aria-label="Toggle navigation menu"
                    aria-expanded="false"
                >
                    <i id="mobile-nav-icon-menu" data-lucide="menu" class="w-5 h-5"></i>
                    <i id="mobile-nav-icon-close" data-lucide="x" class="w-5 h-5 hidden"></i>
                </button>

            </div>

        </div>

        <!-- ================= 2. TRANSFORMING FULL-WIDTH SEARCH BAR ================= -->
        <div 
            id="navbar-search-bar" 
            class="hidden absolute inset-0 z-50 bg-white px-4 sm:px-6 lg:px-8 flex items-center justify-between h-full transition-all duration-200"
            role="search"
            aria-label="Sitewide Search"
        >
            <form action="{{ url('/colleges') }}" method="GET" class="w-full flex items-center gap-2.5 sm:gap-4 max-w-7xl mx-auto h-full">
                
                <!-- Left: Search Icon in Brand Red -->
                <div class="flex-shrink-0 flex items-center text-brand">
                    <i data-lucide="search" class="w-5 h-5 sm:w-6 sm:h-6 text-brand"></i>
                </div>

                <!-- Center: Direct Full-Navbar Input (Spacious, Large & Clear) -->
                <input 
                    type="text" 
                    name="query" 
                    id="navbar-search-input" 
                    placeholder="Search colleges, courses, or locations..." 
                    class="flex-1 bg-transparent text-sm sm:text-base md:text-lg lg:text-xl font-medium text-heading placeholder:text-muted focus:outline-none h-full py-2 px-1 sm:px-2"
                    autocomplete="off"
                />

                <!-- Right: Submit Search Button + Close ("X") Button -->
                <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
                    <button 
                        type="submit" 
                        class="inline-flex items-center gap-1.5 px-4 sm:px-6 h-[40px] sm:h-[46px] rounded-xl bg-brand hover:bg-brand-hover text-white text-xs sm:text-sm font-semibold shadow-xs active:scale-95 transition-all cursor-pointer"
                    >
                        <span class="hidden sm:inline">Search</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>

                    <button 
                        type="button" 
                        onclick="closeNavbarSearch()" 
                        class="inline-flex items-center justify-center w-10 h-10 sm:w-11 sm:h-11 rounded-xl text-subheading hover:text-brand border border-border/80 hover:border-brand bg-transparent transition-colors cursor-pointer"
                        aria-label="Close search"
                        title="Close search (Esc)"
                    >
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>

            </form>
        </div>

    </div>

    <!-- ================= 3. MOBILE FULL-WIDTH SLIDE-DOWN DROPDOWN MENU (NO POPUP!) ================= -->
    <div 
        id="mobile-nav-dropdown" 
        class="hidden lg:hidden absolute top-full left-0 right-0 w-full bg-white border-b border-border/80 shadow-xl z-40 transition-all duration-300 origin-top overflow-hidden"
    >
        <div class="px-4 py-4 space-y-1 bg-white border-t border-border/40">
            
            <nav class="flex flex-col space-y-1 text-sm font-medium">
                <a 
                    href="{{ url('/') }}" 
                    onclick="closeMobileNav()"
                    class="flex items-center justify-between px-3.5 py-3 rounded-xl transition-colors {{ $isHome ? 'bg-brand/10 text-brand font-bold' : 'text-heading hover:bg-zinc-50 hover:text-brand' }}"
                >
                    <div class="flex items-center gap-3">
                        <i data-lucide="home" class="w-4 h-4 {{ $isHome ? 'text-brand' : 'text-muted' }}"></i>
                        <span>Home</span>
                    </div>
                    <i data-lucide="chevron-right" class="w-4 h-4 text-muted"></i>
                </a>

                <a 
                    href="{{ url('/colleges') }}" 
                    onclick="closeMobileNav()"
                    class="flex items-center justify-between px-3.5 py-3 rounded-xl transition-colors {{ $isColleges ? 'bg-brand/10 text-brand font-bold' : 'text-heading hover:bg-zinc-50 hover:text-brand' }}"
                >
                    <div class="flex items-center gap-3">
                        <i data-lucide="graduation-cap" class="w-4 h-4 {{ $isColleges ? 'text-brand' : 'text-muted' }}"></i>
                        <span>Colleges</span>
                    </div>
                    <i data-lucide="chevron-right" class="w-4 h-4 text-muted"></i>
                </a>

                <a 
                    href="{{ url('/#predict-cutoff') }}" 
                    onclick="closeMobileNav()"
                    class="flex items-center justify-between px-3.5 py-3 rounded-xl text-heading hover:bg-zinc-50 hover:text-brand transition-colors"
                >
                    <div class="flex items-center gap-3">
                        <i data-lucide="calculator" class="w-4 h-4 text-muted"></i>
                        <span>Cutoff Calculator</span>
                    </div>
                    <i data-lucide="chevron-right" class="w-4 h-4 text-muted"></i>
                </a>

                <a 
                    href="{{ url('/about') }}" 
                    onclick="closeMobileNav()"
                    class="flex items-center justify-between px-3.5 py-3 rounded-xl transition-colors {{ $isAbout ? 'bg-brand/10 text-brand font-bold' : 'text-heading hover:bg-zinc-50 hover:text-brand' }}"
                >
                    <div class="flex items-center gap-3">
                        <i data-lucide="info" class="w-4 h-4 {{ $isAbout ? 'text-brand' : 'text-muted' }}"></i>
                        <span>About</span>
                    </div>
                    <i data-lucide="chevron-right" class="w-4 h-4 text-muted"></i>
                </a>

                <a 
                    href="{{ url('/contact') }}" 
                    onclick="closeMobileNav()"
                    class="flex items-center justify-between px-3.5 py-3 rounded-xl transition-colors {{ $isContact ? 'bg-brand/10 text-brand font-bold' : 'text-heading hover:bg-zinc-50 hover:text-brand' }}"
                >
                    <div class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-4 h-4 {{ $isContact ? 'text-brand' : 'text-muted' }}"></i>
                        <span>Contact</span>
                    </div>
                    <i data-lucide="chevron-right" class="w-4 h-4 text-muted"></i>
                </a>
            </nav>

            <!-- Mobile Call CTA Button -->
            <div class="pt-3 mt-2 border-t border-border/70">
                <a 
                    href="tel:+917358110062" 
                    class="w-full flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-brand hover:bg-brand-hover text-white font-semibold text-sm shadow-xs active:scale-95 transition-all cursor-pointer"
                >
                    <i data-lucide="phone-call" class="w-4 h-4"></i>
                    <span>Call Now (+91 73581 10062)</span>
                </a>
            </div>

        </div>
    </div>
</header>

<!-- Navigation & Search Controller Scripts -->
<script>
    // --- FULLSCREEN SEARCH CONTROLLER ---
    function openNavbarSearch() {
        closeMobileNav(); // Close mobile menu if open
        const mainContent = document.getElementById('navbar-main-content');
        const searchBar = document.getElementById('navbar-search-bar');
        const input = document.getElementById('navbar-search-input');

        if (mainContent && searchBar) {
            mainContent.classList.add('opacity-0', 'pointer-events-none');
            searchBar.classList.remove('hidden');
            setTimeout(() => {
                if (input) input.focus();
            }, 60);
        }
    }

    function closeNavbarSearch() {
        const mainContent = document.getElementById('navbar-main-content');
        const searchBar = document.getElementById('navbar-search-bar');

        if (mainContent && searchBar) {
            searchBar.classList.add('hidden');
            mainContent.classList.remove('opacity-0', 'pointer-events-none');
        }
    }

    // --- MOBILE SLIDE-DOWN DROPDOWN CONTROLLER ---
    function toggleMobileNav() {
        const dropdown = document.getElementById('mobile-nav-dropdown');
        if (!dropdown) return;

        const isHidden = dropdown.classList.contains('hidden');
        if (isHidden) {
            openMobileNav();
        } else {
            closeMobileNav();
        }
    }

    function openMobileNav() {
        closeNavbarSearch(); // Close search bar if open
        const dropdown = document.getElementById('mobile-nav-dropdown');
        const iconMenu = document.getElementById('mobile-nav-icon-menu');
        const iconClose = document.getElementById('mobile-nav-icon-close');
        const toggleBtn = document.getElementById('mobile-nav-toggle-btn');

        if (dropdown) dropdown.classList.remove('hidden');
        if (iconMenu) iconMenu.classList.add('hidden');
        if (iconClose) iconClose.classList.remove('hidden');
        if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'true');
    }

    function closeMobileNav() {
        const dropdown = document.getElementById('mobile-nav-dropdown');
        const iconMenu = document.getElementById('mobile-nav-icon-menu');
        const iconClose = document.getElementById('mobile-nav-icon-close');
        const toggleBtn = document.getElementById('mobile-nav-toggle-btn');

        if (dropdown) dropdown.classList.add('hidden');
        if (iconMenu) iconMenu.classList.remove('hidden');
        if (iconClose) iconClose.classList.add('hidden');
        if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'false');
    }

    // Close on Escape Key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeNavbarSearch();
            closeMobileNav();
        }
    });

    // Close on Click Outside
    document.addEventListener('click', function(e) {
        const header = document.getElementById('site-main-navbar');
        if (header && !header.contains(e.target)) {
            closeNavbarSearch();
            closeMobileNav();
        }
    });
</script>
