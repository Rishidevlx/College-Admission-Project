<!-- Reusable 2-Tier Mega Footer Component (Theme variables powered dynamically via app.css) -->
<footer class="bg-footer-bg border-t border-footer-border text-footer-text overflow-hidden relative selection:bg-brand selection:text-white">

    <!-- =========================================================================
         TIER 1: DIRECTORY & SEO SUB-FOOTER (Real Colleges, Locations & Streams)
         ========================================================================= -->
    <div class="border-b border-footer-border/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 text-xs sm:text-[13px]">
                
                <!-- Col 1: Top Colleges in Tamil Nadu (Our Real Slugs) -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4 pb-2 border-b border-footer-border">
                        Top Colleges
                    </h4>
                    <ul class="space-y-2.5">
                        <li>
                            <a href="{{ url('/colleges/psg-college-of-technology') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                PSG College of Technology
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/ssn-college-of-engineering') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                SSN College of Engineering
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/coimbatore-institute-of-technology-cit') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Coimbatore Institute of Tech (CIT)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/thiagarajar-college-of-engineering-tce') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Thiagarajar College of Engg (TCE)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/loyola-college-autonomous') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Loyola College (Autonomous)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/kumaraguru-college-of-technology-kct') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Kumaraguru College of Tech (KCT)
                            </a>
                        </li>
                        <li class="pt-1">
                            <a href="{{ url('/colleges') }}" class="text-brand font-semibold hover:underline flex items-center gap-1">
                                <span>Browse All Colleges</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 2: Colleges by City / Category -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4 pb-2 border-b border-footer-border">
                        Colleges by District
                    </h4>
                    <ul class="space-y-2.5">
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Colleges in Coimbatore
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Colleges in Chennai
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Colleges in Madurai
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Autonomous Engineering Colleges
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Govt & Govt-Aided Institutions
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                NAAC A++ Accredited Colleges
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3: Academic Streams -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4 pb-2 border-b border-footer-border">
                        Academic Streams
                    </h4>
                    <ul class="space-y-2.5">
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Engineering & Technology (B.E / B.Tech)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Management & Business (MBA / BBA)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Computer Applications (MCA / BCA)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Commerce & Accounting (B.Com)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Medical & Allied Health Sciences
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Science & Technology Degrees
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 4: 12th Cutoff Tools & Counselling -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4 pb-2 border-b border-footer-border">
                        Admission & Cutoffs
                    </h4>
                    <ul class="space-y-2.5">
                        <li>
                            <a href="{{ url('/cutoff-calculator') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                12th Cutoff Calculator (200 Marks)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/cutoff-calculator') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Engineering (TNEA) Cutoff
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/cutoff-calculator') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Medical (Paramedical) Cutoff
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/cutoff-calculator') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Agriculture (TNAU) Cutoff
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Direct Admission Counselling
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Free College Guidance Form
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Row 2: Category Colleges (Aligned 4-Column Grid matching Tier 1 columns straight) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 pt-8 sm:pt-10 mt-8 sm:mt-10 border-t border-footer-border/70 text-xs sm:text-[13px]">
                
                <!-- Col 1: Top Engineering Colleges (Alters straight below Top Colleges) -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4 pb-2 border-b border-footer-border">
                        Top Engineering Colleges
                    </h4>
                    <ul class="space-y-2.5">
                        <li>
                            <a href="{{ url('/colleges/psg-college-of-technology') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                PSG College of Technology, Coimbatore
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/ssn-college-of-engineering') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                SSN College of Engineering, Chennai
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/coimbatore-institute-of-technology-cit') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Coimbatore Institute of Tech (CIT)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/thiagarajar-college-of-engineering-tce') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Thiagarajar College of Engg (TCE)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges/kumaraguru-college-of-technology-kct') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Kumaraguru College of Tech (KCT)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Govt College of Technology (GCT)
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 2: Top Arts & Science Colleges (Alters straight below Colleges by District) -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4 pb-2 border-b border-footer-border">
                        Top Arts & Science Colleges
                    </h4>
                    <ul class="space-y-2.5">
                        <li>
                            <a href="{{ url('/colleges/loyola-college-autonomous') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Loyola College (Autonomous), Chennai
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                PSG College of Arts & Science
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Madras Christian College (MCC)
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Bishop Heber College, Trichy
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Stella Maris College, Chennai
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                St. Joseph's College, Trichy
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3: Top Nursing & Paramedical Colleges (Alters straight below Academic Streams) -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4 pb-2 border-b border-footer-border">
                        Top Nursing & Paramedical Colleges
                    </h4>
                    <ul class="space-y-2.5">
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                CMC Vellore College of Nursing
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                PSG College of Nursing, Coimbatore
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                KMCH College of Nursing, Coimbatore
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Sri Ramachandra Faculty of Nursing
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Madras Medical College (MMC) Nursing
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                                Apollo College of Nursing, Chennai
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 4: Empty slot / Quick Help aligning with 4th Column -->
                <div class="hidden lg:block">
                    <!-- Clean empty spacer to keep straight vertical alignment with Column 4 above -->
                </div>

            </div>
        </div>
    </div>

    <!-- =========================================================================
         TIER 2: MAIN BRAND, NAVIGATION & CONTACT DETAILS
         ========================================================================= -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-10">
            
            <!-- Left: Brand Logo & Mission (lg:col-span-4) -->
            <div class="lg:col-span-4 space-y-4">
                <a href="{{ url('/') }}" class="inline-block">
                    <img 
                        src="{{ asset('images/logo/nav-logo.svg') }}" 
                        alt="Nextskill Technologies" 
                        class="h-10 sm:h-12 w-auto object-contain"
                    />
                </a>
                
                <p class="text-xs sm:text-sm text-footer-text leading-relaxed max-w-sm">
                    Tamil Nadu's dedicated admission guidance platform helping 12th standard students choose the right accredited college, degree course, and career path with 100% free counselling.
                </p>

                <!-- Helpline Quick Pill -->
                <div class="pt-1 flex flex-wrap gap-2.5">
                    <a 
                        href="tel:+917358110062" 
                        class="inline-flex items-center gap-2 px-3 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-footer-card border border-footer-border text-xs font-semibold text-footer-heading hover:border-brand hover:text-brand transition-all shadow-xs"
                    >
                        <i data-lucide="phone-call" class="w-3.5 h-3.5 text-brand"></i>
                        <span>+91-7358110062</span>
                    </a>
                    <a 
                        href="tel:+917358110064" 
                        class="inline-flex items-center gap-2 px-3 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-footer-card border border-footer-border text-xs font-semibold text-footer-heading hover:border-brand hover:text-brand transition-all shadow-xs"
                    >
                        <i data-lucide="phone" class="w-3.5 h-3.5 text-brand"></i>
                        <span>+91-7358110064</span>
                    </a>
                </div>
            </div>

            <!-- Center: Quick Site Navigation (lg:col-span-3) -->
            <div class="lg:col-span-3 pt-2 lg:pt-0">
                <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-3 sm:mb-4">
                    Quick Navigation
                </h4>
                <ul class="space-y-2.5 text-xs sm:text-[13px]">
                    <li>
                        <a href="{{ url('/') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                            Colleges Directory
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/cutoff-calculator') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                            12th Cutoff Calculator
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="hover:text-brand hover:translate-x-1 transition-all inline-block">
                            Contact & Support
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Right: Office Address & Contact (lg:col-span-5) -->
            <div class="lg:col-span-5 space-y-3 pt-2 lg:pt-0">
                <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-3 sm:mb-4">
                    Registered Office & Counselling Center
                </h4>
                
                <div class="space-y-3 text-xs sm:text-[13px]">
                    <div class="flex items-start gap-2.5">
                        <i data-lucide="map-pin" class="w-4 h-4 text-brand flex-shrink-0 mt-0.5"></i>
                        <a 
                            href="https://maps.google.com/?q=No.90,+First+Floor,+Srinagar,+Hopes+College,+Peelamedu,+Coimbatore+-+641004" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="leading-relaxed hover:text-brand hover:underline transition-colors"
                            title="Open office location in Google Maps"
                        >
                            No.90, First Floor, Srinagar, Near Selva Vinayakar Temple, Hopes College, Peelamedu Post, Coimbatore - 641004, Tamil Nadu, India
                        </a>
                    </div>

                    <div class="flex items-center gap-2.5">
                        <i data-lucide="mail" class="w-4 h-4 text-brand flex-shrink-0"></i>
                        <a href="mailto:nextskilltechnologies@gmail.com" class="hover:text-brand transition-colors">
                            nextskilltechnologies@gmail.com
                        </a>
                    </div>

                    <div class="flex items-center gap-2.5">
                        <i data-lucide="clock" class="w-4 h-4 text-brand flex-shrink-0"></i>
                        <span>Monday - Saturday: 10:00 AM - 6:00 PM</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Horizontal Full-Width Short Disclaimer (Part of Tier 2, no separate outer section/borders) -->
        <div class="pt-6 sm:pt-8 border-t border-footer-border/60 mt-8">
            <p class="text-[11px] sm:text-xs text-footer-muted leading-relaxed text-center sm:text-left">
                <span class="font-bold text-footer-heading tracking-wide">Disclaimer:</span> NextSkill is an independent admission guidance platform. We do not offer or guarantee company jobs or placement packages. Admission decisions and campus placements remain solely with respective colleges and universities.
            </p>
        </div>

    </div>

    <!-- =========================================================================
         TIER 3: LEGAL, POLICY & SOCIAL BAR (Inspired by NIAT Layout)
         ========================================================================= -->
    <div class="border-t border-footer-border bg-footer-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col md:flex-row items-center justify-between gap-4 text-xs">
            
            <!-- Left Side: Clean Inline SVG Social Media Icons (WhatsApp included) -->
            <div class="flex items-center gap-3">
                <!-- Facebook -->
                <a 
                    href="https://facebook.com" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="w-8 h-8 rounded-lg bg-footer-card border border-footer-border flex items-center justify-center text-footer-heading hover:text-brand hover:border-brand transition-all"
                    aria-label="Facebook"
                >
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>

                <!-- Instagram -->
                <a 
                    href="https://instagram.com" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="w-8 h-8 rounded-lg bg-footer-card border border-footer-border flex items-center justify-center text-footer-heading hover:text-brand hover:border-brand transition-all"
                    aria-label="Instagram"
                >
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>

                <!-- X / Twitter -->
                <a 
                    href="https://twitter.com" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="w-8 h-8 rounded-lg bg-footer-card border border-footer-border flex items-center justify-center text-footer-heading hover:text-brand hover:border-brand transition-all"
                    aria-label="X / Twitter"
                >
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a 
                    href="https://linkedin.com" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="w-8 h-8 rounded-lg bg-footer-card border border-footer-border flex items-center justify-center text-footer-heading hover:text-brand hover:border-brand transition-all"
                    aria-label="LinkedIn"
                >
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>

                <!-- WhatsApp -->
                <a 
                    href="https://wa.me/917358110062" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="w-8 h-8 rounded-lg bg-footer-card border border-footer-border flex items-center justify-center text-footer-heading hover:text-brand hover:border-brand transition-all"
                    aria-label="WhatsApp"
                >
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.301-.15-1.78-.879-2.056-.98-.276-.1-.477-.15-.678.15-.2.3-.777.98-.952 1.18-.175.2-.351.226-.652.075-.301-.15-1.272-.469-2.423-1.496-.896-.798-1.501-1.784-1.677-2.085-.175-.301-.019-.464.132-.614.135-.134.301-.351.451-.527.151-.175.2-.3.301-.501.101-.2.05-.376-.025-.526-.075-.15-.678-1.634-.928-2.235-.243-.585-.49-.506-.673-.515-.174-.01-.373-.012-.573-.012-.2 0-.526.075-.802.376-.276.301-1.053 1.028-1.053 2.508 0 1.48 1.078 2.909 1.229 3.109.15.2 2.122 3.24 5.141 4.544.718.31 1.279.496 1.716.635.722.23 1.38.197 1.9-.12.58-.354 1.78-1.052 2.03-1.73.251-.678.251-1.258.176-1.38-.076-.122-.276-.197-.577-.348zm-5.42 7.618h-.005a10.01 10.01 0 0 1-5.1-1.393l-.365-.217-3.791.995 1.012-3.696-.238-.379a10.007 10.007 0 0 1-1.535-5.31c0-5.524 4.495-10.019 10.025-10.019 2.677 0 5.193 1.043 7.085 2.935a9.96 9.96 0 0 1 2.934 7.085c0 5.525-4.495 10.024-10.024 10.024zm8.502-18.528A11.936 11.936 0 0 0 12.052 0C5.466 0 .108 5.358.106 11.944c0 2.105.549 4.16 1.593 5.97L0 24l6.269-1.644a11.933 11.933 0 0 0 5.78 1.484h.005c6.585 0 11.946-5.358 11.948-11.945a11.89 11.89 0 0 0-3.5-8.475z"/>
                    </svg>
                </a>
            </div>

            <!-- Right Side: Essential Legal & Policy Links (Terms of use, Privacy Policy, Cookie Policy) -->
            <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-8 font-medium">
                <a href="{{ route('terms') }}" class="text-footer-heading hover:text-brand transition-colors">
                    Terms of use
                </a>
                <a href="{{ route('privacy') }}" class="text-footer-heading hover:text-brand transition-colors">
                    Privacy Policy
                </a>
                <a href="{{ route('cookie.policy') }}" class="text-footer-heading hover:text-brand transition-colors">
                    Cookie Policy
                </a>
            </div>

        </div>
    </div>

    <!-- =========================================================================
         TIER 4: COPYRIGHT BOTTOM STRIP
         ========================================================================= -->
    <div class="bg-footer-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-5 pt-1 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-footer-muted">
            <p>
                © 2024–{{ date('Y') }} Nextskill Technologies Pvt Ltd. All rights reserved.
            </p>
            <p class="text-center sm:text-right">
                Dedicated Higher Education & College Admission Guidance in Tamil Nadu
            </p>
        </div>
    </div>

</footer>
