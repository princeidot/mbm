@extends('layouts.app')

@section('title', '')

@section('content')
<div class="flex flex-col w-full">
<!-- SECTION 1: HERO -->
<section class="w-full bg-surface-bright py-16 lg:py-24">
<div class="max-w-[1280px] mx-auto px-6 lg:px-12">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
<div class="lg:col-span-7 flex flex-col space-y-6">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary tracking-widest uppercase">Channel Growth Consultation</span>
<h1 class="font-display-xl text-display-xl-mobile sm:text-headline-lg lg:text-display-xl text-on-surface tracking-tight leading-tight">
            Your Channel Has Potential. Let’s Find What’s Holding It Back.
          </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
            Your products may be competitive. Your partner network may be established. Your marketing investments may already be significant. But if partners aren’t consistently engaged, enabled or generating meaningful customer opportunities, there’s a gap worth understanding. At Maximize Business Marketing, we help enterprise vendors and distributors identify the friction between channel strategy and market execution.
          </p>
<div class="flex flex-wrap items-center gap-4 pt-4">
<button class="bg-primary text-on-primary hover:bg-primary-container px-8 py-4 rounded-lg font-label-md text-label-md transition-all duration-200 shadow-md flex items-center justify-center gap-2 group" data-open-modal="consultation" type="button">
<span>Let’s Talk Channel Growth</span>
<span class="material-symbols-outlined text-[18px] transition-transform duration-200 group-hover:translate-x-1">arrow_forward</span>
</button>
<a class="bg-surface-container hover:bg-surface-container-high text-on-surface px-8 py-4 rounded-lg font-label-md text-label-md transition-all duration-200 flex items-center justify-center" data-path="our-approach" href="#">
              Explore Our Approach
            </a>
</div>
</div>
<div class="lg:col-span-5 relative">
<div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden shadow-2xl bg-surface-container-high">
<img alt="Executive boardroom overview with expansive architectural scale" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/ALJJyrD_Sl4Q4l6eV7Qmd8mJWeYoUuL60TTQQWMjbea5ygSs6aoyo7TiMGVLhw-l-hUrUyVlPt40BdlbyW0CohtVfOFD4aZhY2tU4oSLQlZnKDOvHCIBYuQA1Z9cGZaJwxY3dZcA_qn3o6AreXGMdTLxyIADOhSaxLflM5QBFCU84W59uuiTzIVDcnpQtxhjMSvYKSiJSwUnsoQyHAK--RpuuNaU2CjjBFjI6SnmbbOj5NyYYg">
<div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/80 via-transparent to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6 p-4 bg-inverse-surface/90 backdrop-blur-md rounded-lg">
<p class="font-label-eyebrow text-label-eyebrow text-tertiary-fixed tracking-wider uppercase mb-1">Ecosystem Advisory</p>
<p class="font-body-sm text-body-sm text-surface-bright">Direct strategy sessions held with enterprise channel leadership teams globally.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- SECTION 2: RECOGNIZING THE CHALLENGE -->
<section class="w-full bg-surface-container-low py-20 lg:py-28">
<div class="max-w-[1280px] mx-auto px-6 lg:px-12">
<div class="max-w-3xl mb-16">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary uppercase tracking-widest">The Channel Reality</span>
<h2 class="font-headline-lg text-headline-lg-mobile sm:text-headline-lg text-on-surface mt-2 mb-6">
          Growth Challenges Rarely Exist in Isolation.
        </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
          A channel ecosystem can have the right products, partners and market opportunities yet still struggle to translate potential into performance. Some challenges are strategic. Others emerge through partner readiness, inconsistent engagement, fragmented marketing execution or limited visibility into results.
        </p>
</div>
<!-- Staggered 2-Column Editorial Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
<!-- 01 -->
<div class="p-8 lg:p-10 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col justify-between">
<div>
<span class="font-label-eyebrow text-headline-sm text-tertiary font-bold tracking-tight block mb-4">01</span>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Unclear Channel Priorities</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Too many partner segments, markets or initiatives competing for limited resources, causing diluted investments and unclear ROI.
            </p>
