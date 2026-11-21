
<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-[#E3DDD2]">
    <div class="h-[74px] max-w-7xl mx-auto px-gutter flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center shrink-0">
            <a href="{{ route('home') }}"
               class="flex items-center focus:outline-none focus:ring-2 focus:ring-[#3156A3]">
                <img
                    src="https://lh3.googleusercontent.com/aida/ALJJyrD6KQ01naSC5etn47Crw1WWkdii7xmDXJo4VsGq3nCaAl-UIcFW_YgY9kDyAQTMqGvngmOy0_lbWZ2ccgrX2xpxll-apTaV-EcnlWgzIaGGRygvj_1olEcyjo7Oz3Xq_OiFrc88lnwxlicUvvNJXvWSY24wDeX16l47U5e086tGjetYCjqYf24zpMJElOEIFtEtgbqeUTbkTFsryMmikgxCWG6nBg7Zwvdg0uZK3Pna3Q"
                    alt="Maximize Business Marketing"
                    class="h-9 md:h-10 w-auto object-contain">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-7">

            <!-- Solutions Dropdown -->
            <div class="relative group">

                <button type="button"
                    class="inline-flex items-center gap-1.5 py-6 text-[15px] font-medium text-[#3156A3] hover:text-[#3156A3] transition-colors">

                    <span>Solutions</span>

                    <span class="material-symbols-outlined text-[17px] transition-transform duration-200 group-hover:rotate-180">
                        keyboard_arrow_down
                    </span>
                </button>

                <!-- Dropdown -->
                <div class="absolute left-0 top-full pt-0 w-[288px]
                    opacity-0 invisible translate-y-1
                    group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                    group-focus-within:opacity-100 group-focus-within:visible group-focus-within:translate-y-0
                    transition-all duration-200 z-50">

                    <div class="bg-white border border-[#E3DDD2] rounded-md shadow-lg p-2 flex flex-col">

                        <a href="{{ route('page.channel-marketing-strategy') }}"
                           class="text-[14px] font-medium text-[#263443] hover:text-[#3156A3] hover:bg-[#F7F4EE] px-2 py-2.5 rounded transition-colors">
                            Channel Marketing Strategy
                        </a>

                        <a href="{{ route('page.partner-enablement') }}"
                           class="text-[14px] text-[#263443] hover:text-[#3156A3] hover:bg-[#F7F4EE] px-4 py-2.5 rounded transition-colors">
                            Partner Enablement
                        </a>

                        <a href="{{ route('page.partner-education-training') }}"
                           class="text-[14px] text-[#263443] hover:text-[#3156A3] hover:bg-[#F7F4EE] px-4 py-2.5 rounded transition-colors">
                            Partner Education &amp; Training
                        </a>

                        <a href="{{ route('page.partner-activation-engagement') }}"
                           class="text-[14px] text-[#263443] hover:text-[#3156A3] hover:bg-[#F7F4EE] px-4 py-2.5 rounded transition-colors">
                            Partner Activation &amp; Engagement
                        </a>

                        <a href="{{ route('page.through-channel-demand-generation') }}"
                           class="text-[14px] text-[#263443] hover:text-[#3156A3] hover:bg-[#F7F4EE] px-4 py-2.5 rounded transition-colors">
                            Through-Channel Demand Generation
                        </a>

                        <a href="{{ route('page.mdf-channel-performance') }}"
                           class="text-[14px] text-[#263443] hover:text-[#3156A3] hover:bg-[#F7F4EE] px-4 py-2.5 rounded transition-colors">
                            MDF &amp; Channel Performance
                        </a>

                        <a href="{{ route('page.channel-growth-consultation') }}"
                           class="text-[14px] text-[#263443] hover:text-[#3156A3] hover:bg-[#F7F4EE] px-4 py-2.5 rounded transition-colors">
                            Channel Growth Consultation
                        </a>

                        <a href="{{ route('page.channel-marketing-assessment') }}"
                           class="text-[14px] text-[#263443] hover:text-[#3156A3] hover:bg-[#F7F4EE] px-4 py-2.5 rounded transition-colors">
                            Channel Marketing Assessment
                        </a>

                    </div>
                </div>
            </div>

            <!-- Other Navigation Links -->
            <a href="{{ route('page.our-approach') }}"
               class="text-[15px] font-medium text-[#263443] hover:text-[#3156A3] transition-colors">
                Our Approach
            </a>

            <a href="{{ route('page.industries') }}"
               class="text-[15px] font-medium text-[#263443] hover:text-[#3156A3] transition-colors">
                Industries
            </a>

            <a href="{{ route('page.about') }}"
               class="text-[15px] font-medium text-[#263443] hover:text-[#3156A3] transition-colors">
                About MBM
            </a>

            <a href="{{ route('page.contact-us') }}"
               class="text-[15px] font-medium text-[#263443] hover:text-[#3156A3] transition-colors">
                Contact
            </a>

        </nav>

        <!-- CTA Button -->
        <div class="hidden lg:flex items-center shrink-0">
            <a href="{{ route('page.contact-us') }}"
               class="inline-flex items-center justify-center bg-[#3156A3] hover:bg-[#264887] text-white text-[14px] font-semibold px-6 py-2.5 rounded-[4px] transition-all duration-200">
                Talk to Max &amp; Mara
            </a>
        </div>

    </div>
</header>
