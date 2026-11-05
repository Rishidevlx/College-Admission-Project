<x-layouts.app title="Privacy Policy - NextSkill College Admission Portal" :hide-glow="true">

    <!-- 1. Pure White Navigation Bar -->
    <x-ui.navbar />

    <!-- 2. Simple Editorial Container (Pure White, No Cards, High Readability) -->
    <main class="bg-white min-h-[calc(100vh-14rem)] py-10 sm:py-14 md:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb Navigation -->
            <nav class="flex items-center gap-2 text-xs sm:text-sm text-zinc-500 font-medium mb-6" aria-label="Breadcrumb">
                <a href="{{ url('/') }}" class="hover:text-brand transition-colors">Home</a>
                <span class="text-zinc-300">/</span>
                <span class="text-zinc-800 font-semibold" aria-current="page">Privacy Policy</span>
            </nav>

            <!-- Document Header -->
            <div class="border-b border-zinc-200 pb-6 mb-8 sm:mb-10">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-zinc-900 tracking-tight mb-2">
                    Privacy Policy
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
                        1. Overview
                    </h2>
                    <p class="mb-3">
                        At <strong>Nextskill Technologies Pvt Ltd</strong> ("NextSkill", "we", "our", or "us"), we value and respect the privacy of every student, parent, and visitor who uses our portal (<a href="{{ url('/') }}" class="text-brand hover:underline font-medium">nextskill.in</a>).
                    </p>
                    <p>
                        This Privacy Policy describes what information we collect from you, how we utilize it to provide higher education guidance in Tamil Nadu, and the steps we take to ensure your personal data remains safe and confidential.
                    </p>
                </div>

                <!-- Section 2 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        2. Information We Collect
                    </h2>
                    <p class="mb-3">
                        We only collect information that is voluntarily provided by students or parents when seeking admission guidance:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-zinc-600">
                        <li><strong>Personal Contact Information:</strong> Full name, phone number, email address, and city or district in Tamil Nadu.</li>
                        <li><strong>Academic Details:</strong> 12th standard stream (Maths-Biology, Computer Science, Pure Science, Commerce), marks, and calculated cutoff scores (out of 200).</li>
                        <li><strong>Preferences:</strong> Preferred engineering branches, arts/science degrees, or preferred college locations (e.g., Coimbatore, Chennai, Madurai).</li>
                        <li><strong>Automated Browsing Data:</strong> Standard anonymous device info, browser type, and page access timestamps to improve website performance and user experience.</li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        3. How We Use Your Information
                    </h2>
                    <p class="mb-3">
                        The information you share is used strictly for legitimate admission guidance purposes:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-zinc-600">
                        <li>Connecting you with our experienced academic counsellors for 1-on-1 college and course guidance.</li>
                        <li>Calculating cutoff eligibility and matching eligible colleges based on your marks.</li>
                        <li>Answering admission enquiries submitted through our website or helpline calls.</li>
                        <li>Sending critical updates regarding Tamil Nadu engineering (TNEA), medical, or college counselling dates.</li>
                    </ul>
                </div>

                <!-- Section 4 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        4. No Selling of Data & Confidentiality
                    </h2>
                    <p class="mb-3">
                        We have a strict <strong>Zero Spam & No-Sell Policy</strong>. We do <strong>not</strong> sell, rent, trade, or distribute your personal contact information to third-party marketing companies, telemarketers, or unrelated external brokers.
                    </p>
                    <p>
                        Your information is accessed only by authorized NextSkill guidance counselors to fulfill your specific admission enquiry.
                    </p>
                </div>

                <!-- Section 5 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        5. Data Storage & Security
                    </h2>
                    <p>
                        We implement standard industry administrative, technical, and physical security measures to safeguard your personal data from unauthorized access, alteration, disclosure, or loss. All submissions through our portal are protected using encrypted protocols (HTTPS/SSL).
                    </p>
                </div>

                <!-- Section 6 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        6. Cookies & Tracking Technologies
                    </h2>
                    <p>
                        Our website may use standard session cookies to remember your search filters (such as selected districts or streams in the College Finder) and to analyze aggregate traffic patterns. You can choose to disable cookies in your web browser settings at any time without losing access to the core features of our website.
                    </p>
                </div>

                <!-- Section 7 -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        7. Your Rights (Access, Correction & Deletion)
                    </h2>
                    <p>
                        You have the right to request access to the personal data we hold about you, request corrections if details are inaccurate, or ask us to delete your contact number from our callback records. To exercise these rights, simply email us or call our helpline desk.
                    </p>
                </div>

                <!-- Section 8 -->
                <div class="pt-4 border-t border-zinc-200">
                    <h2 class="text-lg sm:text-xl font-bold text-zinc-900 mb-3">
                        8. Privacy Officer Contact Details
                    </h2>
                    <p class="mb-4">
                        If you have any questions about this Privacy Policy or wish to have your details removed, please reach out to our privacy desk:
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

