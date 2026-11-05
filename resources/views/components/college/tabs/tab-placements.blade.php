@props([
    'college' => []
])

<!-- Tab Pane 4: Placements & Recruiters (Clean Single Blog Post Layout) -->
<div id="pane-placements" class="college-tab-pane hidden space-y-6">

    <article class="bg-white rounded-2xl border border-border p-6 sm:p-8 shadow-xs space-y-7">
        
        <!-- Blog Title Header -->
        <div class="border-b border-border/70 pb-5">
            <span class="inline-block px-3 py-1 rounded-full text-[11px] font-bold bg-brand/10 text-brand mb-2.5">
                Career & Placements Report
            </span>
            <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-heading tracking-tight">
                Placement Overview & Industry Recruitment Report
            </h3>
            <p class="text-xs sm:text-sm text-muted mt-1.5 leading-relaxed">
                A comprehensive look at annual salary trends, premier recruiting partners, and the placement training ecosystem.
            </p>
        </div>

        <!-- 1. Executive Summary / Highlights Numbers Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 p-4 sm:p-5 rounded-2xl bg-zinc-50 border border-border/80">
            <div>
                <span class="text-[11px] text-muted block font-medium">Highest CTC</span>
                <span class="text-lg sm:text-2xl font-black text-brand block mt-0.5">₹38.5 LPA</span>
                <span class="text-[10px] text-subheading">International / Product</span>
            </div>

            <div>
                <span class="text-[11px] text-muted block font-medium">Average CTC</span>
                <span class="text-lg sm:text-2xl font-bold text-heading block mt-0.5">₹9.2 LPA</span>
                <span class="text-[10px] text-emerald-600 font-semibold">+14% Growth</span>
            </div>

            <div>
                <span class="text-[11px] text-muted block font-medium">Placement Rate</span>
                <span class="text-lg sm:text-2xl font-bold text-heading block mt-0.5">96.4%</span>
                <span class="text-[10px] text-subheading">Eligible Students</span>
            </div>

            <div>
                <span class="text-[11px] text-muted block font-medium">Recruiters Visited</span>
                <span class="text-lg sm:text-2xl font-bold text-heading block mt-0.5">240+</span>
                <span class="text-[10px] text-subheading">Tier 1 & MNCs</span>
            </div>
        </div>

        <!-- 2. Detailed Article Section: About Placement Cell & Industry Linkages -->
        <section class="space-y-3.5 text-xs sm:text-sm text-subheading leading-relaxed">
            <h4 class="text-sm sm:text-base font-bold text-heading flex items-center gap-2">
                <i data-lucide="sparkles" class="w-4 h-4 text-brand"></i>
                <span>Training & Placement Ecosystem</span>
            </h4>
            <p>
                The Department of Training & Placement operates as a dedicated bridge between talented students and domestic and multinational corporations. Beginning in the second year of study, students undergo comprehensive training in data structures, algorithms, system design, aptitude, and communication skills through specialized mentorship bootcamps.
            </p>
            <p>
                In addition to on-campus placement drives, students actively receive pre-placement offers (PPOs) through summer internships at major tech and core engineering companies.
            </p>
        </section>

        <!-- 3. Branch-wise Average Salary Trends Table -->
        <section class="space-y-3">
            <h4 class="text-sm sm:text-base font-bold text-heading flex items-center gap-2">
                <i data-lucide="bar-chart-2" class="w-4 h-4 text-brand"></i>
                <span>Branch-Wise Average Compensation Breakdown</span>
            </h4>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs sm:text-sm border border-border rounded-xl overflow-hidden">
                    <thead class="bg-zinc-50 border-b border-border text-heading font-bold">
                        <tr>
                            <th class="p-3">Department / Specialization</th>
                            <th class="p-3">Placement %</th>
                            <th class="p-3">Average Package</th>
                            <th class="p-3">Highest Offer</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border text-subheading">
                        <tr>
                            <td class="p-3 font-semibold text-heading">Computer Science & Engg (CSE)</td>
                            <td class="p-3 text-emerald-600 font-bold">98.5%</td>
                            <td class="p-3 font-semibold text-heading">₹12.4 LPA</td>
                            <td class="p-3 font-bold text-brand">₹38.5 LPA</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-semibold text-heading">AI & Data Science (AI & DS)</td>
                            <td class="p-3 text-emerald-600 font-bold">97.8%</td>
                            <td class="p-3 font-semibold text-heading">₹11.8 LPA</td>
                            <td class="p-3 font-bold text-brand">₹32.0 LPA</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-semibold text-heading">Electronics & Comm (ECE)</td>
                            <td class="p-3 text-emerald-600 font-bold">96.0%</td>
                            <td class="p-3 font-semibold text-heading">₹9.5 LPA</td>
                            <td class="p-3 font-bold text-brand">₹28.0 LPA</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-semibold text-heading">Mechanical Engineering</td>
                            <td class="p-3 text-emerald-600 font-bold">92.5%</td>
                            <td class="p-3 font-semibold text-heading">₹7.2 LPA</td>
                            <td class="p-3 font-bold text-brand">₹18.0 LPA</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-semibold text-heading">Master of Business Admin (MBA)</td>
                            <td class="p-3 text-emerald-600 font-bold">94.0%</td>
                            <td class="p-3 font-semibold text-heading">₹8.6 LPA</td>
                            <td class="p-3 font-bold text-brand">₹19.5 LPA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- 4. Prominent Recruiting Partners Grid -->
        <section class="space-y-3 pt-2">
            <h4 class="text-sm sm:text-base font-bold text-heading flex items-center gap-2">
                <i data-lucide="building-2" class="w-4 h-4 text-brand"></i>
                <span>Key Campus Hiring Partners</span>
            </h4>
            <p class="text-xs text-muted">
                Leading product enterprises, consulting firms, and Fortune 500 recruiters who actively participate in the annual recruitment drive:
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-2.5 pt-2">
                @php
                    $recruiters = [
                        'Microsoft', 'Google', 'Amazon', 'Zoho', 'Cisco', 'Qualcomm', 
                        'Bosch', 'TCS', 'Cognizant', 'L&T Technology', 'Infosys', 'Samsung'
                    ];
                @endphp

                @foreach ($recruiters as $company)
                    <div class="px-3 py-3 rounded-xl border border-border bg-zinc-50/70 hover:bg-white hover:border-brand/50 text-center font-bold text-xs text-heading transition-all shadow-2xs flex items-center justify-center">
                        {{ $company }}
                    </div>
                @endforeach
            </div>
        </section>

        <!-- 5. Bottom Advice Banner inside blog post -->
        <div class="p-4 sm:p-5 rounded-2xl bg-orange-50/60 border border-brand/20 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div>
                <h5 class="text-xs sm:text-sm font-bold text-heading">Interested in Placement Track Records & Cutoffs?</h5>
                <p class="text-[11px] sm:text-xs text-muted mt-0.5">Connect with our admission counsellors for branch-wise placement cutoffs and fee guidance.</p>
            </div>
            <a 
                href="{{ url('/contact') }}" 
                class="inline-flex items-center justify-center gap-1.5 px-4 py-2 rounded-xl bg-brand hover:bg-brand-hover text-white text-xs font-semibold transition-all shadow-xs flex-shrink-0 cursor-pointer"
            >
                <span>Get Free Guidance</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>

    </article>

</div>
