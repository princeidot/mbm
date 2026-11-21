@extends('layouts.app')

@section('title', 'MBM - Global Reusable Modal Components Design System')

@section('content')
<!-- ============================================================== -->
    <!-- SECTION 1: MODAL 1 - CONSULTATION & GENERAL ENQUIRY            -->
    <!-- ============================================================== -->
    <section id="modal-1-overview" class="space-y-6">
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-brand-border pb-4">
        <div>
          <div class="text-xs uppercase font-bold tracking-widest text-brand-champagne mb-1 font-heading">COMPONENT 01</div>
          <h2 class="text-2xl font-heading font-bold text-brand-navy">Modal 1: Consultation & General Enquiry</h2>
          <p class="text-sm text-brand-charcoalLight mt-1">Universal lead capture modal triggered by "Talk to Max & Mara", "Book a Growth Consultation", and service inquiries.</p>
        </div>
        <div class="flex items-center gap-2">
          <button onclick="openModal('consultation-modal')" class="px-4 py-2 bg-brand-blue text-white rounded text-xs font-semibold hover:bg-brand-blueHover transition">
            Launch Live Modal 1
          </button>
        </div>
      </div>

      <!-- Live Static Blueprint View of Modal 1 -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left: Desktop Render Card (Full Spec Display) -->
        <div class="lg:col-span-8 bg-white rounded-xl shadow-xl border border-brand-border overflow-hidden">
          <div class="bg-brand-navy p-6 md:p-8 text-white relative">
            <div class="flex items-center justify-between">
              <div>
                <span class="text-xs uppercase tracking-widest font-semibold text-brand-champagne">DIRECT ADVISORY ACCESS</span>
                <h3 class="text-2xl font-heading font-bold tracking-tight text-white mt-1">Let's Talk About Your Channel.</h3>
              </div>
              <div class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 border border-white/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
              </div>
            </div>
            <p class="text-sm text-brand-ivory/80 mt-2 max-w-xl leading-relaxed">
              Tell us a little about your business and the challenges you're looking to solve. We'll take the conversation from there.
            </p>
            <!-- Originating Context Pill -->
            <div class="mt-4 inline-flex items-center gap-2 px-3 py-1 bg-white/10 rounded-full text-[11px] text-brand-champagne border border-brand-champagne/30">
              <span class="w-1.5 h-1.5 rounded-full bg-brand-champagne"></span>
              Originating Context: <span class="font-medium text-white">Channel Growth Consultation (/channel-growth-consultation/)</span>
            </div>
          </div>

          <!-- Form Body -->
          <div class="p-6 md:p-8 space-y-5 bg-white">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label class="block text-xs font-semibold text-brand-charcoal uppercase tracking-wider mb-1.5">
                  Full Name <span class="text-brand-champagne">*</span>
                </label>
                <input type="text" value="David Vance" readonly class="w-full text-sm px-3.5 py-2.5 bg-brand-ivory/40 border border-brand-border rounded focus-ring text-brand-navy">
              </div>
              <div>
                <label class="block text-xs font-semibold text-brand-charcoal uppercase tracking-wider mb-1.5">
                  Work Email <span class="text-brand-champagne">*</span>
                </label>
                <input type="email" value="david.vance@enterprise-tech.com" readonly class="w-full text-sm px-3.5 py-2.5 bg-brand-ivory/40 border border-brand-border rounded focus-ring text-brand-navy">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label class="block text-xs font-semibold text-brand-charcoal uppercase tracking-wider mb-1.5">
                  Company Name <span class="text-brand-champagne">*</span>
                </label>
                <input type="text" value="Delta Global Infrastructure" readonly class="w-full text-sm px-3.5 py-2.5 bg-brand-ivory/40 border border-brand-border rounded focus-ring text-brand-navy">
              </div>
              <div>
                <label class="block text-xs font-semibold text-brand-charcoal uppercase tracking-wider mb-1.5">
                  Job Title <span class="text-brand-champagne">*</span>
                </label>
                <input type="text" value="VP Global Partner Programs" readonly class="w-full text-sm px-3.5 py-2.5 bg-brand-ivory/40 border border-brand-border rounded focus-ring text-brand-navy">
              </div>
            </div>

            <div>
              <label class="block text-xs font-semibold text-brand-charcoal uppercase tracking-wider mb-1.5">
                What Would You Like to Discuss? <span class="text-brand-champagne">*</span>
              </label>
              <select disabled class="w-full text-sm px-3.5 py-2.5 bg-brand-ivory/40 border border-brand-border rounded focus-ring text-brand-navy font-medium">
                <option selected>Channel Marketing Strategy</option>
                <option>Partner Enablement</option>
                <option>Partner Education & Training</option>
                <option>Partner Activation & Engagement</option>
                <option>Through-Channel Demand Generation</option>
                <option>MDF & Channel Performance</option>
                <option>General Enquiry</option>
                <option>Not Sure Yet</option>
              </select>
            </div>

            <div>
              <label class="block text-xs font-semibold text-brand-charcoal uppercase tracking-wider mb-1.5">
                Tell Us More <span class="text-gray-400 font-normal lowercase">(optional)</span>
              </label>
              <textarea rows="3" readonly class="w-full text-sm px-3.5 py-2.5 bg-brand-ivory/40 border border-brand-border rounded focus-ring text-brand-navy resize-none">We are reviewing our EMEA tier-1 distributor enablement playbooks and need to improve sell-through velocity across cloud security offerings.</textarea>
            </div>

            <div class="pt-2">
              <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" checked disabled class="mt-1 h-4 w-4 rounded border-brand-border text-brand-blue focus:ring-brand-blue">
                <span class="text-xs text-brand-charcoalLight leading-relaxed">
                  I agree to the <a href="#" class="text-brand-blue underline font-medium">Privacy Policy</a> and consent to Maximize Business Marketing storing my submission to facilitate this consultation.
                </span>
              </label>
            </div>

            <div class="pt-4 border-t border-brand-border flex flex-col sm:flex-row items-center justify-between gap-4">
              <div class="text-[11px] text-brand-charcoalLight flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-brand-champagne" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                Commercial confidentiality guaranteed. No unverified third-party sharing.
              </div>
              <button class="w-full sm:w-auto px-6 py-3 bg-brand-blue text-white rounded font-heading font-semibold text-sm shadow-md hover:bg-brand-blueHover transition flex items-center justify-center gap-2">
                <span>Start the Conversation</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Right: Mobile View & Parameter Specifications -->
        <div class="lg:col-span-4 space-y-6">
          
          <!-- Mobile Screen Simulation -->
          <div class="bg-brand-navyDeep p-3 rounded-2xl shadow-xl border border-brand-border max-w-[340px] mx-auto lg:max-w-none">
            <div class="text-center text-[10px] text-brand-champagne font-mono mb-2 uppercase tracking-widest flex items-center justify-center gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-brand-champagne"></span> Mobile Modal Blueprint (390px)
            </div>
            <div class="bg-white rounded-xl overflow-hidden text-brand-navy shadow-inner">
              <div class="bg-brand-navy p-4 text-white relative">
                <div class="flex justify-between items-start">
                  <span class="text-[10px] uppercase tracking-wider text-brand-champagne font-bold">CONSULTATION</span>
                  <div class="w-6 h-6 rounded-full bg-white/10 flex items-center justify-center text-white/80 text-xs">✕</div>
                </div>
                <h4 class="text-base font-heading font-bold text-white mt-1">Let's Talk About Your Channel.</h4>
                <p class="text-[11px] text-brand-ivory/80 mt-1">Tell us a little about your business...</p>
              </div>
              <div class="p-4 space-y-3 text-xs">
                <div>
                  <label class="block text-[10px] font-bold uppercase text-brand-charcoal mb-1">Full Name *</label>
                  <input type="text" placeholder="Your name" class="w-full text-xs p-2 bg-brand-ivory/50 border border-brand-border rounded" readonly>
                </div>
                <div>
                  <label class="block text-[10px] font-bold uppercase text-brand-charcoal mb-1">Work Email *</label>
                  <input type="email" placeholder="name@company.com" class="w-full text-xs p-2 bg-brand-ivory/50 border border-brand-border rounded" readonly>
                </div>
                <div>
                  <label class="block text-[10px] font-bold uppercase text-brand-charcoal mb-1">Company & Title *</label>
                  <div class="grid grid-cols-2 gap-2">
                    <input type="text" placeholder="Company" class="w-full text-xs p-2 bg-brand-ivory/50 border border-brand-border rounded" readonly>
                    <input type="text" placeholder="Job Title" class="w-full text-xs p-2 bg-brand-ivory/50 border border-brand-border rounded" readonly>
                  </div>
                </div>
                <div>
                  <label class="block text-[10px] font-bold uppercase text-brand-charcoal mb-1">Service Area *</label>
                  <select class="w-full text-xs p-2 bg-brand-ivory/50 border border-brand-border rounded font-medium" disabled>
                    <option>Select from 6 MBM Services...</option>
                  </select>
                </div>
                <button class="w-full py-2.5 bg-brand-blue text-white rounded font-heading font-semibold text-xs mt-2 shadow">
                  Start the Conversation →
                </button>
              </div>
            </div>
          </div>

          <!-- Implementation Specification Details -->
          <div class="bg-white p-5 rounded-lg border border-brand-border text-xs space-y-3">
            <h4 class="font-heading font-bold text-brand-navy uppercase tracking-wider text-[11px] border-b border-brand-border pb-2">Technical Implementation Notes</h4>
            <ul class="space-y-2 text-brand-charcoal">
              <li class="flex items-start gap-2">
                <span class="text-brand-champagne font-bold">✓</span>
                <span><strong>Originating-page attribution:</strong> Hidden inputs capture URL path (<code class="bg-gray-100 px-1 py-0.5 rounded text-[10px]">data-originating-page</code>) and CTA trigger label.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-brand-champagne font-bold">✓</span>
                <span><strong>Accessible Focus Lock:</strong> Traps TAB navigation within dialog; ESC key dispatches close handler and returns focus to active button.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-brand-champagne font-bold">✓</span>
                <span><strong>WordPress Ready:</strong> Structured as standard form markup with secure REST endpoint action and nonces.</span>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- ============================================================== -->
    <!-- SECTION 2: MODAL 2 - CHANNEL MARKETING ASSESSMENT             -->
    <!-- ============================================================== -->
    <section id="modal-2-overview" class="space-y-6 pt-6">
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-brand-border pb-4">
        <div>
          <div class="text-xs uppercase font-bold tracking-widest text-brand-champagne mb-1 font-heading">COMPONENT 02</div>
          <h2 class="text-2xl font-heading font-bold text-brand-navy">Modal 2: Channel Marketing Assessment</h2>
          <p class="text-sm text-brand-charcoalLight mt-1">Multi-step diagnostic assessment capturing partner ecosystem structure, execution friction, and leadership contact details.</p>
        </div>
        <div class="flex items-center gap-2">
          <button onclick="openModal('assessment-modal')" class="px-4 py-2 bg-brand-navy text-white rounded text-xs font-semibold hover:bg-brand-navyDeep transition border border-brand-champagne/40">
            Launch Live Modal 2
          </button>
        </div>
      </div>

      <!-- Multi-step Architecture Breakdown -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- STEP 1 CARD -->
        <div class="bg-white rounded-xl p-6 border border-brand-border shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold uppercase tracking-wider text-brand-champagne bg-brand-navy px-2.5 py-0.5 rounded-full text-white">Stage 01</span>
              <span class="text-xs text-brand-charcoalLight font-mono">Step 1 of 3</span>
            </div>
            <h4 class="font-heading font-bold text-brand-navy text-lg">Your Channel</h4>
            <p class="text-xs text-brand-charcoalLight mt-1 mb-4">Establish organization archetype, network maturity, and primary growth friction.</p>
            
            <div class="space-y-3 text-xs">
              <div class="p-3 bg-brand-ivory/50 rounded border border-brand-border/80">
                <div class="font-semibold text-brand-navy mb-1.5">Organization Archetype:</div>
                <div class="flex gap-2">
                  <span class="px-2.5 py-1 bg-brand-navy text-white font-medium rounded text-[11px]">Vendor</span>
                  <span class="px-2.5 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[11px]">Distributor</span>
                  <span class="px-2.5 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[11px]">Other</span>
                </div>
              </div>

              <div class="p-3 bg-brand-ivory/50 rounded border border-brand-border/80">
                <div class="font-semibold text-brand-navy mb-1.5">Ecosystem Maturity:</div>
                <div class="flex gap-2">
                  <span class="px-2 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[11px]">Building</span>
                  <span class="px-2 py-1 bg-brand-navy text-white font-medium rounded text-[11px]">Growing</span>
                  <span class="px-2 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[11px]">Established</span>
                </div>
              </div>

              <div class="p-3 bg-brand-ivory/50 rounded border border-brand-border/80">
                <div class="font-semibold text-brand-navy mb-1">Core Capability Challenge:</div>
                <div class="text-[11px] text-brand-blue font-medium">Dropdown: 6 MBM Capabilities</div>
              </div>
            </div>
          </div>
          <div class="mt-4 pt-3 border-t border-brand-border text-[11px] text-brand-charcoalLight flex justify-between">
            <span>Validation: Required selection</span>
            <span class="font-semibold text-brand-navy">Next Step →</span>
          </div>
        </div>

        <!-- STEP 2 CARD -->
        <div class="bg-white rounded-xl p-6 border border-brand-border shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold uppercase tracking-wider text-brand-champagne bg-brand-navy px-2.5 py-0.5 rounded-full text-white">Stage 02</span>
              <span class="text-xs text-brand-charcoalLight font-mono">Step 2 of 3</span>
            </div>
            <h4 class="font-heading font-bold text-brand-navy text-lg">Current Execution</h4>
            <p class="text-xs text-brand-charcoalLight mt-1 mb-4">Evaluate partner participation consistency, seller readiness, and measurement clarity.</p>

            <div class="space-y-3 text-xs">
              <div class="p-3 bg-brand-ivory/50 rounded border border-brand-border/80">
                <div class="font-semibold text-brand-navy mb-1">Partner Program Participation:</div>
                <div class="grid grid-cols-2 gap-1.5 mt-1">
                  <span class="px-2 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[10px] text-center">Rarely</span>
                  <span class="px-2 py-1 bg-brand-navy text-white font-medium rounded text-[10px] text-center">Sometimes</span>
                  <span class="px-2 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[10px] text-center">Consistently</span>
                  <span class="px-2 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[10px] text-center">Not Sure</span>
                </div>
              </div>

              <div class="p-3 bg-brand-ivory/50 rounded border border-brand-border/80">
                <div class="font-semibold text-brand-navy mb-1">Partner Readiness to Sell:</div>
                <div class="grid grid-cols-2 gap-1.5 mt-1">
                  <span class="px-2 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[10px] text-center">Limited</span>
                  <span class="px-2 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[10px] text-center">Developing</span>
                  <span class="px-2 py-1 bg-brand-navy text-white font-medium rounded text-[10px] text-center">Strong</span>
                  <span class="px-2 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[10px] text-center">Not Sure</span>
                </div>
              </div>

              <div class="p-3 bg-brand-ivory/50 rounded border border-brand-border/80">
                <div class="font-semibold text-brand-navy mb-1">Measurement Visibility:</div>
                <div class="flex gap-1.5 mt-1">
                  <span class="px-1.5 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[10px]">Limited</span>
                  <span class="px-1.5 py-1 bg-brand-navy text-white font-medium rounded text-[10px]">Partial</span>
                  <span class="px-1.5 py-1 bg-white border border-brand-border text-brand-charcoal rounded text-[10px]">Clear</span>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-4 pt-3 border-t border-brand-border text-[11px] text-brand-charcoalLight flex justify-between">
            <span class="font-semibold text-brand-charcoal">← Back</span>
            <span class="font-semibold text-brand-navy">Next Step →</span>
          </div>
        </div>

        <!-- STEP 3 CARD -->
        <div class="bg-white rounded-xl p-6 border border-brand-border shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[11px] font-bold uppercase tracking-wider text-brand-champagne bg-brand-navy px-2.5 py-0.5 rounded-full text-white">Stage 03</span>
              <span class="text-xs text-brand-charcoalLight font-mono">Step 3 of 3</span>
            </div>
            <h4 class="font-heading font-bold text-brand-navy text-lg">Your Details & Follow-up</h4>
            <p class="text-xs text-brand-charcoalLight mt-1 mb-4">Enterprise leadership credentials for strategic analysis and consultation routing.</p>

            <div class="space-y-2.5 text-xs">
              <div class="p-2 bg-brand-ivory/40 rounded border border-brand-border">
                <span class="text-[10px] font-bold uppercase text-brand-charcoal block">Full Name & Work Email</span>
                <span class="text-brand-navy font-medium">David Vance | d.vance@company.com</span>
              </div>
              <div class="p-2 bg-brand-ivory/40 rounded border border-brand-border">
                <span class="text-[10px] font-bold uppercase text-brand-charcoal block">Company & Job Title</span>
                <span class="text-brand-navy font-medium">Enterprise Tech Corp | VP Partner Programs</span>
              </div>
              <div class="p-2 bg-brand-ivory/40 rounded border border-brand-border">
                <span class="text-[10px] font-bold uppercase text-brand-charcoal block">Optional Strategic Context</span>
                <span class="text-gray-500 italic text-[11px]">"Need objective evaluation of MDF ROI..."</span>
              </div>
              <div class="p-2 bg-brand-ivory/40 rounded border border-brand-border flex items-center gap-2">
                <input type="checkbox" checked disabled class="h-3.5 w-3.5 text-brand-blue rounded">
                <span class="text-[10px] text-brand-charcoalLight">Privacy policy consent verified</span>
              </div>
            </div>
          </div>
          <div class="mt-4 pt-3 border-t border-brand-border text-[11px] text-brand-charcoalLight flex justify-between items-center">
            <span class="font-semibold text-brand-charcoal">← Back</span>
            <span class="px-3 py-1 bg-brand-navy text-white rounded text-[11px] font-semibold border border-brand-champagne/40">Submit My Assessment</span>
          </div>
        </div>

      </div>
    </section>

    <!-- ============================================================== -->
    <!-- SECTION 3: STATE EXPLORER (Validation, Loading, Error, Success) -->
    <!-- ============================================================== -->
    <section id="state-explorer" class="space-y-6 pt-6 border-t border-brand-border">
      <div class="border-b border-brand-border pb-4">
        <div class="text-xs uppercase font-bold tracking-widest text-brand-champagne mb-1 font-heading">STATE ARCHITECTURE</div>
        <h2 class="text-2xl font-heading font-bold text-brand-navy">Component State Specifications</h2>
        <p class="text-sm text-brand-charcoalLight mt-1">Precise visual representations of Field Validation, Server Loading, Network Failure, and Verified Lead Submission.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- STATE 1: Validation Error State -->
        <div class="bg-white rounded-lg p-5 border-2 border-red-300 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[10px] font-bold uppercase tracking-wider text-red-700 bg-red-50 px-2 py-0.5 rounded border border-red-200">State: Validation Error</span>
            </div>
            <h4 class="font-heading font-bold text-brand-navy text-sm">Inline Form Validation</h4>
            <p class="text-xs text-brand-charcoalLight mt-1 mb-4">Triggered on invalid email syntax or required empty fields.</p>

            <div class="space-y-3 text-xs">
              <div>
                <label class="block text-[10px] font-bold uppercase text-brand-charcoal mb-1">Work Email *</label>
                <input type="text" value="david.vance@" class="w-full text-xs px-3 py-2 bg-red-50/50 border border-red-400 rounded text-red-900 focus:outline-none focus:ring-1 focus:ring-red-400" readonly>
                <span class="text-[10px] text-red-600 font-medium mt-1 flex items-center gap-1">
                  <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Please enter a valid work email address.
                </span>
              </div>
              <div>
                <label class="block text-[10px] font-bold uppercase text-brand-charcoal mb-1">Company Name *</label>
                <input type="text" value="" placeholder="Required field" class="w-full text-xs px-3 py-2 bg-red-50/50 border border-red-400 rounded text-red-900" readonly>
                <span class="text-[10px] text-red-600 font-medium mt-1 block">Company name is required.</span>
              </div>
            </div>
          </div>
          <div class="mt-4 pt-3 border-t border-brand-border text-[11px] text-brand-charcoalLight">
            Non-blocking focus management.
          </div>
        </div>

        <!-- STATE 2: Loading State -->
        <div class="bg-white rounded-lg p-5 border border-brand-border shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[10px] font-bold uppercase tracking-wider text-brand-blue bg-blue-50 px-2 py-0.5 rounded border border-blue-200">State: Submission In Flight</span>
            </div>
            <h4 class="font-heading font-bold text-brand-navy text-sm">Server Processing</h4>
            <p class="text-xs text-brand-charcoalLight mt-1 mb-4">Disables inputs, prevents duplicate submissions, renders spinner.</p>

            <div class="py-6 flex flex-col items-center justify-center space-y-3 bg-brand-ivory/40 rounded border border-brand-border">
              <div class="w-8 h-8 border-3 border-brand-navy border-t-brand-champagne rounded-full animate-spin"></div>
              <span class="text-xs font-semibold text-brand-navy">Processing your enquiry...</span>
              <span class="text-[10px] text-brand-charcoalLight">Connecting to enterprise router</span>
            </div>
          </div>
          <div class="mt-4 pt-3 border-t border-brand-border text-[11px] text-brand-charcoalLight">
            Form inputs locked during request.
          </div>
        </div>

        <!-- STATE 3: Genuine Error State -->
        <div class="bg-white rounded-lg p-5 border border-brand-border shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[10px] font-bold uppercase tracking-wider text-amber-800 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">State: Network Fault</span>
            </div>
            <h4 class="font-heading font-bold text-brand-navy text-sm">Transmission Fault</h4>
            <p class="text-xs text-brand-charcoalLight mt-1 mb-4">Displays authentic fallback notice without losing user-entered text.</p>

            <div class="p-3 bg-red-50 border border-red-200 rounded text-xs space-y-2">
              <div class="flex items-center gap-1.5 text-red-800 font-bold">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                Unable to submit request
              </div>
              <p class="text-[11px] text-red-700 leading-relaxed">
                A connection error occurred. Please verify your network and click retry. Your form entries have been preserved.
              </p>
              <button class="px-2.5 py-1 bg-red-700 hover:bg-red-800 text-white rounded text-[10px] font-medium transition">
                Retry Submission
              </button>
            </div>
          </div>
          <div class="mt-4 pt-3 border-t border-brand-border text-[11px] text-brand-charcoalLight">
            Preserves state on modal reopen.
          </div>
        </div>

        <!-- STATE 4: Genuine Success State -->
        <div class="bg-white rounded-lg p-5 border-2 border-emerald-300 shadow-sm flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">State: Verified Success</span>
            </div>
            <h4 class="font-heading font-bold text-brand-navy text-sm">Submission Confirmation</h4>
            <p class="text-xs text-brand-charcoalLight mt-1 mb-4">Clear follow-up guidance without fabricated diagnostic reports.</p>

            <div class="p-3.5 bg-emerald-50/70 border border-emerald-200 rounded text-xs space-y-2">
              <div class="w-6 h-6 rounded-full bg-emerald-600 text-white flex items-center justify-center mx-auto mb-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <div class="font-heading font-bold text-brand-navy text-center text-xs">Thank You for Reaching Out.</div>
              <p class="text-[11px] text-brand-charcoal text-center leading-relaxed">
                We've received your enquiry and will be in touch to discuss the next steps.
              </p>
            </div>
          </div>
          <div class="mt-4 pt-3 border-t border-brand-border text-[11px] text-brand-charcoalLight">
            No fake scores or instant reports.
          </div>
        </div>

      </div>
    </section>
@endsection