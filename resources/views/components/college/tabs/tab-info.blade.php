@props([
    'college' => []
])

<!-- Tab Pane 1: College Info (Comprehensive Blog-style Layout with Table of Contents & Sticky Nav) -->
<div id="pane-info" class="college-tab-pane space-y-6">

    <!-- Blog Header / Overview Banner Card -->
    <div class="bg-white rounded-2xl border border-border p-6 sm:p-8 shadow-xs">
        
        <!-- Table of Contents (TOC Quick Navigation Box) -->
        <div class="mb-8 p-5 sm:p-6 bg-zinc-50/80 rounded-2xl border border-border/80">
            <div class="flex items-center gap-2 mb-3.5">
                <i data-lucide="list-ordered" class="w-4 h-4 text-brand"></i>
                <h4 class="text-xs sm:text-sm font-bold text-heading uppercase tracking-wider">
                    Table of Contents
                </h4>
            </div>
            
            <nav class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs sm:text-[13px] font-medium text-subheading">
                <a href="#section-highlights" class="hover:text-brand flex items-center gap-2 py-1 transition-colors">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand/50"></span>
                    <span>1. Key Institutional Highlights</span>
                </a>
                <a href="#section-overview" class="hover:text-brand flex items-center gap-2 py-1 transition-colors">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand/50"></span>
                    <span>2. Detailed College Overview</span>
                </a>
                <a href="#section-accreditation" class="hover:text-brand flex items-center gap-2 py-1 transition-colors">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand/50"></span>
                    <span>3. Accreditation & Approvals</span>
                </a>
                <a href="#section-ranking" class="hover:text-brand flex items-center gap-2 py-1 transition-colors">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand/50"></span>
                    <span>4. Rankings & Recognition</span>
                </a>
                <a href="#section-campus" class="hover:text-brand flex items-center gap-2 py-1 transition-colors">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand/50"></span>
                    <span>5. Campus Infrastructure & Life</span>
                </a>
                <a href="#section-admission-summary" class="hover:text-brand flex items-center gap-2 py-1 transition-colors">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand/50"></span>
                    <span>6. Admission Mode & Counselling</span>
                </a>
            </nav>
        </div>

        <!-- Section 1: Key Institutional Highlights -->
        <section id="section-highlights" class="pt-2 pb-8 border-b border-border/70 scroll-mt-36">
            <h3 class="text-base sm:text-lg font-bold text-heading flex items-center gap-2.5 mb-4">
                <span class="w-6 h-6 rounded-lg bg-brand/10 text-brand text-xs font-black flex items-center justify-center">1</span>
                <span>Key Institutional Highlights</span>
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-sm">
                <div class="p-3.5 rounded-xl bg-zinc-50 border border-border/80 flex items-center gap-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-brand flex-shrink-0"></i>
                    <div>
                        <span class="text-muted block text-[11px]">Established Year</span>
                        <strong class="text-heading font-semibold">1951 (70+ Years Legacy)</strong>
                    </div>
                </div>

                <div class="p-3.5 rounded-xl bg-zinc-50 border border-border/80 flex items-center gap-3">
                    <i data-lucide="award" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                    <div>
                        <span class="text-muted block text-[11px]">NAAC Accreditation</span>
                        <strong class="text-heading font-semibold">A++ Grade (Highest Tier)</strong>
                    </div>
                </div>

                <div class="p-3.5 rounded-xl bg-zinc-50 border border-border/80 flex items-center gap-3">
                    <i data-lucide="trophy" class="w-4 h-4 text-amber-500 flex-shrink-0"></i>
                    <div>
                        <span class="text-muted block text-[11px]">NIRF 2024 Ranking</span>
                        <strong class="text-heading font-semibold">Rank #63 among Engineering Colleges</strong>
                    </div>
                </div>

                <div class="p-3.5 rounded-xl bg-zinc-50 border border-border/80 flex items-center gap-3">
                    <i data-lucide="map-pin" class="w-4 h-4 text-brand flex-shrink-0"></i>
                    <div>
                        <span class="text-muted block text-[11px]">Location</span>
                        <strong class="text-heading font-semibold">Peelamedu, Coimbatore, Tamil Nadu</strong>
                    </div>
                </div>

                <div class="p-3.5 rounded-xl bg-zinc-50 border border-border/80 flex items-center gap-3">
                    <i data-lucide="briefcase" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                    <div>
                        <span class="text-muted block text-[11px]">Placement Percentage</span>
                        <strong class="text-heading font-semibold">96.4% Consistent Placement</strong>
                    </div>
                </div>

                <div class="p-3.5 rounded-xl bg-zinc-50 border border-border/80 flex items-center gap-3">
                    <i data-lucide="trees" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                    <div>
                        <span class="text-muted block text-[11px]">Campus Spread</span>
                        <strong class="text-heading font-semibold">45+ Acres Modern Smart Campus</strong>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Detailed College Overview -->
        <section id="section-overview" class="py-8 border-b border-border/70 scroll-mt-36">
            <h3 class="text-base sm:text-lg font-bold text-heading flex items-center gap-2.5 mb-4">
                <span class="w-6 h-6 rounded-lg bg-brand/10 text-brand text-xs font-black flex items-center justify-center">2</span>
                <span>Detailed College Overview</span>
            </h3>

            <div class="prose prose-sm max-w-none text-subheading space-y-3.5 text-xs sm:text-sm leading-relaxed">
                <p>
                    Established in 1951 by the PSG & Sons' Charities Trust, <strong>PSG College of Technology</strong> is a pioneer in self-financing autonomous education in India. Recognized for producing top engineering talent, the institution bridges the gap between academia and heavy industry through its unique on-campus commercial production plants and state-of-the-art R&D centers.
                </p>
                <p>
                    The college is an autonomous institution affiliated to Anna University, Chennai, with academic autonomy granting it the freedom to continually revamp its syllabi according to fast-evolving global technological trends such as AI, Robotics, Renewable Energy, and Smart Manufacturing.
                </p>
            </div>
        </section>

        <!-- Section 3: Accreditation & Approvals -->
        <section id="section-accreditation" class="py-8 border-b border-border/70 scroll-mt-36">
            <h3 class="text-base sm:text-lg font-bold text-heading flex items-center gap-2.5 mb-4">
                <span class="w-6 h-6 rounded-lg bg-brand/10 text-brand text-xs font-black flex items-center justify-center">3</span>
                <span>Accreditation & Approvals</span>
            </h3>

            <div class="space-y-4">
                <div>
                    <span class="text-xs font-bold text-heading block mb-2">Statutory Approvals</span>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="px-3 py-1.5 rounded-lg bg-zinc-100 text-heading font-semibold border border-border">AICTE Approved</span>
                        <span class="px-3 py-1.5 rounded-lg bg-zinc-100 text-heading font-semibold border border-border">UGC 2(f) & 12(B) Recognized</span>
                        <span class="px-3 py-1.5 rounded-lg bg-zinc-100 text-heading font-semibold border border-border">Anna University Autonomous</span>
                        <span class="px-3 py-1.5 rounded-lg bg-zinc-100 text-heading font-semibold border border-border">Govt. of Tamil Nadu Approved</span>
                    </div>
                </div>

                <div>
                    <span class="text-xs font-bold text-heading block mb-2">Quality Accreditations</span>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-800 font-bold border border-emerald-200">NAAC A++ Grade</span>
                        <span class="px-3 py-1.5 rounded-lg bg-blue-50 text-blue-800 font-bold border border-blue-200">NBA Tier-1 Accredited Programs</span>
                        <span class="px-3 py-1.5 rounded-lg bg-purple-50 text-purple-800 font-bold border border-purple-200">ISO 9001:2015 Certified</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Rankings & Recognition -->
        <section id="section-ranking" class="py-8 border-b border-border/70 scroll-mt-36">
            <h3 class="text-base sm:text-lg font-bold text-heading flex items-center gap-2.5 mb-4">
                <span class="w-6 h-6 rounded-lg bg-brand/10 text-brand text-xs font-black flex items-center justify-center">4</span>
                <span>Rankings & Recognition</span>
            </h3>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs sm:text-sm border border-border rounded-xl overflow-hidden">
                    <thead class="bg-zinc-50 border-b border-border text-heading font-bold">
                        <tr>
                            <th class="p-3">Ranking Agency</th>
                            <th class="p-3">Category</th>
                            <th class="p-3">Rank / Score</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border text-subheading">
                        <tr>
                            <td class="p-3 font-semibold text-heading">NIRF (Ministry of Education)</td>
                            <td class="p-3">Engineering</td>
                            <td class="p-3 font-bold text-brand">Rank #63</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-semibold text-heading">India Today Survey</td>
                            <td class="p-3">Top Private Engineering</td>
                            <td class="p-3 font-bold text-brand">Rank #9 Nationwide</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-semibold text-heading">Outlook I-CARE</td>
                            <td class="p-3">Engineering Autonomous</td>
                            <td class="p-3 font-bold text-brand">Rank #5 in South Zone</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Section 5: Campus Infrastructure & Life -->
        <section id="section-campus" class="py-8 border-b border-border/70 scroll-mt-36">
            <h3 class="text-base sm:text-lg font-bold text-heading flex items-center gap-2.5 mb-4">
                <span class="w-6 h-6 rounded-lg bg-brand/10 text-brand text-xs font-black flex items-center justify-center">5</span>
                <span>Campus Infrastructure & Student Life</span>
            </h3>

            <p class="text-xs sm:text-sm text-subheading leading-relaxed mb-4">
                The 45-acre campus in Peelamedu, Coimbatore, provides an expansive ecosystem for learning and recreation. With 10 Gbps fiber connectivity across all facilities, high-performance computing centers, dedicated tech incubator hubs, separate boys & girls hostels, and sports grounds, students experience an engaging campus lifestyle.
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs font-medium text-heading">
                <span class="p-2.5 rounded-lg bg-zinc-50 border border-border flex items-center gap-2">
                    <i data-lucide="check" class="w-3.5 h-3.5 text-brand"></i>
                    <span>Central Library (2.5L+ Books)</span>
                </span>
                <span class="p-2.5 rounded-lg bg-zinc-50 border border-border flex items-center gap-2">
                    <i data-lucide="check" class="w-3.5 h-3.5 text-brand"></i>
                    <span>Industrial Workshop Complex</span>
                </span>
                <span class="p-2.5 rounded-lg bg-zinc-50 border border-border flex items-center gap-2">
                    <i data-lucide="check" class="w-3.5 h-3.5 text-brand"></i>
                    <span>Indoor Sports Stadium & Gym</span>
                </span>
                <span class="p-2.5 rounded-lg bg-zinc-50 border border-border flex items-center gap-2">
                    <i data-lucide="check" class="w-3.5 h-3.5 text-brand"></i>
                    <span>Student Innovation Hub (STEP)</span>
                </span>
                <span class="p-2.5 rounded-lg bg-zinc-50 border border-border flex items-center gap-2">
                    <i data-lucide="check" class="w-3.5 h-3.5 text-brand"></i>
                    <span>Hygienic Multicuisine Food Court</span>
                </span>
                <span class="p-2.5 rounded-lg bg-zinc-50 border border-border flex items-center gap-2">
                    <i data-lucide="check" class="w-3.5 h-3.5 text-brand"></i>
                    <span>24x7 Campus Health Center</span>
                </span>
            </div>
        </section>

        <!-- Section 6: Admission Mode & Counselling -->
        <section id="section-admission-summary" class="pt-8 scroll-mt-36">
            <h3 class="text-base sm:text-lg font-bold text-heading flex items-center gap-2.5 mb-4">
                <span class="w-6 h-6 rounded-lg bg-brand/10 text-brand text-xs font-black flex items-center justify-center">6</span>
                <span>Admission Mode & Counselling</span>
            </h3>

            <p class="text-xs sm:text-sm text-subheading leading-relaxed mb-4">
                B.E / B.Tech seats are allotted primarily via <strong>Tamil Nadu Engineering Admissions (TNEA)</strong> single-window counselling administered by the Directorate of Technical Education (DoTE). A percentage of seats are also available through management quota and NRI admission pathways for qualifying applicants.
            </p>

            <div class="p-4 rounded-xl bg-orange-50/50 border border-brand/20 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div>
                    <span class="text-xs font-bold text-heading block">Need Admission Guidance or Cutoff Analysis?</span>
                    <span class="text-[11px] text-muted block mt-0.5">Talk directly with our senior educational advisors for Tamil Nadu colleges.</span>
                </div>
                <a 
                    href="#apply-sidebar" 
                    class="px-4 py-2 rounded-lg bg-brand hover:bg-brand-hover text-white text-xs font-bold transition-all text-center flex-shrink-0"
                >
                    Get Free Counselling
                </a>
            </div>
        </section>

    </div>

</div>
