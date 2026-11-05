@props([
    'college' => []
])

<!-- Right Sticky Sidebar: "Students Also Visited" (Clean reference replica) -->
<div id="apply-sidebar" class="space-y-4">

    <!-- "Students Also Visited" Card (Matches Reference Screenshot Right Sidebar) -->
    <div class="bg-white rounded-2xl border border-border p-5 shadow-xs">
        <div class="flex items-center justify-between mb-3.5 pb-2.5 border-b border-border/70">
            <h4 class="text-sm font-bold text-heading">
                Students Also Visited
            </h4>
        </div>

        <div class="space-y-2.5">
            
            <!-- College 1: SSN -->
            <a href="/colleges/ssn-college-of-engineering" class="flex items-center gap-3 group p-2 rounded-xl hover:bg-zinc-50 border border-transparent hover:border-border/80 transition-all">
                <div class="w-10 h-10 rounded-xl bg-zinc-900 overflow-hidden flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=120&q=80" alt="SSN" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <h5 class="text-xs font-bold text-heading group-hover:text-brand truncate transition-colors">
                        SSN College of Engineering
                    </h5>
                    <div class="flex items-center gap-2 text-[11px] text-muted mt-0.5">
                        <span>Chennai</span>
                        <span>•</span>
                        <span class="text-amber-500 font-semibold">★ 4.7</span>
                    </div>
                </div>
                <i data-lucide="chevron-right" class="w-4 h-4 text-muted group-hover:text-brand transition-colors flex-shrink-0"></i>
            </a>

            <!-- College 2: CIT -->
            <a href="/colleges/coimbatore-institute-of-technology-cit" class="flex items-center gap-3 group p-2 rounded-xl hover:bg-zinc-50 border border-transparent hover:border-border/80 transition-all">
                <div class="w-10 h-10 rounded-xl bg-zinc-900 overflow-hidden flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=120&q=80" alt="CIT" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <h5 class="text-xs font-bold text-heading group-hover:text-brand truncate transition-colors">
                        Coimbatore Institute of Tech (CIT)
                    </h5>
                    <div class="flex items-center gap-2 text-[11px] text-muted mt-0.5">
                        <span>Coimbatore</span>
                        <span>•</span>
                        <span class="text-amber-500 font-semibold">★ 4.6</span>
                    </div>
                </div>
                <i data-lucide="chevron-right" class="w-4 h-4 text-muted group-hover:text-brand transition-colors flex-shrink-0"></i>
            </a>

            <!-- College 3: KCT -->
            <a href="/colleges/kumaraguru-college-of-technology-kct" class="flex items-center gap-3 group p-2 rounded-xl hover:bg-zinc-50 border border-transparent hover:border-border/80 transition-all">
                <div class="w-10 h-10 rounded-xl bg-zinc-900 overflow-hidden flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=120&q=80" alt="KCT" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <h5 class="text-xs font-bold text-heading group-hover:text-brand truncate transition-colors">
                        Kumaraguru College of Tech (KCT)
                    </h5>
                    <div class="flex items-center gap-2 text-[11px] text-muted mt-0.5">
                        <span>Coimbatore</span>
                        <span>•</span>
                        <span class="text-amber-500 font-semibold">★ 4.5</span>
                    </div>
                </div>
                <i data-lucide="chevron-right" class="w-4 h-4 text-muted group-hover:text-brand transition-colors flex-shrink-0"></i>
            </a>

            <!-- College 4: TCE -->
            <a href="/colleges/thiagarajar-college-of-engineering-tce" class="flex items-center gap-3 group p-2 rounded-xl hover:bg-zinc-50 border border-transparent hover:border-border/80 transition-all">
                <div class="w-10 h-10 rounded-xl bg-zinc-900 overflow-hidden flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=120&q=80" alt="TCE" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <h5 class="text-xs font-bold text-heading group-hover:text-brand truncate transition-colors">
                        Thiagarajar College of Engg (TCE)
                    </h5>
                    <div class="flex items-center gap-2 text-[11px] text-muted mt-0.5">
                        <span>Madurai</span>
                        <span>•</span>
                        <span class="text-amber-500 font-semibold">★ 4.6</span>
                    </div>
                </div>
                <i data-lucide="chevron-right" class="w-4 h-4 text-muted group-hover:text-brand transition-colors flex-shrink-0"></i>
            </a>

        </div>

        <!-- View More Link at Bottom -->
        <div class="mt-3.5 pt-2.5 border-t border-border/70 text-center">
            <a 
                href="/colleges" 
                class="inline-flex items-center gap-1.5 text-xs font-bold text-brand hover:underline"
            >
                <span>View More Colleges</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>
    </div>

</div>
