<x-layouts.app title="Terms & Conditions - NextSkill College Admission Portal" :hide-glow="true">

    <!-- 1. Pure White Navigation Bar -->
    <x-ui.navbar />

    <!-- 2. Simple Editorial Container (Pure White, No Cards, High Readability) -->
    <main class="bg-white min-h-[calc(100vh-14rem)] py-10 sm:py-14 md:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb Navigation -->
            <nav class="flex items-center gap-2 text-xs sm:text-sm text-zinc-500 font-medium mb-6" aria-label="Breadcrumb">
                <a href="{{ url('/') }}" class="hover:text-brand transition-colors">Home</a>
                <span class="text-zinc-300">/</span>
                <span class="text-zinc-800 font-semibold" aria-current="page">Terms & Conditions</span>
            </nav>

            <!-- Document Header -->
            <div class="border-b border-zinc-200 pb-6 mb-8 sm:mb-10">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-zinc-900 tracking-tight mb-2">
                    Terms & Conditions
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
                        1. Introduction & Acceptance
                    </h2>
                    <p class="mb-3">
                        Welcome to <strong>Nextskill Technologies Pvt Ltd</strong> ("NextSkill", "we", "our", or "us"). These Terms and Conditions govern your access to and use of the NextSkill College Admission Portal website (<a href="{{ url('/') }}" class="text-brand hover:underline font-medium">nextskill.in</a>), including our college directory, 12th cutoff calculator, and free admission guidance services.
                    </p>
                    <p>
                        By visiting, accessing, or submitting information through our portal, you agree to be bound by these Terms. If you do not agree with any part of these terms, please refrain from using our services.
                    </p>
                </div>

                <!-- Section 2 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        2. 100% Free Admission Guidance & Counselling
                    </h2>
                    <p class="mb-3">
                        NextSkill provides guidance and counselling services to 12th standard students and their parents free of charge. We assist students in understanding:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-zinc-600">
                        <li>Engineering (TNEA), Medical/Paramedical, Arts & Science, and Agricultural cutoffs.</li>
                        <li>Accreditation, NAAC grades, placement records, and campus facilities of various institutions.</li>
                        <li>Stream selection matching the student's marks, aptitude, and career ambitions.</li>
                    </ul>
                    <p class="mt-3">
                        We do not collect any counselling fee or consultation charges directly from students or parents for our standard guidance calls.
                    </p>
                </div>

                <!-- Section 3 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        3. Accuracy of College & Cutoff Information
                    </h2>
                    <p class="mb-3">
                        The college details, course listings, fee structures, cutoff scores, and placement statistics published on this platform are aggregated from publicly available government notifications (such as DoTE Tamil Nadu, Anna University, TNEA, TNAU, TN Medical Selection), official college prospectuses, and historical data.
                    </p>
                    <p>
                        While we strive to keep all information updated and accurate, cutoffs and seat allocations vary each academic year based on government counselling schedules. Students and parents are advised to cross-verify specific admission criteria with the respective official counselling authorities and college administration during actual application periods.
                    </p>
                </div>

                <!-- Section 4 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        4. User Submissions & Accuracy of Information
                    </h2>
                    <p class="mb-3">
                        When submitting an enquiry form, contacting us via phone or WhatsApp, or using our Cutoff Calculator, you agree to provide truthful and accurate information (including your name, contact phone number, and marks). You agree not to:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-zinc-600">
                        <li>Submit false, misleading, or impersonated contact information.</li>
                        <li>Use automated bots or scripts to scrape, harvest, or disrupt our portal infrastructure.</li>
                        <li>Transmit any unlawful, defamatory, or abusive messages through our enquiry forms.</li>
                    </ul>
                </div>

                <!-- Section 5 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        5. Intellectual Property Rights
                    </h2>
                    <p>
                        All content on this website, including text, logos, custom UI components, calculators, graphic design, and software code, is the property of Nextskill Technologies Pvt Ltd and is protected under applicable Indian copyright and trademark laws. Third-party college logos displayed on our portal are the trademarks of their respective universities and institutions, used strictly for descriptive and identification purposes.
                    </p>
                </div>

                <!-- Section 6 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        6. Limitation of Liability
                    </h2>
                    <p>
                        NextSkill acts solely as an educational guidance and counseling facilitator. Final admissions, seat allotment, fee revisions, and academic approvals are strictly decided by the respective regulatory bodies, universities, and colleges. NextSkill shall not be held liable for any decisions made by educational institutions or counselling boards regarding candidate admissions.
                    </p>
                </div>

                <!-- Section 7 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        7. Governing Law & Jurisdiction
                    </h2>
                    <p>
                        These Terms and Conditions shall be governed by and construed in accordance with the laws of India. Any legal dispute or proceeding arising out of or related to our portal shall be subject to the exclusive jurisdiction of the competent courts in Coimbatore, Tamil Nadu, India.
                    </p>
                </div>

                <!-- Section 8 -->
                <div class="pt-4 border-t border-zinc-200">
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        8. Contact & Grievance Redressal
                    </h2>
                    <p class="mb-4">
                        If you have any questions, concerns, or grievances regarding these Terms & Conditions, please contact our support desk:
                    </p>
                    <div class="space-y-1.5 text-xs sm:text-sm text-zinc-700 font-medium">
                        <p><strong class="text-zinc-900">Entity:</strong> Nextskill Technologies Pvt Ltd</p>
                        <p><strong class="text-zinc-900">Address:</strong> No.90, First Floor, Srinagar, Near Selva Vinayakar Temple, Hopes College, Peelamedu Post, Coimbatore - 641004, Tamil Nadu, India</p>
                        <p><strong class="text-zinc-900">Email:</strong> <a href="mailto:nextskilltechnologies@gmail.com" class="text-brand hover:underline">nextskilltechnologies@gmail.com</a></p>
                        <p><strong class="text-zinc-900">Helpline:</strong> <a href="tel:+917358110062" class="text-brand hover:underline">+91-7358110062</a> / <a href="tel:+917358110064" class="text-brand hover:underline">+91-7358110064</a></p>
                        <p><strong class="text-zinc-900">Working Hours:</strong> Monday – Saturday: 10:00 AM – 6:00 PM</p>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <!-- 3. Reusable 2-Tier Mega Footer Component -->
    <x-ui.footer />

</x-layouts.app>