</div>
<div class="mt-6 pt-4 flex items-center text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] mr-2">balance</span>
            Strategic Resource Allocation
          </div>
</div>
<!-- 02 -->
<div class="p-8 lg:p-10 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col justify-between md:translate-y-6">
<div>
<span class="font-label-eyebrow text-headline-sm text-tertiary font-bold tracking-tight block mb-4">02</span>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Partners Aren’t Sales-Ready</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Partners have access to products but lack the messaging, confidence or commercial resources to position them effectively to executive buyers.
            </p>
</div>
<div class="mt-6 pt-4 flex items-center text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] mr-2">verified</span>
            Partner Enablement Gaps
          </div>
</div>
<!-- 03 -->
<div class="p-8 lg:p-10 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col justify-between">
<div>
<span class="font-label-eyebrow text-headline-sm text-tertiary font-bold tracking-tight block mb-4">03</span>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Complex Solutions Are Difficult to Sell</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Technical capabilities aren’t consistently translated into customer problems, business value and relevant, verifiable use cases.
            </p>
</div>
<div class="mt-6 pt-4 flex items-center text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] mr-2">psychology</span>
            Commercial Narrative Translation
          </div>
</div>
<!-- 04 -->
<div class="p-8 lg:p-10 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col justify-between md:translate-y-6">
<div>
<span class="font-label-eyebrow text-headline-sm text-tertiary font-bold tracking-tight block mb-4">04</span>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Partner Engagement Is Inconsistent</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Programs are launched with high enthusiasm, but partner participation drops sharply and sustained market activity remains limited.
            </p>
</div>
<div class="mt-6 pt-4 flex items-center text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] mr-2">cycle</span>
            Activation Lifecycle Decay
          </div>
</div>
<!-- 05 -->
<div class="p-8 lg:p-10 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col justify-between">
<div>
<span class="font-label-eyebrow text-headline-sm text-tertiary font-bold tracking-tight block mb-4">05</span>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Demand Generation Isn’t Connecting</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Marketing campaigns run in siloes without sufficient tactical coordination between vendors, distributed partners and frontline sales teams.
            </p>
</div>
<div class="mt-6 pt-4 flex items-center text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] mr-2">hub</span>
            Through-Channel Alignment
          </div>
</div>
<!-- 06 -->
<div class="p-8 lg:p-10 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col justify-between md:translate-y-6">
<div>
<span class="font-label-eyebrow text-headline-sm text-tertiary font-bold tracking-tight block mb-4">06</span>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Marketing Investment Lacks Visibility</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Budgets are allocated and activities completed, but the relationship between investment, partner participation and commercial outcomes remains unclear.
            </p>
</div>
<div class="mt-6 pt-4 flex items-center text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] mr-2">query_stats</span>
            MDF Governance &amp; Attribution
          </div>
</div>
</div>
<div class="mt-16 p-8 bg-surface-container rounded-xl flex flex-col sm:flex-row items-center justify-between gap-6 shadow-sm">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-primary-container text-on-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-2xl">insights</span>
</div>
<p class="font-title-md text-title-md text-on-surface leading-snug">
            These challenges rarely require another isolated campaign. They require a clearer understanding of where the channel is losing momentum.
          </p>
</div>
<button class="whitespace-nowrap bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md px-6 py-3 rounded-lg shadow-sm transition-colors shrink-0" data-open-modal="consultation" type="button">
          Discuss Your Channel Challenges
        </button>
</div>
</div>
</section>
<!-- SECTION 3: WHAT A CONSULTATION HELPS UNCOVER -->
<section class="w-full bg-surface-bright py-20 lg:py-28">
<div class="max-w-[1280px] mx-auto px-6 lg:px-12">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
<div class="lg:col-span-5 lg:sticky lg:top-28 flex flex-col space-y-6">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary tracking-widest uppercase">Where We Start</span>
<h2 class="font-headline-lg text-headline-lg-mobile sm:text-headline-lg text-on-surface">
            Before Recommending Solutions, We Understand the Problem.
          </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
            Every channel ecosystem is different. That’s why our initial conversation focuses on your business context, not a predetermined service package.
          </p>
