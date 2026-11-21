@extends('layouts.app')

@section('title', 'Maximize Business Marketing')

@section('content')
<div class="flex flex-col w-full">
<!-- ========================================================================= -->
<!-- SECTION 1: HERO -->
<!-- ========================================================================= -->
<section class="relative w-full bg-[#10263F] text-[#F7F4EE] overflow-hidden py-16 lg:py-24">
<!-- Subtle Architectural Background Grids & Radial Accents -->
<div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#C7A46A 1px, transparent 1px), linear-gradient(to right, #C7A46A 1px, transparent 1px); background-size: 48px 48px;"></div>
<div class="absolute -top-48 -right-48 w-96 h-96 rounded-full bg-[#3156A3]/20 blur-3xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
<!-- Left Editorial Narrative (7 Columns) -->
<div class="lg:col-span-7 flex flex-col gap-space-md">
<div class="flex items-center gap-space-xs">
<span class="w-6 h-[1px] bg-[#C7A46A]"></span>
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-[#C7A46A]">
              CHANNEL MARKETING ASSESSMENT
            </span>
</div>
<h1 class="font-display-xl text-display-xl-mobile lg:text-display-xl text-[#F7F4EE] font-bold tracking-tight">
            How Effective Is Your Channel Marketing, Really?
          </h1>
<p class="font-body-lg text-body-lg text-[#F7F4EE]/90 leading-relaxed max-w-2xl">
            You may have an established partner network, active marketing programs and significant investment in channel development. But how confidently can you say that your partners are equipped, engaged and generating meaningful market opportunities? Our Channel Marketing Assessment helps you reflect on the essential components of an effective channel marketing program and identify where a closer look may be worthwhile.
          </p>
<div class="pt-space-md flex flex-col sm:flex-row items-start sm:items-center gap-space-md">
<button class="bg-primary-container text-on-primary font-label-md text-label-md px-space-lg py-space-sm rounded hover:bg-primary transition-all shadow-md flex items-center gap-space-xs" data-open-modal="assessment" type="button">
<span>Assess Your Channel Marketing</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
<span class="font-body-sm text-body-sm text-[#F7F4EE]/70">
              A short questionnaire to help start a more informed conversation.
            </span>
</div>
<!-- Discrete Editorial Metadata Tagline -->
<div class="pt-space-lg flex items-center gap-space-lg text-[#F7F4EE]/50 font-label-sm text-label-sm border-t border-[#F7F4EE]/10">
<span class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-[#C7A46A]">schedule</span>
              Estimated 6-8 minutes
            </span>
<span class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-[#C7A46A]">lock</span>
              Strict Executive Confidentiality
            </span>
<span class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-[#C7A46A]">psychology</span>
              Partner Advisory Review
            </span>
</div>
</div>
<!-- Right Architectural Imagery (5 Columns) -->
<div class="lg:col-span-5 relative mt-6 lg:mt-0">
<div class="relative bg-[#1A3353] rounded-lg overflow-hidden shadow-2xl p-2.5">
<div class="aspect-[4/3] w-full overflow-hidden rounded">
<img class="w-full h-full object-cover transition-transform duration-700 hover:scale-105" data-alt="Modern high-density data center corridor illuminated with cold blue LED server racks, enterprise IT architecture, disciplined perspective corridor, deep midnight blue ambiance and clean industrial surfaces." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDa5zyPO2LAnHMDB5I6MKmw9-NdiBsqB29QrFci1b0yw0mrYjXLgdhKbf_A_5nGA9z60pyos37fBFj_-MlvGSGeysOhTzM0eJCKYOl55vaG6KlX9zrPxYyDXWrZkL-CGEMA5c1P1hbq4jkP7LNWsh7pkS9xocIDimtL4ik81HlkgmL31jUeZHSAG2FnQI2rmHfEF0L12glgHrDLIsf_HCMvcC9nLGWJTmRTCuLzgGni">
</div>
<div class="pt-3 pb-1 px-2 flex flex-col gap-1">
<span class="font-label-eyebrow text-[10px] tracking-wider uppercase text-[#C7A46A]">
                ENTERPRISE ECOSYSTEM DIAGNOSTIC // 01
              </span>
<p class="font-body-sm text-[12px] text-[#F7F4EE]/75 leading-tight">
                Practical framework for partner readiness, governance, and through-channel alignment.
              </p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ========================================================================= -->
<!-- SECTION 2: THE HIDDEN GAPS -->
<!-- ========================================================================= -->
<section class="w-full bg-surface-bright py-20 lg:py-28">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
<!-- Visual Operational Setup (5 Cols) -->
<div class="lg:col-span-5 order-2 lg:order-1">
<div class="bg-surface-container-high p-3 rounded-lg shadow-sm">
<div class="aspect-[4/3] w-full overflow-hidden rounded">
<img class="w-full h-full object-cover" data-alt="Industrial robotic system and high-precision automation manufacturing test frame, clean studio lighting, high precision enterprise instrumentation with monitors, dark charcoal and metallic accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOpoIo_oxPAWwHCe23rEK0P_yLxJcaprWuj9H2-9zpOBOwAsLolD94wYque1Cajkho-m0OfMBLXBqqM32VqRrJpIxcxgqHlen4McsFVuiEDjZgs8Jn3sNV7Qfhm5tsPGvcHVvQH2yfx-ySGGhkPXmOx-cd2OM7_vP7v_-uxGO0UXpeHq8FMTgLzSZ793a-9xmBtm6rAc8tFBkc-jlQ0B5KVS0pN9f3MKs4HBN8GUdX">
</div>
<div class="p-3 bg-surface-container-lowest mt-2 rounded">
<span class="font-label-eyebrow text-label-eyebrow uppercase text-tertiary-container block mb-1">
                OPERATIONAL OBSERVATION
              </span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Disjointed program mechanics generate extensive peripheral motion without delivering sustainable commercial momentum.
              </p>
</div>
</div>
</div>
<!-- Analytical Framing (7 Cols) -->
<div class="lg:col-span-7 order-1 lg:order-2 flex flex-col gap-space-md">
<div class="flex items-center gap-space-xs">
<span class="w-6 h-[1px] bg-[#705422]"></span>
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-tertiary-container">
              THE CHALLENGE
            </span>
</div>
<h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface">
            A Busy Channel Isn't Necessarily an Effective One.
          </h2>
<div class="font-body-lg text-body-lg text-on-surface-variant space-y-4">
<p>
              Marketing activity alone doesn’t tell the full story of channel performance. Partners may attend training without becoming sales-ready. Campaigns may launch without meaningful participation. MDF budgets may be utilized without clear visibility into commercial outcomes.
            </p>
<p>
              And even established partner programs can develop gaps between vendor expectations and market execution.
            </p>
</div>
<!-- Featured Dilemma Callout -->
<div class="relative bg-surface-container-low p-space-lg rounded-r-lg border-l-4 border-[#705422]">
<p class="font-headline-sm text-headline-sm text-on-surface italic">
              “The important question isn’t simply how much channel marketing you’re doing. It’s whether the right activities are happening, through the right partners, with a clear commercial purpose.”
            </p>
<span class="font-label-sm text-label-sm text-on-surface-variant mt-space-sm block">
              — Principles of Partner Ecosystem Governance
            </span>
</div>
</div>
</div>
</div>
</section>
<!-- ========================================================================= -->
<!-- SECTION 3: SIX DIMENSIONS OF CHANNEL EFFECTIVENESS -->
<!-- ========================================================================= -->
<section class="w-full bg-surface-container-low py-20 lg:py-28">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<!-- Section Header -->
<div class="max-w-3xl mb-16">
<div class="flex items-center gap-space-xs mb-space-xs">
<span class="w-6 h-[1px] bg-[#705422]"></span>
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-tertiary-container">
            WHAT WE LOOK AT
          </span>
</div>
<h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface mb-space-sm">
          Six Connected Areas. One Bigger Picture.
        </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
          An effective channel marketing program depends on multiple capabilities working together.
        </p>
</div>
<!-- 3x2 Editorial Matrix -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Dimension 01 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-headline-sm text-headline-sm text-tertiary-container font-bold">01</span>
<span class="material-symbols-outlined text-primary-container text-[24px]">balance</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              Channel Marketing Strategy
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Are your channel marketing priorities aligned with your commercial objectives, target markets and partner ecosystem?
            </p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container-highest">
<span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
              Strategic Foundation <span class="material-symbols-outlined text-[14px]">arrow_right_alt</span>
</span>
</div>
</div>
<!-- Dimension 02 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-headline-sm text-headline-sm text-tertiary-container font-bold">02</span>
<span class="material-symbols-outlined text-primary-container text-[24px]">build</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              Partner Enablement
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Do partners have the messaging, resources and sales support they need to position your solutions effectively?
            </p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container-highest">
<span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
              Asset Readiness <span class="material-symbols-outlined text-[14px]">arrow_right_alt</span>
</span>
</div>
</div>
<!-- Dimension 03 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-headline-sm text-headline-sm text-tertiary-container font-bold">03</span>
<span class="material-symbols-outlined text-primary-container text-[24px]">school</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              Partner Education &amp; Training
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Can partners translate technical product capabilities into relevant customer problems, use cases and business value?
            </p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container-highest">
<span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
              Domain Competence <span class="material-symbols-outlined text-[14px]">arrow_right_alt</span>
</span>
</div>
</div>
<!-- Dimension 04 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-headline-sm text-headline-sm text-tertiary-container font-bold">04</span>
<span class="material-symbols-outlined text-primary-container text-[24px]">group_work</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              Partner Activation &amp; Engagement
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Are partners consistently participating in programs and translating engagement into market-facing activity?
            </p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container-highest">
<span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
              Participation Yield <span class="material-symbols-outlined text-[14px]">arrow_right_alt</span>
</span>
</div>
</div>
<!-- Dimension 05 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-headline-sm text-headline-sm text-tertiary-container font-bold">05</span>
<span class="material-symbols-outlined text-primary-container text-[24px]">campaign</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              Through-Channel Demand Generation
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Are marketing initiatives helping partners reach relevant buyers and create meaningful sales opportunities?
            </p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container-highest">
<span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
              Pipeline Creation <span class="material-symbols-outlined text-[14px]">arrow_right_alt</span>
</span>
</div>
</div>
<!-- Dimension 06 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-headline-sm text-headline-sm text-tertiary-container font-bold">06</span>
<span class="material-symbols-outlined text-primary-container text-[24px]">monitoring</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              MDF &amp; Channel Performance
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Can you connect channel marketing investment with participation, execution and measurable business outcomes?
            </p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container-highest">
<span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
              Capital Accountability <span class="material-symbols-outlined text-[14px]">arrow_right_alt</span>
</span>
</div>
</div>
</div>
<!-- Synthesis Banner & Direct Interaction -->
<div class="mt-16 bg-surface-container-highest/60 p-space-lg rounded-lg flex flex-col md:flex-row items-center justify-between gap-space-lg">
<p class="font-body-md text-body-md text-on-surface max-w-2xl">
          These areas are interconnected. Weakness in one can limit the effectiveness of the others. Understanding how they work together is an important first step toward stronger channel execution.
        </p>
<button class="bg-primary text-on-primary font-label-md text-label-md px-space-lg py-space-sm rounded hover:bg-primary-container transition-all whitespace-nowrap shadow-sm" data-open-modal="assessment" type="button">
          Start Your Assessment
        </button>
</div>
</div>
</section>
<!-- ========================================================================= -->
<!-- SECTION 4: WHY TAKE THE ASSESSMENT? -->
<!-- ========================================================================= -->
<section class="w-full bg-surface-bright py-20 lg:py-28">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<div class="max-w-3xl mb-16">
<div class="flex items-center gap-space-xs mb-space-xs">
<span class="w-6 h-[1px] bg-[#705422]"></span>
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-tertiary-container">
            THE VALUE
          </span>
</div>
<h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface mb-space-sm">
          Better Questions Lead to Better Channel Decisions.
        </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
          The assessment gives you a structured opportunity to consider how your channel marketing operates today. It can help you:
        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<!-- Card 1 -->
<div class="bg-surface-container-lowest p-space-xl rounded-lg shadow-sm flex flex-col justify-start">
<div class="w-10 h-10 rounded bg-surface-container-high flex items-center justify-center text-primary mb-space-md">
<span class="material-symbols-outlined text-[22px]">find_in_page</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
            Recognize Execution Gaps
          </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Reflect on areas where partner readiness, engagement or marketing coordination may need attention.
          </p>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest p-space-xl rounded-lg shadow-sm flex flex-col justify-start">
<div class="w-10 h-10 rounded bg-surface-container-high flex items-center justify-center text-primary mb-space-md">
<span class="material-symbols-outlined text-[22px]">tune</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
            Clarify Your Priorities
          </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Consider which challenges deserve further investigation before committing additional resources.
          </p>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest p-space-xl rounded-lg shadow-sm flex flex-col justify-start">
<div class="w-10 h-10 rounded bg-surface-container-high flex items-center justify-center text-primary mb-space-md">
<span class="material-symbols-outlined text-[22px]">hub</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
            Connect the Bigger Picture
          </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Look beyond individual campaigns and consider how strategy, partner activity and measurement work together.
          </p>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest p-space-xl rounded-lg shadow-sm flex flex-col justify-start">
<div class="w-10 h-10 rounded bg-surface-container-high flex items-center justify-center text-primary mb-space-md">
<span class="material-symbols-outlined text-[22px]">chat</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
            Start a More Relevant Conversation
          </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Give our team useful context for discussing your channel marketing priorities.
          </p>
</div>
</div>
<!-- Restrained Diagnostic Disclaimer Callout -->
<div class="mt-12 bg-surface-container-low p-space-md rounded flex items-center gap-space-md">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">info</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
<strong class="text-on-surface font-semibold">Important:</strong> This is an initial diagnostic questionnaire, not an automated audit, independent certification or guaranteed performance evaluation.
        </p>
</div>
</div>
</section>
<!-- ========================================================================= -->
<!-- SECTION 5: HOW IT WORKS -->
<!-- ========================================================================= -->
<section class="w-full bg-surface-container-high/50 py-20 lg:py-28">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<div class="max-w-2xl mb-16">
<div class="flex items-center gap-space-xs mb-space-xs">
<span class="w-6 h-[1px] bg-[#705422]"></span>
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-tertiary-container">
            THE PROCESS
          </span>
</div>
<h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface mb-space-sm">
          A Simple Starting Point.
        </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
          No automated scoring. No generic downloadable report. Just a structured starting point for a more informed business discussion.
        </p>
</div>
<!-- 3-Stage Sequential Flow -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter relative">
<!-- Step 1 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm relative flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary font-bold tracking-widest">PHASE 01</span>
<span class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center font-bold text-primary font-body-sm">1</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              Share Your Channel Context
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Answer a few questions about your organization, partner ecosystem and current marketing execution.
            </p>
</div>
<div class="mt-space-lg pt-space-sm font-label-sm text-label-sm text-on-surface-variant/80">
            Takes ~6 minutes online
          </div>
</div>
<!-- Step 2 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm relative flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary font-bold tracking-widest">PHASE 02</span>
<span class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center font-bold text-primary font-body-sm">2</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              We Review Your Responses
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Our team considers the information you've shared to understand the challenges and priorities you've identified.
            </p>
</div>
<div class="mt-space-lg pt-space-sm font-label-sm text-label-sm text-on-surface-variant/80">
            Internal partner evaluation
          </div>
</div>
<!-- Step 3 -->
<div class="bg-surface-container-lowest p-space-lg rounded-lg shadow-sm relative flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary font-bold tracking-widest">PHASE 03</span>
<span class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center font-bold text-primary font-body-sm">3</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-space-xs">
              Explore Relevant Next Steps
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Where appropriate, we'll follow up to discuss your responses and whether a deeper conversation could be useful.
            </p>
</div>
<div class="mt-space-lg pt-space-sm font-label-sm text-label-sm text-on-surface-variant/80">
            Direct executive briefing
          </div>
</div>
</div>
<div class="mt-14 text-center">
<button class="bg-primary-container text-on-primary font-label-md text-label-md px-space-xl py-space-sm rounded hover:bg-primary transition-all shadow-md inline-flex items-center gap-space-xs" data-open-modal="assessment" type="button">
<span>Take the Assessment</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
</section>
<!-- ========================================================================= -->
<!-- SECTION 6: WHO IS THIS FOR? -->
<!-- ========================================================================= -->
<section class="w-full bg-surface-bright py-20 lg:py-28">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
<!-- Left: Audience Roster (7 Cols) -->
<div class="lg:col-span-7 flex flex-col gap-space-md">
<div class="flex items-center gap-space-xs">
<span class="w-6 h-[1px] bg-[#705422]"></span>
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-tertiary-container">
              WHO SHOULD PARTICIPATE
            </span>
</div>
<h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface">
            For Teams Responsible for Channel Performance.
          </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
            The assessment is designed for professionals managing or influencing partner-led growth, including:
          </p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm pt-space-xs">
<div class="flex items-start gap-space-xs p-space-sm bg-surface-container-low rounded">
<span class="material-symbols-outlined text-primary text-[20px] mt-0.5">verified</span>
<span class="font-label-md text-label-md text-on-surface">Channel Marketing Directors and Managers</span>
</div>
<div class="flex items-start gap-space-xs p-space-sm bg-surface-container-low rounded">
<span class="material-symbols-outlined text-primary text-[20px] mt-0.5">verified</span>
<span class="font-label-md text-label-md text-on-surface">Partner Program and Enablement Leaders</span>
</div>
<div class="flex items-start gap-space-xs p-space-sm bg-surface-container-low rounded">
<span class="material-symbols-outlined text-primary text-[20px] mt-0.5">verified</span>
<span class="font-label-md text-label-md text-on-surface">Channel Sales and Business Development Teams</span>
</div>
<div class="flex items-start gap-space-xs p-space-sm bg-surface-container-low rounded">
<span class="material-symbols-outlined text-primary text-[20px] mt-0.5">verified</span>
<span class="font-label-md text-label-md text-on-surface">Regional and Global Marketing Leaders</span>
</div>
<div class="flex items-start gap-space-xs p-space-sm bg-surface-container-low rounded">
<span class="material-symbols-outlined text-primary text-[20px] mt-0.5">verified</span>
<span class="font-label-md text-label-md text-on-surface">Enterprise Technology Vendors</span>
</div>
<div class="flex items-start gap-space-xs p-space-sm bg-surface-container-low rounded">
<span class="material-symbols-outlined text-primary text-[20px] mt-0.5">verified</span>
<span class="font-label-md text-label-md text-on-surface">Distributors Operating Through Partner Networks</span>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant/90 pt-space-xs">
            Whether you’re building a channel program, expanding into new markets or improving an established ecosystem, the assessment provides a useful starting point.
          </p>
</div>
<!-- Right: Infrastructure Photo (5 Cols) -->
<div class="lg:col-span-5 mt-6 lg:mt-0">
<div class="relative bg-surface-container-high p-3 rounded-lg shadow-sm">
<div class="aspect-[4/3] w-full overflow-hidden rounded">
<img class="w-full h-full object-cover" data-alt="Server racks lined up neatly in high-grade telecom data facility with mesh security doors, reflective polished concrete floors, disciplined architecture, clean industrial mood." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvP4pOxcRB3u5wljDxYBch8ZAolsX6rE3_E_TcZmVFDLacH77yDA5APgHi9ONZqnBLfvNN4dEu-PuQ6zAOrTyHtCVQl-_6CkjzdZWAzcpwJSHfBhTCVnRkHD8qP9YuEHKpsOQGX8u9hQdIJN5cdATqC34fNpe4fahF4TUPwJFiG1KtB7zK0qxjRNu0-KoboGnpm-ECk0H4ujKZvpu00aXabf15ECTmN9mnBd6RkgDA">
</div>
<div class="pt-3 px-1">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary-container uppercase block mb-1">
                SYSTEMIC GOVERNANCE
              </span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Equipping technical ecosystems with repeatable commercial clarity.
              </p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ========================================================================= -->
<!-- SECTION 7: FINAL CONVERSION -->
<!-- ========================================================================= -->
<section class="w-full bg-[#10263F] text-[#F7F4EE] py-20 lg:py-28 relative overflow-hidden">
<div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#C7A46A 1px, transparent 1px), linear-gradient(to right, #C7A46A 1px, transparent 1px); background-size: 40px 40px;"></div>
<div class="max-w-4xl mx-auto px-margin-mobile lg:px-margin text-center relative z-10">
<div class="inline-flex items-center gap-space-xs mb-space-sm">
<span class="w-6 h-[1px] bg-[#C7A46A]"></span>
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-[#C7A46A]">
          READY TO TAKE A CLOSER LOOK?
        </span>
<span class="w-6 h-[1px] bg-[#C7A46A]"></span>
</div>
<h2 class="font-display-xl text-display-xl-mobile lg:text-display-xl font-bold tracking-tight text-[#F7F4EE] mb-space-md">
        Understand Your Channel Before Planning Its Next Move.
      </h2>
<p class="font-body-lg text-body-lg text-[#F7F4EE]/85 max-w-2xl mx-auto mb-space-xl">
        Stronger channel marketing begins with asking the right questions about your partners, programs and commercial priorities. Take the first step toward a clearer picture of your channel marketing.
      </p>
<div class="flex flex-col sm:flex-row items-center justify-center gap-space-md">
<button class="w-full sm:w-auto bg-[#3156A3] text-on-primary font-label-md text-label-md px-space-xl py-space-sm rounded hover:bg-[#24417D] transition-colors shadow-lg flex items-center justify-center gap-space-xs" data-open-modal="assessment" type="button">
<span>Assess Your Channel Marketing</span>
<span class="material-symbols-outlined text-[18px]">assignment</span>
</button>
<button class="w-full sm:w-auto bg-transparent border border-[#C7A46A]/50 text-[#F7F4EE] hover:bg-[#C7A46A]/10 font-label-md text-label-md px-space-xl py-space-sm rounded transition-colors flex items-center justify-center gap-space-xs" data-open-modal="consultation" type="button">
<span>Talk to Max &amp; Mara</span>
<span class="material-symbols-outlined text-[18px]">forum</span>
</button>
</div>
<p class="font-body-sm text-body-sm text-[#F7F4EE]/60 mt-space-lg">
        Confidential review conducted exclusively by senior practice leaders.
      </p>
</div>
</section>
<!-- ========================================================================= -->
<!-- MODAL 1: CONSULTATION & GENERAL ENQUIRY (TALK TO MAX & MARA) -->
<!-- ========================================================================= -->
<div aria-hidden="true" class="fixed inset-0 z-50 hidden bg-[#10263F]/80 backdrop-blur-sm flex items-center justify-center p-4 overflow-y-auto" id="modal-consultation" role="dialog">
<div class="relative w-full max-w-xl bg-surface-container-lowest rounded-lg shadow-2xl p-space-xl text-on-surface">
<!-- Modal Close Button -->
<button class="absolute top-4 right-4 text-on-surface-variant hover:text-on-surface p-1 rounded transition-colors" data-close-modal="consultation" type="button">
<span class="material-symbols-outlined text-[24px]">close</span>
</button>
<div class="mb-space-lg">
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-tertiary-container block mb-1">
          EXECUTIVE CONSULTATION
        </span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
          Connect with Max &amp; Mara
        </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
          Initiate a confidential advisory dialogue regarding your partner ecosystem structure.
        </p>
</div>
<form class="space-y-space-md" id="consultation-form" onsubmit="event.preventDefault(); showConsultationSuccess();">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">First Name *</label>
<input class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:ring-1 focus:ring-primary" placeholder="e.g. Eleanor" required="" type="text">
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Last Name *</label>
<input class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:ring-1 focus:ring-primary" placeholder="e.g. Vance" required="" type="text">
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Corporate Email *</label>
<input class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:ring-1 focus:ring-primary" placeholder="eleanor.vance@enterprise.com" required="" type="email">
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Organization / Vendor *</label>
<input class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:ring-1 focus:ring-primary" placeholder="e.g. CloudTech Systems" required="" type="text">
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Current Role *</label>
<select class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:ring-1 focus:ring-primary" required="">
<option value="">Select executive level</option>
<option value="c-level">VP / C-Level Executive</option>
<option value="director">Director of Channel Marketing</option>
<option value="alliances">Head of Strategic Alliances</option>
<option value="operations">Partner Operations Leader</option>
<option value="other">Other Executive Role</option>
</select>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Primary Focus of Discussion</label>
<textarea class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:ring-1 focus:ring-primary resize-none" placeholder="Briefly state your current ecosystem scale or immediate channel challenge..." rows="3"></textarea>
</div>
<div class="pt-2">
<button class="w-full bg-primary-container text-on-primary font-label-md text-label-md py-3 rounded hover:bg-primary transition-colors flex items-center justify-center gap-space-xs font-semibold" type="submit">
<span>Request Executive Dialogue</span>
<span class="material-symbols-outlined text-[18px]">send</span>
</button>
</div>
</form>
<!-- Success Screen -->
<div class="hidden text-center py-8" id="consultation-success"><div class="w-12 h-12 bg-surface-container-high text-primary rounded-full flex items-center justify-center mx-auto mb-3"><span class="material-symbols-outlined text-[28px]">mark_email_read</span></div><h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Form Submission Ready</h4><p class="font-body-md text-body-md text-on-surface-variant max-w-sm mx-auto mt-2">Your request details have been captured locally. Live advisory backend dispatch will be active once connected to production routing.</p><button class="mt-6 bg-surface-container text-on-surface px-6 py-2 rounded font-label-md text-label-md hover:bg-surface-container-high transition-colors" data-close-modal="consultation" type="button">Close Window</button></div>
</div>
</div>
<!-- ========================================================================= -->
<!-- MODAL 2: MULTI-STEP CHANNEL MARKETING ASSESSMENT -->
<!-- ========================================================================= -->
<div aria-hidden="true" class="fixed inset-0 z-50 hidden bg-[#10263F]/80 backdrop-blur-sm flex items-center justify-center p-4 overflow-y-auto" id="modal-assessment" role="dialog">
<div class="relative w-full max-w-2xl bg-surface-container-lowest rounded-lg shadow-2xl p-6 sm:p-space-xl text-on-surface">
<!-- Close Button -->
<button class="absolute top-4 right-4 text-on-surface-variant hover:text-on-surface p-1 rounded transition-colors" data-close-modal="assessment" type="button">
<span class="material-symbols-outlined text-[24px]">close</span>
</button>
<!-- Stepper Header -->
<div class="mb-space-lg">
<div class="flex items-center justify-between mb-2">
<span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-tertiary-container">
            CHANNEL MARKETING ASSESSMENT
          </span>
<span class="font-label-sm text-label-sm text-on-surface-variant font-semibold" id="step-indicator">
            Step 1 of 3
          </span>
</div>
<!-- Progress Bar Track -->
<div class="w-full h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary transition-all duration-300 w-1/3" id="assessment-progress-bar"></div>
</div>
</div>
<!-- Assessment Form Container -->
<form id="assessment-multistep-form" onsubmit="event.preventDefault(); submitAssessment();">
<!-- STEP 1: YOUR CHANNEL CONTEXT -->
<div class="space-y-space-md" id="step-1">
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
              Step 1: Your Channel Ecosystem
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Tell us about the architecture and scope of your partner organization.
            </p>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">How would you describe your partner footprint?</label>
<select class="w-full bg-surface-container-low px-3 py-2.5 rounded text-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary" id="field-ecosystem-scale" required="">
<option value="">Select scope</option>
<option value="emerging">Emerging / Selective (10 - 50 Active Tiered Partners)</option>
<option value="mid-tier">Mid-Market Tiered (50 - 250 Active Tiered Partners)</option>
<option value="enterprise">Global Enterprise Network (250+ Active Partners / Multi-Tier)</option>
<option value="distributor-led">Primarily 2-Tier / Distributor-led Network</option>
</select>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">What is the primary partner profile driving your volume?</label>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-1">
<label class="flex items-center gap-2 p-2.5 rounded bg-surface-container-low hover:bg-surface-container cursor-pointer text-body-sm text-on-surface">
<input checked="" class="text-primary focus:ring-0" name="partner_type" type="radio" value="var">
<span>Value-Added Resellers (VARs)</span>
</label>
<label class="flex items-center gap-2 p-2.5 rounded bg-surface-container-low hover:bg-surface-container cursor-pointer text-body-sm text-on-surface">
<input class="text-primary focus:ring-0" name="partner_type" type="radio" value="msp">
<span>Managed Service Providers (MSPs)</span>
</label>
<label class="flex items-center gap-2 p-2.5 rounded bg-surface-container-low hover:bg-surface-container cursor-pointer text-body-sm text-on-surface">
<input class="text-primary focus:ring-0" name="partner_type" type="radio" value="integrators">
<span>Systems Integrators (GSIs / RSIs)</span>
</label>
<label class="flex items-center gap-2 p-2.5 rounded bg-surface-container-low hover:bg-surface-container cursor-pointer text-body-sm text-on-surface">
<input class="text-primary focus:ring-0" name="partner_type" type="radio" value="cloud">
<span>Cloud Solution Providers / ISVs</span>
</label>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Current Channel Strategy Alignment</label>
<select class="w-full bg-surface-container-low px-3 py-2.5 rounded text-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary">
<option value="well-aligned">Marketing priorities are closely tied to quota and corporate targets</option>
<option value="moderate">Partially coordinated, but disjointed by region or product division</option>
<option value="reactive">Mostly reactive support for inbound partner requests</option>
</select>
</div>
<div class="pt-4 flex justify-end">
<button class="bg-primary-container text-on-primary font-label-md text-label-md px-6 py-2.5 rounded hover:bg-primary transition-colors inline-flex items-center gap-2" onclick="goToAssessmentStep(2)" type="button">
<span>Continue to Execution</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<!-- STEP 2: CURRENT EXECUTION & GAPS -->
<div class="space-y-space-md hidden" id="step-2">
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
              Step 2: Execution &amp; Demand Dynamics
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Evaluate your current through-channel performance friction.
            </p>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Which area poses your greatest commercial friction today?</label>
<div class="space-y-2 pt-1">
<label class="flex items-start gap-2 p-2.5 rounded bg-surface-container-low hover:bg-surface-container cursor-pointer text-body-sm text-on-surface">
<input checked="" class="mt-1 text-primary focus:ring-0" name="friction_area" type="radio" value="activation">
<div>
<span class="font-medium block">Partner Activation &amp; Engagement</span>
<span class="text-on-surface-variant text-[12px]">Partners take certifications but do not proactively generate campaigns.</span>
</div>
</label>
<label class="flex items-start gap-2 p-2.5 rounded bg-surface-container-low hover:bg-surface-container cursor-pointer text-body-sm text-on-surface">
<input class="mt-1 text-primary focus:ring-0" name="friction_area" type="radio" value="enablement">
<div>
<span class="font-medium block">Positioning &amp; Solution Messaging</span>
<span class="text-on-surface-variant text-[12px]">Partners struggle to communicate customer business value over technical specs.</span>
</div>
</label>
<label class="flex items-start gap-2 p-2.5 rounded bg-surface-container-low hover:bg-surface-container cursor-pointer text-body-sm text-on-surface">
<input class="mt-1 text-primary focus:ring-0" name="friction_area" type="radio" value="mdf">
<div>
<span class="font-medium block">MDF ROI &amp; Measurable Throughput</span>
<span class="text-on-surface-variant text-[12px]">Budgets are deployed without transparent visibility into qualified pipeline.</span>
</div>
</label>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Estimated Through-Channel Campaign Participation Rate</label>
<select class="w-full bg-surface-container-low px-3 py-2.5 rounded text-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary">
<option value="under15">Under 15% of enrolled partners execute joint campaigns</option>
<option value="15-35">15% – 35% consistent joint execution</option>
<option value="over35">Over 35% proactive program participation</option>
<option value="unknown">Uncertain / Measurement infrastructure not in place</option>
</select>
</div>
<div class="pt-4 flex items-center justify-between">
<button class="text-on-surface-variant font-label-md text-label-md px-4 py-2 hover:text-on-surface transition-colors inline-flex items-center gap-1" onclick="goToAssessmentStep(1)" type="button">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
<span>Back</span>
</button>
<button class="bg-primary-container text-on-primary font-label-md text-label-md px-6 py-2.5 rounded hover:bg-primary transition-colors inline-flex items-center gap-2" onclick="goToAssessmentStep(3)" type="button">
<span>Continue to Contact Details</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<!-- STEP 3: DETAILS & SUBMISSION -->
<div class="space-y-space-md hidden" id="step-3">
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
              Step 3: Executive Context &amp; Contact
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Where should we direct our team's qualitative analysis?
            </p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Your Name *</label>
<input class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary" id="assess-name" placeholder="Marcus Brody" required="" type="text">
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Corporate Work Email *</label>
<input class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary" id="assess-email" placeholder="m.brody@organization.com" required="" type="email">
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Company Name *</label>
<input class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Acme Global Tech" required="" type="text">
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Direct Telephone / Mobile</label>
<input class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary" placeholder="+1 (555) 019-2834" type="tel">
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface font-medium">Specific Context or Questions for Max &amp; Mara (Optional)</label>
<textarea class="w-full bg-surface-container-low px-3 py-2 rounded text-body-md text-on-surface focus:outline-none focus:ring-1 focus:ring-primary resize-none" placeholder="e.g. Planning H2 partner kickoff; reviewing MDF co-op accountability models..." rows="2"></textarea>
</div>
<div class="pt-4 flex items-center justify-between">
<button class="text-on-surface-variant font-label-md text-label-md px-4 py-2 hover:text-on-surface transition-colors inline-flex items-center gap-1" onclick="goToAssessmentStep(2)" type="button">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
<span>Back</span>
</button>
<button class="bg-primary text-on-primary font-label-md text-label-md px-8 py-2.5 rounded hover:bg-primary-container transition-colors inline-flex items-center gap-2 font-bold shadow-md" type="submit">
<span>Submit Assessment</span>
<span class="material-symbols-outlined text-[18px]">check</span>
</button>
</div>
</div>
</form>
<!-- Completion Confirmation View -->
<div class="hidden text-center py-10" id="assessment-completion-view"><div class="w-14 h-14 bg-surface-container-high text-primary rounded-full flex items-center justify-center mx-auto mb-4"><span class="material-symbols-outlined text-[32px]">task_alt</span></div><span class="font-label-eyebrow text-label-eyebrow tracking-widest uppercase text-tertiary-container block mb-1">SUBMISSION QUEUED</span><h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Diagnostic Responses Recorded</h4><p class="font-body-md text-body-md text-on-surface-variant max-w-md mx-auto mt-2 leading-relaxed">Diagnostic entries have been recorded in this session. Full automated transmission will activate upon connection to the secure practice backend.</p><div class="mt-8 flex justify-center"><button class="bg-surface-container text-on-surface px-8 py-2.5 rounded font-label-md text-label-md hover:bg-surface-container-high transition-colors" data-close-modal="assessment" type="button">Return to Channel Overview</button></div></div>
</div>
</div>
<!-- ========================================================================= -->
<!-- CLIENT INTERACTIVITY & MODAL CONTROL SCRIPT -->
<!-- ========================================================================= -->
<script>
    (function initModalController() {
      // Elements
      const consultationModal = document.getElementById('modal-consultation');
      const assessmentModal = document.getElementById('modal-assessment');
      const progressBar = document.getElementById('assessment-progress-bar');
      const stepIndicator = document.getElementById('step-indicator');
      
      const step1 = document.getElementById('step-1');
      const step2 = document.getElementById('step-2');
      const step3 = document.getElementById('step-3');
      const assessmentForm = document.getElementById('assessment-multistep-form');
      const assessmentCompletion = document.getElementById('assessment-completion-view');

      // Global open triggers
      document.querySelectorAll('[data-open-modal="assessment"]').forEach(btn => {
        btn.addEventListener('click', () => {
          resetAssessment();
          assessmentModal.classList.remove('hidden');
          document.body.style.overflow = 'hidden';
        });
      });

      document.querySelectorAll('[data-open-modal="consultation"]').forEach(btn => {
        btn.addEventListener('click', () => {
          document.getElementById('consultation-form').classList.remove('hidden');
          document.getElementById('consultation-success').classList.add('hidden');
          consultationModal.classList.remove('hidden');
          document.body.style.overflow = 'hidden';
        });
      });

      // Close handlers
      document.querySelectorAll('[data-close-modal]').forEach(btn => {
        btn.addEventListener('click', () => {
          const target = btn.getAttribute('data-close-modal');
          if (target === 'assessment') assessmentModal.classList.add('hidden');
          if (target === 'consultation') consultationModal.classList.add('hidden');
          document.body.style.overflow = '';
        });
      });

      // Escape key listener
      window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
          assessmentModal.classList.add('hidden');
          consultationModal.classList.add('hidden');
          document.body.style.overflow = '';
        }
      });

      // Step navigation logic
      window.goToAssessmentStep = function(stepNumber) {
        step1.classList.add('hidden');
        step2.classList.add('hidden');
        step3.classList.add('hidden');

        if (stepNumber === 1) {
          step1.classList.remove('hidden');
          progressBar.style.width = '33.33%';
          stepIndicator.textContent = 'Step 1 of 3';
        } else if (stepNumber === 2) {
          step2.classList.remove('hidden');
          progressBar.style.width = '66.66%';
          stepIndicator.textContent = 'Step 2 of 3';
        } else if (stepNumber === 3) {
          step3.classList.remove('hidden');
          progressBar.style.width = '100%';
          stepIndicator.textContent = 'Step 3 of 3';
        }
      };

      // Reset Assessment
      function resetAssessment() {
        goToAssessmentStep(1);
        assessmentForm.classList.remove('hidden');
        assessmentCompletion.classList.add('hidden');
      }

      // Assessment Submit
      window.submitAssessment = function() {
        assessmentForm.classList.add('hidden');
        assessmentCompletion.classList.remove('hidden');
      };

      // Consultation Form Submit
      window.showConsultationSuccess = function() {
        document.getElementById('consultation-form').classList.add('hidden');
        document.getElementById('consultation-success').classList.remove('hidden');
      };
    })();
  </script>
</div>
@endsection