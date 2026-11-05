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
        </div>
    </div>

    <!-- =========================================================================
         TIER 2: MAIN BRAND, NAVIGATION & CONTACT DETAILS
         ========================================================================= -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-10">
            
            <!-- Left: Brand Logo & Mission (lg:col-span-4) -->
            <div class="lg:col-span-4 space-y-4">
                <a href="{{ url('/') }}" class="inline-block">
                    <img 
                        src="{{ asset('images/logo/nav-logo.svg') }}" 
                        alt="Nextskill Technologies" 
                        class="h-11 sm:h-13 w-auto object-contain"
                    />
                </a>
                
                <p class="text-xs sm:text-sm text-footer-text leading-relaxed max-w-sm">
                    Tamil Nadu's dedicated admission guidance platform helping 12th standard students choose the right accredited college, degree course, and career path with 100% free counselling.
                </p>

                <!-- Helpline Quick Pill -->
                <div class="pt-2 flex flex-wrap gap-2.5">
                    <a 
                        href="tel:+917358110062" 
                        class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-footer-card border border-footer-border text-xs font-semibold text-footer-heading hover:border-brand hover:text-brand transition-all shadow-xs"
                    >
                        <i data-lucide="phone-call" class="w-3.5 h-3.5 text-brand"></i>
                        <span>+91-7358110062</span>
                    </a>
                    <a 
                        href="tel:+917358110064" 
                        class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-footer-card border border-footer-border text-xs font-semibold text-footer-heading hover:border-brand hover:text-brand transition-all shadow-xs"
                    >
                        <i data-lucide="phone" class="w-3.5 h-3.5 text-brand"></i>
                        <span>+91-7358110064</span>
                    </a>
                </div>
            </div>

            <!-- Center: Quick Site Navigation (lg:col-span-3) -->
            <div class="lg:col-span-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4">
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
            <div class="lg:col-span-5 space-y-3.5">
                <h4 class="text-xs font-bold uppercase tracking-wider text-footer-heading mb-4">
                    Registered Office & Counselling Center
                </h4>
                
                <div class="space-y-3 text-xs sm:text-[13px]">
                    <div class="flex items-start gap-2.5">
                        <i data-lucide="map-pin" class="w-4 h-4 text-brand flex-shrink-0 mt-0.5"></i>
                        <span class="leading-relaxed">
                            No.90, First Floor, Srinagar, Near Selva Vinayakar Temple, Hopes College, Peelamedu Post, Coimbatore - 641004, Tamil Nadu, India
                        </span>
                    </div>

                    <div class="flex items-center gap-2.5">
                        <i data-lucide="mail" class="w-4 h-4 text-brand flex-shrink-0"></i>
                        <a href="mailto:nextskilltechnologies@gmail.com" class="hover:text-brand transition-colors">
                            nextskilltechnologies@gmail.com
                        </a>
                    </div>

                    <div class="flex items-center gap-2.5">
                        <i data-lucide="clock" class="w-4 h-4 text-muted flex-shrink-0"></i>
                        <span>Monday - Saturday: 10:00 AM - 6:00 PM</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- =========================================================================
         BOTTOM STRIP (SUB-FOOTER): COPYRIGHT & LEGAL
         ========================================================================= -->
    <div class="border-t border-footer-border bg-black/25">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-footer-muted">
            <p>
                © 2024–{{ date('Y') }} Nextskill Technologies Pvt Ltd. All rights reserved.
            </p>
            <div class="flex items-center gap-4 text-xs">
                <a href="{{ route('terms') }}" class="hover:text-brand transition-colors">
                    Terms & Conditions
                </a>
                <span class="text-footer-border">•</span>
                <a href="{{ route('privacy') }}" class="hover:text-brand transition-colors">
                    Privacy Policy
                </a>
            </div>
        </div>
    </div>

</footer>