<div class="rounded-xl overflow-hidden shadow-lg aspect-[16/10] bg-surface-container">
<img alt="Executive boardroom consultation team reviewing strategic channel architecture" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/ALJJyrA6N5h9cakhB9UG--NV3D_J5aG80BMAon8nKFuujMVnb81RU1kyDBIlzO0Urzc8ROSAxF_gZgM-7M7pCJkoCc7IJhRPdsnZyw4uzEJVKHasR2g_Ep64_Gqcv-VxLiBYW0QGlRoAAhh2AS3JIpdAi87gnLw8NLwYJb6bjM6xZz7evZqEmIr2bPjQm3sN3Aj64THGPXPmciax6S6lP36MJNwytbZvOzEBtcoD5BHUdrNh0Q">
</div>
<div class="pt-4">
<button class="bg-primary text-on-primary hover:bg-primary-container px-6 py-3.5 rounded-lg font-label-md text-label-md transition-all shadow-sm flex items-center gap-2" data-open-modal="consultation" type="button">
<span>Discuss Your Channel Challenges</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<div class="lg:col-span-7 flex flex-col space-y-6">
<!-- Area 1 -->
<div class="p-8 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all">
<div class="flex items-start gap-5">
<span class="material-symbols-outlined text-primary text-3xl">corporate_fare</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Your Business Priorities</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                  What you’re trying to achieve across global and regional markets, high-margin solution lines, product transitions, and core partner relationships.
                </p>
</div>
</div>
</div>
<!-- Area 2 -->
<div class="p-8 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all">
<div class="flex items-start gap-5">
<span class="material-symbols-outlined text-primary text-3xl">diversity_3</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Your Partner Ecosystem</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                  How your distributors, value-added resellers (VARs), systems integrators, and alliance partners actually operate, earn revenue, and engage with your portfolio.
                </p>
</div>
</div>
</div>
<!-- Area 3 -->
<div class="p-8 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all">
<div class="flex items-start gap-5">
<span class="material-symbols-outlined text-primary text-3xl">auto_transmission</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Your Current Marketing Execution</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                  How partner enablement assets, engagement cadences, through-partner campaigns, and co-op/MDF channel investments are currently deployed and governed.
                </p>
</div>
</div>
</div>
<!-- Area 4 -->
<div class="p-8 bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all">
<div class="flex items-start gap-5">
<span class="material-symbols-outlined text-primary text-3xl">speed</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Your Commercial Friction</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                  Where field execution is slowing down, high-value opportunities are slipping through the cracks, or marketing ROI is difficult to substantiate.
                </p>
</div>
</div>
</div>
<div class="p-6 bg-surface-container-high rounded-xl mt-4">
<p class="font-body-md text-body-md text-on-surface font-semibold">The objective is to identify whether there is a meaningful opportunity for MBM to support your channel priorities. Looking for an immediate baseline diagnostic? <a href="/channel-marketing-assessment/" data-path="channel-marketing-assessment" class="text-primary underline hover:text-primary-container font-semibold">Explore our Channel Marketing Assessment</a>.</p>
</div>
</div>
</div>
</div>
</section>
<!-- SECTION 4: WHAT TO EXPECT -->
<section class="w-full bg-surface-container-low py-20 lg:py-28">
<div class="max-w-[1280px] mx-auto px-6 lg:px-12">
<div class="text-center max-w-3xl mx-auto mb-16">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary uppercase tracking-widest">The Conversation</span>
<h2 class="font-headline-lg text-headline-lg-mobile sm:text-headline-lg text-on-surface mt-2 mb-4">
          A Focused Business Discussion. Not Another Generic Sales Pitch.
        </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
          We respect your time. Our strategic discovery calls are candid, rigorous, and commercially anchored.
        </p>
