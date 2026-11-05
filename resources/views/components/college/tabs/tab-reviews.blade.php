@props([
    'college' => []
])

<!-- Tab Pane 3: Google Reviews (Clean Minimal Placeholder State) -->
<div id="pane-reviews" class="college-tab-pane hidden">
    <div class="bg-white rounded-2xl border border-border p-8 sm:p-12 text-center shadow-xs">
        <div class="w-14 h-14 rounded-2xl bg-zinc-50 border border-border/80 flex items-center justify-center mx-auto mb-4 text-[#4285F4] text-xl font-bold shadow-2xs">
            G
        </div>
        <h3 class="text-base sm:text-lg font-bold text-heading">
            Google Reviews Coming Soon
        </h3>
        <p class="text-xs sm:text-sm text-muted mt-1.5 max-w-md mx-auto leading-relaxed">
            Real-time verified student reviews and Google Maps ratings will be integrated here directly.
        </p>
        <div class="mt-5">
            <a 
                href="https://google.com/maps" 
                target="_blank" 
                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-border hover:border-brand hover:text-brand bg-white text-xs font-semibold transition-all shadow-2xs text-subheading"
            >
                <i data-lucide="external-link" class="w-3.5 h-3.5 text-brand"></i>
                <span>Search Reviews on Google Maps</span>
            </a>
        </div>
    </div>

    <!-- Inline FAQs for Google Reviews Tab -->
    <x-college.college-tab-faq 
        title="Student Reviews & Campus Ratings FAQs"
    />
</div>
