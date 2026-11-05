@props([
    'college' => [
        'name' => 'PSG College of Technology',
        'city' => 'Coimbatore, Tamil Nadu',
        'type' => 'Autonomous Institution',
        'established' => '1951',
        'affiliation' => 'Anna University, Chennai',
        'accreditation' => 'NAAC A++',
        'nirf' => 'NIRF #63',
        'rating' => '4.8',
        'reviews_count' => '1,240+ Google Reviews',
        'banner' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1600&q=80',
        'logo' => 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=200&q=80',
    ]
])

<!-- College Detail Hero Header -->
<div class="relative bg-white">
    <!-- Cover Banner Image -->
    <div class="relative h-48 sm:h-64 md:h-80 w-full overflow-hidden bg-zinc-900">
        <img 
            src="{{ $college['banner'] }}" 
            alt="{{ $college['name'] }} Campus" 
            class="w-full h-full object-cover opacity-85"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>
        
        <!-- Breadcrumb on Banner -->
        <div class="absolute top-4 left-0 right-0 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-xs text-white/80 flex items-center gap-2">
            <a href="/" class="hover:text-white transition-colors">Home</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/60"></i>
            <a href="/colleges" class="hover:text-white transition-colors">Colleges</a>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-white/60"></i>
            <span class="text-white font-medium truncate">{{ $college['name'] }}</span>
        </div>
    </div>

    <!-- College Identity Card Row (Overlaps Banner) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 sm:-mt-20 pb-6 relative z-10">
        <div class="bg-white rounded-2xl border border-border shadow-lg p-5 sm:p-7 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            
            <!-- Left Info: Logo & Name & Badges -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-5 flex-1">
                <!-- College Logo Thumbnail -->
                <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl border-2 border-white shadow-md overflow-hidden bg-white flex-shrink-0">
                    <img src="{{ $college['logo'] }}" alt="{{ $college['name'] }} Logo" class="w-full h-full object-cover">
                </div>

                <div>
                    <!-- Badges -->
                    <div class="flex flex-wrap items-center gap-2 mb-2">
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-brand/10 text-brand border border-brand/20">
                            {{ $college['accreditation'] }}
                        </span>
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                            {{ $college['nirf'] }}
                        </span>
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-zinc-100 text-subheading">
                            {{ $college['type'] }}
                        </span>
                    </div>

                    <!-- College Title -->
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-heading tracking-tight">
                        {{ $college['name'] }}
                    </h1>

                    <!-- Location & Affiliation -->
                    <div class="flex flex-wrap items-center gap-3 sm:gap-4 mt-2 text-xs sm:text-sm text-muted">
                        <span class="flex items-center gap-1.5">
                            <i data-lucide="map-pin" class="w-4 h-4 text-brand"></i>
                            <span>{{ $college['city'] }}</span>
                        </span>
                        <span class="flex items-center gap-1.5">
                            <i data-lucide="building-2" class="w-4 h-4 text-muted"></i>
                            <span>Estd. {{ $college['established'] }}</span>
                        </span>
                        <span class="flex items-center gap-1.5">
                            <i data-lucide="award" class="w-4 h-4 text-muted"></i>
                            <span>Affiliated to {{ $college['affiliation'] }}</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right Actions: Call & Enquiry CTA Buttons -->
            <div class="flex items-center gap-2.5 w-full md:w-auto flex-shrink-0">
                <a 
                    href="tel:+917358110062" 
                    class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl border border-border hover:border-brand hover:text-brand bg-white text-xs sm:text-sm font-semibold transition-all shadow-2xs cursor-pointer"
                >
                    <i data-lucide="phone" class="w-4 h-4 text-brand"></i>
                    <span>Call Admission</span>
                </a>
                
                <a 
                    href="{{ url('/contact') }}" 
                    class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-brand hover:bg-brand-hover text-white text-xs sm:text-sm font-semibold transition-all shadow-sm hover:shadow-md active:scale-95 cursor-pointer"
                >
                    <span>Enquire Now</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>
            </div>

        </div>
    </div>
</div>