</div>
<!-- 3-Stage Timeline -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
<!-- Stage 01 -->
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm relative flex flex-col">
<div class="flex items-center justify-between mb-6">
<span class="font-display-xl-mobile text-headline-md text-tertiary font-bold">01</span>
<span class="material-symbols-outlined text-primary text-2xl">chat</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Tell Us About Your Channel</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed flex-grow">
            We’ll start with your business model, core solutions, target tier markets, partner network mix, and immediate commercial targets.
          </p>
</div>
<!-- Stage 02 -->
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm relative flex flex-col">
<div class="flex items-center justify-between mb-6">
<span class="font-display-xl-mobile text-headline-md text-tertiary font-bold">02</span>
<span class="material-symbols-outlined text-primary text-2xl">troubleshoot</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Explore the Friction</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed flex-grow">
            We’ll discuss where strategy, partner sales readiness, co-marketing activation, or performance measurement may be limiting progress.
          </p>
</div>
<!-- Stage 03 -->
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm relative flex flex-col">
<div class="flex items-center justify-between mb-6">
<span class="font-display-xl-mobile text-headline-md text-tertiary font-bold">03</span>
<span class="material-symbols-outlined text-primary text-2xl">route</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-3">Identify a Practical Way Forward</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed flex-grow">
            If there’s a relevant fit, we’ll outline high-leverage areas of intervention and agree on structured next steps for your executive team.
          </p>
</div>
</div>
<div class="mt-12 text-center">
<p class="inline-block px-6 py-3 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md">
          No predetermined package. No unrealistic promises. Just a commercially relevant discussion about what your channel needs.
        </p>
</div>
</div>
</section>
<!-- SECTION 5: WHO SHOULD SPEAK WITH US? -->
<section class="w-full bg-surface-bright py-20 lg:py-28">
<div class="max-w-[1280px] mx-auto px-6 lg:px-12">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
<div class="lg:col-span-6 order-2 lg:order-1">
<div class="relative w-full aspect-[4/3] rounded-xl overflow-hidden shadow-xl bg-surface-container">
<img alt="Enterprise technology infrastructure and corporate modern headquarters" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/ALJJyrAjD2fzkCgqSeNuiQT2XYh62dd9AWGkdct2qXG6jnoVIwI-OTj8w5TomlCPqPWT4-L6b_EL01GRhDsxQJ4rCaXTyIThDEQ73PnTtjg5kzFHwuKiiaMzN0cLZ37gmzjltoi9IUq3qARqaMHJ6HFQS9TXQ8RFeJuEVx60sxhP8fV5YxPxA7MPfHxNuEF186KM7m_68WVO3j0BtN6xD6qkGrc-fpsyLQL-aKXVwackPWAbJQ">
</div>
</div>
<div class="lg:col-span-6 order-1 lg:order-2 flex flex-col space-y-6">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary uppercase tracking-widest">Who We Work With</span>
<h2 class="font-headline-lg text-headline-lg-mobile sm:text-headline-lg text-on-surface">
            For Leaders Responsible for Making Channel Growth Happen.
          </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
            Whether you’re designing a new channel initiative or improving an established program, the starting point is understanding what needs to change.
          </p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
<div class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-low">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">check_circle</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Channel Marketing Directors &amp; Managers</span>
</div>
<div class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-low">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">check_circle</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Channel Sales &amp; Partner Program Leaders</span>
</div>
<div class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-low">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">check_circle</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Enterprise Marketing &amp; Demand Teams</span>
</div>
<div class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-low">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">check_circle</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Regional &amp; Global BD Leaders</span>
</div>
<div class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-low">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">check_circle</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Technology Vendors &amp; Distributors</span>
</div>
<div class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-low">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">check_circle</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Organizations Scaling Ecosystems</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- SECTION 6: WHAT MAKES MBM DIFFERENT? -->
<section class="w-full bg-[#10263F] text-inverse-on-surface py-20 lg:py-28">
<div class="max-w-[1280px] mx-auto px-6 lg:px-12">
<div class="max-w-3xl">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary-fixed tracking-widest uppercase">The MBM Distinction</span>
<h2 class="font-headline-lg text-headline-lg-mobile sm:text-headline-lg text-surface-bright mt-2 mb-8 leading-tight">
          We Connect the Pieces That Make Channel Marketing Work.
        </h2>
