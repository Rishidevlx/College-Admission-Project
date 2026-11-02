<!-- Reusable Footer Component (Figma Design Spec with Ambient Glow & Brand Orange Theme) -->
<footer class="bg-white border-t border-border/70 pt-12 sm:pt-16 lg:pt-20 pb-10 text-subheading overflow-hidden relative">
    
    <!-- Ambient Glow: Pure #F05023 Orange Tone (Contained low at the bottom edge) -->
    <div class="absolute -bottom-36 sm:-bottom-44 left-1/2 -translate-x-1/2 w-[600px] sm:w-[950px] lg:w-[1100px] h-[160px] sm:h-[200px] bg-[#F05023] rounded-full filter blur-[60px] sm:blur-[80px] opacity-25 sm:opacity-30 pointer-events-none z-0"></div>
    <div class="absolute -bottom-28 -left-20 sm:-bottom-36 sm:-left-24 w-[300px] sm:w-[380px] h-[130px] sm:h-[160px] bg-[#F05023] rounded-full filter blur-[50px] sm:blur-[70px] opacity-20 sm:opacity-25 pointer-events-none z-0"></div>
    <div class="absolute -bottom-28 -right-20 sm:-bottom-36 sm:-right-24 w-[300px] sm:w-[380px] h-[130px] sm:h-[160px] bg-[#F05023] rounded-full filter blur-[50px] sm:blur-[70px] opacity-20 sm:opacity-25 pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- ================= 1. PRE-FOOTER CTA BANNER ================= -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pb-10 sm:pb-12 border-b border-border/70">
            <div class="max-w-2xl">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-heading tracking-tight leading-tight">
                    Your Solutions <span class="text-brand">Start Here!</span>
                </h2>
                <p class="mt-2 text-[14px] sm:text-base font-normal text-muted leading-relaxed">
                    Tell us what you need, and we'll get in touch with the perfect guidance & college options.
                </p>
            </div>

            <div class="flex-shrink-0">
                <x-ui.outline-button href="#enquiry" icon="arrow-right">
                    Enquiry Now
                </x-ui.outline-button>
            </div>
        </div>

        <!-- ================= 2. MAIN 4-COLUMN FOOTER LINKS & BRAND ================= -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-8 pt-10 sm:pt-12">
            
            <!-- Left Brand Identity & Description (lg:col-span-3) -->
            <div class="lg:col-span-3 pr-0 lg:pr-4">
                <!-- Nextskill Brand Logo (Prominent Size) -->
                <a href="/" class="inline-block">
                    <img 
                        src="{{ asset('images/logo/nav-logo.svg') }}" 
                        alt="Nextskill Technologies" 
                        class="h-12 sm:h-14 lg:h-16 w-auto object-contain"
                    />
                </a>
                
                <!-- Short Description (Controlled Narrow Width) -->
                <p class="mt-4 text-[13px] sm:text-sm text-muted leading-relaxed max-w-[260px]">
                    Tamil Nadu's dedicated admission guidance platform helping 12th standard students choose the right accredited college, degree course, and career path with 100% free counselling.
                </p>
            </div>

            <!-- Column 1: Top Colleges (lg:col-span-2) -->
            <div class="lg:col-span-2">
                <div class="flex items-center gap-1.5 font-bold text-heading text-[15px] mb-4">
                    <span class="text-brand font-black">|</span>
                    <span>Top Colleges</span>
                </div>
                <ul class="space-y-2.5 text-[13px] text-muted">
                    <li><a href="#colleges" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Engineering (B.E / B.Tech)</a></li>
                    <li><a href="#colleges" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Arts & Science Colleges</a></li>
                    <li><a href="#colleges" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Medical & Dental</a></li>
                    <li><a href="#colleges" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Autonomous Colleges</a></li>
                    <li><a href="#colleges" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Top NIRF Ranked</a></li>
                    <li><a href="#colleges" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Govt & Govt-Aided</a></li>
                </ul>
            </div>

            <!-- Column 2: Top Courses (lg:col-span-2) -->
            <div class="lg:col-span-2">
                <div class="flex items-center gap-1.5 font-bold text-heading text-[15px] mb-4">
                    <span class="text-brand font-black">|</span>
                    <span>Top Courses</span>
                </div>
                <ul class="space-y-2.5 text-[13px] text-muted">
                    <li><a href="#courses" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">B.Tech AI & Data Science</a></li>
                    <li><a href="#courses" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">B.E Computer Science</a></li>
                    <li><a href="#courses" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">MBA / PGDM</a></li>
                    <li><a href="#courses" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">BCA & B.Sc Data Analytics</a></li>
                    <li><a href="#courses" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">MBBS & Allied Health</a></li>
                    <li><a href="#courses" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">B.Com & Business Systems</a></li>
                </ul>
            </div>

            <!-- Column 3: Quick Links (lg:col-span-2) -->
            <div class="lg:col-span-2">
                <div class="flex items-center gap-1.5 font-bold text-heading text-[15px] mb-4">
                    <span class="text-brand font-black">|</span>
                    <span>Quick Links</span>
                </div>
                <ul class="space-y-2.5 text-[13px] text-muted">
                    <li><a href="{{ url('/colleges') }}" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Find Colleges</a></li>
                    <li><a href="#courses" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Explore Courses</a></li>
                    <li><a href="#locations" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Browse Districts</a></li>
                    <li><a href="#about" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">About Us</a></li>
                    <li><a href="#contact" class="hover:text-brand hover:translate-x-0.5 transition-all inline-block">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Details (lg:col-span-3 - spacious & neatly wrapped) -->
            <div class="lg:col-span-3">
                <div class="flex items-center gap-1.5 font-bold text-heading text-[15px] mb-4">
                    <span class="text-brand font-black">|</span>
                    <span>Contact Details</span>
                </div>
                <div class="space-y-3.5 text-[12px] sm:text-[13px] text-muted">
                    <!-- Office Address -->
                    <div class="flex items-start gap-2.5">
                        <i data-lucide="map-pin" class="w-4 h-4 text-brand flex-shrink-0 mt-0.5"></i>
                        <span class="leading-relaxed">
                            No.90, First Floor, Srinagar<br>
                            Near Selva Vinayakar Temple,<br>
                            Hopes College, Peelamedu Post,<br>
                            Coimbatore, Tamil Nadu - 641004, India
                        </span>
                    </div>

                    <!-- Contact Numbers -->
                    <div class="flex items-start gap-2.5 pt-1">
                        <i data-lucide="phone" class="w-4 h-4 text-brand flex-shrink-0 mt-0.5"></i>
                        <div class="flex flex-col gap-0.5">
                            <a href="tel:+917358110062" class="hover:text-brand transition-colors font-medium text-heading">+91-7358110062</a>
                            <a href="tel:+917358110064" class="hover:text-brand transition-colors font-medium text-heading">+91-7358110064</a>
                        </div>
                    </div>

                    <!-- Mail Address -->
                    <div class="flex items-start gap-2.5 pt-1">
                        <i data-lucide="mail" class="w-4 h-4 text-brand flex-shrink-0 mt-0.5"></i>
                        <a href="mailto:nextskilltechnologies@gmail.com" class="hover:text-brand transition-colors break-all">
                            nextskilltechnologies@gmail.com
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= 3. BOTTOM FOOTER BAR (LEGAL & INLINE SVG SOCIALS) ================= -->
        <div class="border-t border-border/70 pt-8 mt-12 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs sm:text-[13px] text-muted">
            
            <!-- Legal Links -->
            <div class="flex items-center gap-5 font-medium">
                <a href="#terms" class="hover:text-brand transition-colors">Terms of Use*</a>
                <span class="text-border">•</span>
                <a href="#privacy" class="hover:text-brand transition-colors">Privacy Policy*</a>
            </div>

            <!-- Social Media Follow Links (Crisp, Larger Size SVGs) -->
            <div class="flex items-center gap-3.5">
                <span class="text-xs sm:text-sm font-semibold text-heading">Follow us</span>
                <div class="flex items-center gap-2.5">
                    <!-- Facebook -->
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-border/90 flex items-center justify-center text-muted hover:text-brand hover:border-brand hover:bg-brand/5 transition-all shadow-xs">
                        <svg class="w-4 h-4 sm:w-[18px] sm:h-[18px] fill-current" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-border/90 flex items-center justify-center text-muted hover:text-brand hover:border-brand hover:bg-brand/5 transition-all shadow-xs">
                        <svg class="w-4 h-4 sm:w-[18px] sm:h-[18px] fill-none stroke-current" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>
                    <!-- X / Twitter -->
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="X" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-border/90 flex items-center justify-center text-muted hover:text-brand hover:border-brand hover:bg-brand/5 transition-all shadow-xs">
                        <svg class="w-4 h-4 sm:w-[18px] sm:h-[18px] fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/917358110062" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-border/90 flex items-center justify-center text-muted hover:text-brand hover:border-brand hover:bg-brand/5 transition-all shadow-xs">
                        <svg class="w-4 h-4 sm:w-[18px] sm:h-[18px] fill-none stroke-current" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    </a>
                    <!-- YouTube -->
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border border-border/90 flex items-center justify-center text-muted hover:text-brand hover:border-brand hover:bg-brand/5 transition-all shadow-xs">
                        <svg class="w-4 h-4 sm:w-[18px] sm:h-[18px] fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- Copyright Notice -->
        <div class="mt-6 text-center text-xs text-muted/80">
            © 2026 Nextskill Technologies Pvt. Ltd. All Rights Reserved.
        </div>

    </div>

</footer>