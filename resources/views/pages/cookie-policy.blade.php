<x-layouts.app title="Cookie Policy - NextSkill College Admission Portal" :hide-glow="true">

    <!-- 1. Pure White Navigation Bar -->
    <x-ui.navbar />

    <!-- 2. Simple Editorial Container (Pure White, No Cards, High Readability) -->
    <main class="bg-white min-h-[calc(100vh-14rem)] py-10 sm:py-14 md:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb Navigation -->
            <nav class="flex items-center gap-2 text-xs sm:text-sm text-zinc-500 font-medium mb-6" aria-label="Breadcrumb">
                <a href="{{ url('/') }}" class="hover:text-brand transition-colors">Home</a>
                <span class="text-zinc-300">/</span>
                <span class="text-zinc-800 font-semibold" aria-current="page">Cookie Policy</span>
            </nav>

            <!-- Document Header -->
            <div class="border-b border-zinc-200 pb-6 mb-8 sm:mb-10">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-zinc-900 tracking-tight mb-2">
                    Cookie Policy
                </h1>
                <p class="text-xs sm:text-sm text-zinc-500">
                    Last Updated: November 2026 • Effective Date: November 1, 2024
                </p>
            </div>

            <!-- Content Area: Clean Headings & Typography -->
            <div class="space-y-8 text-sm sm:text-base text-zinc-600 leading-relaxed">
                
                <!-- Section 1 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        1. What Are Cookies?
                    </h2>
                    <p class="mb-3">
                        Cookies are small text files placed on your computer, smartphone, or other browsing device when you visit websites. They help websites recognize your browser, maintain session state, and remember your preferences to give you a smoother and more personalized experience.
                    </p>
                    <p>
                        This Cookie Policy explains how <strong>Nextskill Technologies Pvt Ltd</strong> ("NextSkill", "we", "our") utilizes cookies and similar technologies on our College Admission Portal (<a href="{{ url('/') }}" class="text-brand hover:underline font-medium">nextskill.in</a>).
                    </p>
                </div>

                <!-- Section 2 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        2. How We Use Cookies on Our Admission Portal
                    </h2>
                    <p class="mb-3">
                        We use cookies exclusively to improve your admission discovery experience:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-zinc-600">
                        <li><strong>Essential Session Cookies:</strong> Required to keep our web pages, navigation, and security protections functioning properly while you browse.</li>
                        <li><strong>Search & Filter Preferences:</strong> Used to temporarily store selected filters (e.g., chosen districts like Coimbatore or Chennai, stream choices, and cutoff values) in our College Finder and Cutoff Calculator so you do not lose your selections when reloading pages.</li>
                        <li><strong>Performance & Analytics:</strong> Aggregate, anonymized data regarding which college profiles and admission resources are most frequently viewed, helping us update cutoffs and counseling resources where students need them most.</li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        3. What We Do NOT Use Cookies For
                    </h2>
                    <p class="mb-3">
                        In line with our strict student privacy standards:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-zinc-600">
                        <li>We do <strong>not</strong> use third-party invasive ad-tracking networks or behavioural profiling.</li>
                        <li>We do <strong>not</strong> sell or exchange cookie identifiers with commercial marketing brokers or external lead sellers.</li>
                    </ul>
                </div>

                <!-- Section 4 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        4. How Can You Manage or Disable Cookies?
                    </h2>
                    <p class="mb-3">
                        You have full control over cookies. Most web browsers allow you to manage your cookie preferences through their settings:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-zinc-600">
                        <li><strong>Google Chrome:</strong> Settings &gt; Privacy and security &gt; Cookies and other site data.</li>
                        <li><strong>Mozilla Firefox:</strong> Settings &gt; Privacy &amp; Security &gt; Enhanced Tracking Protection / Cookies.</li>
                        <li><strong>Apple Safari:</strong> Preferences &gt; Privacy &gt; Manage Website Data.</li>
                        <li><strong>Microsoft Edge:</strong> Settings &gt; Cookies and site permissions.</li>
                    </ul>
                    <p class="mt-3">
                        Please note that disabling certain cookies may affect how search filters or preference memories perform on the portal, but general browsing and contact options will remain fully accessible.
                    </p>
                </div>

                <!-- Section 5 -->
                <div class="pt-4 border-t border-zinc-200">
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        5. Questions & Contact
                    </h2>
                    <p class="mb-4">
                        If you have questions about our use of cookies or privacy practices, please contact us:
                    </p>
                    <div class="space-y-1.5 text-xs sm:text-sm text-zinc-700 font-medium">
                        <p><strong class="text-zinc-900">Entity:</strong> Nextskill Technologies Pvt Ltd</p>
                        <p><strong class="text-zinc-900">Email:</strong> <a href="mailto:nextskilltechnologies@gmail.com" class="text-brand hover:underline">nextskilltechnologies@gmail.com</a></p>
                        <p><strong class="text-zinc-900">Helpline:</strong> <a href="tel:+917358110062" class="text-brand hover:underline">+91-7358110062</a> / <a href="tel:+917358110064" class="text-brand hover:underline">+91-7358110064</a></p>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <!-- 3. Reusable 2-Tier Mega Footer Component -->
    <x-ui.footer />

</x-layouts.app>