<div class="space-y-6 font-body-lg text-body-lg text-surface-dim leading-relaxed">
<p>
            Channel marketing is often divided between strategy, content, partner programs, campaigns and performance reporting.
          </p>
<p class="text-surface-bright font-medium text-xl">
            MBM approaches these as connected commercial capabilities.
          </p>
<p>
            We help businesses align channel priorities, equip partners, coordinate marketing execution and create clearer visibility into outcomes.
          </p>
<p>
            Our focus is not simply on delivering more marketing activity. It’s on making channel marketing more relevant, coordinated and commercially useful.
          </p>
</div>
<div class="pt-10 flex flex-wrap gap-4">
<a class="bg-surface-bright hover:bg-surface-container-lowest text-primary px-8 py-3.5 rounded-lg font-label-md text-label-md transition-colors font-semibold" data-path="channel-marketing-strategy" href="#">
            Explore Our Services
          </a>
<button class="bg-primary-container hover:bg-primary text-on-primary px-8 py-3.5 rounded-lg font-label-md text-label-md transition-colors" data-open-modal="consultation" type="button">
            Talk to Max &amp; Mara
          </button>
</div>
</div>
</div>
</section>
<!-- SECTION 7: FINAL CONVERSION SECTION -->
<section class="w-full bg-surface-bright py-20 lg:py-28">
<div class="max-w-[1280px] mx-auto px-6 lg:px-12">
<div class="bg-surface-container p-10 lg:p-16 rounded-2xl shadow-lg relative overflow-hidden">
<div class="max-w-2xl relative z-10 flex flex-col space-y-6">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary uppercase tracking-widest">Start the Conversation</span>
<h2 class="font-headline-lg text-headline-lg-mobile sm:text-headline-lg text-on-surface">
            Let’s Understand What Your Channel Needs Next.
          </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
            You don’t need to arrive with a detailed brief or a fully defined scope of work. Tell us where you’re seeing challenges, what you’re trying to achieve or what you’d like to improve. We’ll explore whether there’s an opportunity to work together.
          </p>
<div class="pt-2">
<button class="bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md px-8 py-4 rounded-lg shadow-md transition-all flex items-center justify-center gap-3" data-open-modal="consultation" type="button">
<span>Talk to Max &amp; Mara</span>
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
</button>
</div>
<p class="font-body-sm text-body-sm text-secondary italic">
            Share a little about your business and we’ll take the conversation from there.
          </p>
</div>
</div>
</div>
</section>
<!-- GLOBAL CONSULTATION POP-UP MODAL (ACCESSIBLE, INLINE JS DRIVEN) -->
<div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-50 bg-[#10263F]/70 backdrop-blur-sm hidden flex items-center justify-center p-4" id="page-consultation-modal" role="dialog">
<div class="bg-surface-container-lowest rounded-lg max-w-xl w-full p-6 sm:p-8 max-h-[90vh] overflow-y-auto shadow-2xl relative" id="modal-box">
<!-- Close Button -->
<button aria-label="Close modal window" class="absolute top-6 right-6 text-on-surface-variant hover:text-on-surface p-1 rounded-full hover:bg-surface-container transition-colors focus:outline-none focus:ring-2 focus:ring-primary" id="close-modal-btn" type="button">
<span class="material-symbols-outlined text-2xl">close</span>
</button>
<!-- Modal Content State: Form -->
<div id="modal-form-container">
<div class="mb-6 pr-8">
<span class="font-label-eyebrow text-label-eyebrow text-tertiary tracking-widest uppercase block mb-1">Let’s Connect</span>
<h3 class="font-headline-md text-headline-md text-on-surface leading-tight" id="modal-title">
            Tell Us What’s Happening in Your Channel.
          </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
            Share a few details about your business and what you’d like to discuss.
          </p>
</div>
<form class="space-y-4" id="consultation-form" novalidate="">
<div>
<label class="block font-label-sm text-label-sm text-on-surface mb-1 font-semibold" for="form-fullname">Full Name <span class="text-error">*</span></label>
<input class="w-full px-4 py-2.5 rounded-lg bg-surface-bright text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary shadow-inner" id="form-fullname" placeholder="e.g. Eleanor Vance" required="" type="text">
<span class="text-error font-body-sm text-body-sm hidden" id="err-fullname">Please enter your full name.</span>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface mb-1 font-semibold" for="form-email">Work Email <span class="text-error">*</span></label>
<input class="w-full px-4 py-2.5 rounded-lg bg-surface-bright text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary shadow-inner" id="form-email" placeholder="eleanor.vance@enterprise.com" required="" type="email">
<span class="text-error font-body-sm text-body-sm hidden" id="err-email">Please enter a valid corporate email.</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div>
<label class="block font-label-sm text-label-sm text-on-surface mb-1 font-semibold" for="form-company">Company Name <span class="text-error">*</span></label>
<input class="w-full px-4 py-2.5 rounded-lg bg-surface-bright text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary shadow-inner" id="form-company" placeholder="Enterprise Corp" required="" type="text">
<span class="text-error font-body-sm text-body-sm hidden" id="err-company">Company name required.</span>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface mb-1 font-semibold" for="form-title">Job Title <span class="text-error">*</span></label>
<input class="w-full px-4 py-2.5 rounded-lg bg-surface-bright text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary shadow-inner" id="form-title" placeholder="VP, Partner Strategy" required="" type="text">
<span class="text-error font-body-sm text-body-sm hidden" id="err-title">Job title required.</span>
</div>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface mb-1 font-semibold" for="form-topic">What Would You Like to Discuss? <span class="text-error">*</span></label>
<select class="w-full px-4 py-2.5 rounded-lg bg-surface-bright text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary shadow-inner" id="form-topic" required="">
<option value="">Select an area of interest...</option>
<option value="Channel Marketing Strategy">Channel Marketing Strategy</option>
<option value="Partner Enablement">Partner Enablement</option>
<option value="Partner Education &amp; Training">Partner Education &amp; Training</option>
<option value="Partner Activation &amp; Engagement">Partner Activation &amp; Engagement</option>
<option value="Through-Channel Demand Generation">Through-Channel Demand Generation</option>
<option value="MDF &amp; Channel Performance">MDF &amp; Channel Performance</option>
<option value="General Channel Growth Challenge">General Channel Growth Challenge</option>
<option value="Not Sure Yet">Not Sure Yet</option>
</select>
<span class="text-error font-body-sm text-body-sm hidden" id="err-topic">Please select a discussion area.</span>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface mb-1 font-semibold" for="form-notes">Tell Us More About Your Challenge (Optional)</label>
<textarea class="w-full px-4 py-2.5 rounded-lg bg-surface-bright text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary shadow-inner" id="form-notes" placeholder="Briefly describe what friction you are observing across your partner network..." rows="3"></textarea>
</div>
<div class="pt-2">
<label class="flex items-start gap-3 cursor-pointer">
<input class="mt-1 h-4 w-4 rounded text-primary focus:ring-primary" id="form-privacy" required="" type="checkbox">
<span class="font-body-sm text-body-sm text-on-surface-variant">
                I agree to the processing of my details in accordance with the <a class="text-primary underline" data-path="privacy-policy" href="#">Privacy Policy</a>. <span class="text-error">*</span>
</span>
</label>
<span class="text-error font-body-sm text-body-sm hidden block mt-1" id="err-privacy">You must accept the privacy policy to continue.</span>
</div>
<div class="pt-4">
<button class="w-full py-3.5 bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md rounded-lg shadow transition-colors font-semibold flex items-center justify-center gap-2" id="form-submit-btn" type="submit">
<span>Request a Consultation</span>
<span class="material-symbols-outlined text-[18px]">send</span>
</button>
</div>
</form>
</div>
<!-- Modal Content State: Confirmation Success -->
<div class="hidden text-center py-10 px-4" id="modal-success-container">
<div class="w-16 h-16 bg-surface-container rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
<span class="material-symbols-outlined text-4xl">check_circle</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-3">Thank You for Reaching Out.</h3>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-md mx-auto mb-8">
          We’ve received your enquiry and will be in touch to discuss the next steps.
        </p>
<button class="bg-primary hover:bg-primary-container text-on-primary px-8 py-3 rounded-lg font-label-md text-label-md transition-colors" id="modal-finish-btn" type="button">
          Return to Page
        </button>
</div>
</div>
</div>
<script>
    (function() {
      const modal = document.getElementById('page-consultation-modal');
      const modalBox = document.getElementById('modal-box');
      const closeBtn = document.getElementById('close-modal-btn');
      const form = document.getElementById('consultation-form');
      const formContainer = document.getElementById('modal-form-container');
      const successContainer = document.getElementById('modal-success-container');
      const finishBtn = document.getElementById('modal-finish-btn');
      let triggerElement = null;

      function openModal(trigger) {
        triggerElement = trigger;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        setTimeout(() => {
          const firstInput = document.getElementById('form-fullname');
          if (firstInput && !formContainer.classList.contains('hidden')) {
            firstInput.focus();
          }
        }, 100);
      }

      function closeModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
        if (triggerElement) {
          triggerElement.focus();
        }
      }

      // Universal CTA handler
      document.addEventListener('click', function(e) {
        const targetBtn = e.target.closest('button, a');
        if (!targetBtn) return;

        const isModalTrigger = targetBtn.getAttribute('data-open-modal') === 'consultation' ||
          targetBtn.getAttribute('onclick')?.includes('consultation-modal') ||
          targetBtn.innerText?.includes('Talk to Max & Mara') ||
          targetBtn.innerText?.includes("Let's Talk Channel Growth") ||
          targetBtn.innerText?.includes("Discuss Your Channel Challenges") ||
          targetBtn.innerText?.includes("Request a Consultation") ||
          targetBtn.innerText?.includes("Schedule Strategic Briefing");

        if (isModalTrigger && !targetBtn.closest('#page-consultation-modal')) {
          e.preventDefault();
          e.stopPropagation();
          openModal(targetBtn);
        }
      });

      closeBtn.addEventListener('click', closeModal);
      if (finishBtn) finishBtn.addEventListener('click', closeModal);

      modal.addEventListener('click', function(e) {
        if (!modalBox.contains(e.target)) {
          closeModal();
        }
      });

      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
          closeModal();
        }
      });

      // Accessible Tab Key Focus Trapping
      modal.addEventListener('keydown', function(e) {
        if (e.key !== 'Tab') return;
        const focusableElements = modalBox.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
        if (focusableElements.length === 0) return;
        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];

        if (e.shiftKey) {
          if (document.activeElement === firstElement) {
            lastElement.focus();
            e.preventDefault();
          }
        } else {
          if (document.activeElement === lastElement) {
            firstElement.focus();
            e.preventDefault();
          }
        }
      });

      // Form validation & submission
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;

        const fullName = document.getElementById('form-fullname');
        const email = document.getElementById('form-email');
        const company = document.getElementById('form-company');
        const title = document.getElementById('form-title');
        const topic = document.getElementById('form-topic');
        const privacy = document.getElementById('form-privacy');

        function checkField(elem, errElem, condition) {
          if (!condition) {
            errElem.classList.remove('hidden');
            isValid = false;
          } else {
            errElem.classList.add('hidden');
          }
        }

        checkField(fullName, document.getElementById('err-fullname'), fullName.value.trim().length > 1);
        checkField(email, document.getElementById('err-email'), email.value.trim().includes('@') && email.value.includes('.'));
        checkField(company, document.getElementById('err-company'), company.value.trim().length > 0);
        checkField(title, document.getElementById('err-title'), title.value.trim().length > 0);
        checkField(topic, document.getElementById('err-topic'), topic.value !== '');
        checkField(privacy, document.getElementById('err-privacy'), privacy.checked);

        if (isValid) {
          formContainer.classList.add('hidden');
          successContainer.classList.remove('hidden');
        }
      });
    })();
  </script>
</div>
@endsection