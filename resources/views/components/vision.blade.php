{{-- resources/views/components/vision.blade.php --}}
<section id="vision" class="scroll-mt-[72px] py-24 md:py-[120px] px-[5%] bg-navy-mid relative overflow-hidden">

    {{-- Decorative rings --}}
    <div class="absolute -top-40 -left-40 w-[600px] h-[600px] rounded-full pointer-events-none"
         style="background: radial-gradient(circle, rgba(26,111,196,0.08) 0%, transparent 65%)"></div>
    <div class="absolute -right-40 w-[500px] h-[500px] rounded-full pointer-events-none"
         style="background: radial-gradient(circle, rgba(201,168,76,0.07) 0%, transparent 65%)"></div>

    <div class="max-w-[1300px] mx-auto relative z-10">

        {{-- Header --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2.5 mb-4">
                <div class="w-8 h-0.5 bg-gold"></div>
                <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gold">Our Foundation</span>
                <div class="w-8 h-0.5 bg-gold"></div>
            </div>
            <h2 class="font-condensed font-bold uppercase tracking-[0.02em] leading-none"
                style="font-size: clamp(36px, 5vw, 58px)">Vision, Aims &amp; Values</h2>
        </div>

        {{-- Aims & Message Banner --}}
        <div class="rounded-md overflow-hidden mb-10"
             style="background: linear-gradient(135deg, rgba(26,111,196,0.18) 0%, rgba(10,22,40,0.9) 100%); border: 1px solid rgba(79,179,232,0.2)">
            <div class="grid grid-cols-1 lg:grid-cols-5">
                <div class="lg:col-span-2 relative min-h-[220px] lg:min-h-0 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80"
                         alt="construction"
                         class="absolute inset-0 w-full h-full object-cover opacity-40">
                    <div class="absolute inset-0"
                         style="background: linear-gradient(90deg, transparent 0%, rgba(17,34,68,0.95) 100%)"></div>
                    <div class="relative z-10 flex flex-col justify-center h-full p-10">
                        <div class="font-condensed text-[64px] font-extrabold leading-none text-white/10 select-none">AIMS</div>
                        <div class="font-condensed text-[28px] font-bold uppercase text-white leading-tight mt-2">
                            Our Aims<br>&amp; Message
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-3 p-10 flex flex-col justify-center">
                    <p class="text-[15px] leading-[1.85] text-steel">
                        To practice contracting activity in accordance with all laws and authority procedures of local governments,
                        with full commitment to safety and health instructions for construction sites, and observing quality and
                        control to implement facilities that conform to project specifications — in accordance with municipal and
                        competent authority instructions — till delivering projects on time as per project programs, aligned with
                        consultants' and owners' directives regarding performance quality and efficiency of works.
                    </p>
                </div>
            </div>
        </div>

        {{-- Vision + Mission Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

            {{-- Vision Card --}}
            <div class="vision-card rounded-md p-10 border border-white/[0.08]"
                 style="background: linear-gradient(135deg, rgba(10,22,40,0.9), rgba(17,34,68,0.7))">
                <div class="w-[52px] h-[52px] rounded-full flex items-center justify-center mb-6"
                     style="background: linear-gradient(135deg, #1a6fc4, #4fb3e8)">
                    <svg class="w-6 h-6 fill-none stroke-white" stroke-width="1.5" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                        <line x1="2" y1="12" x2="22" y2="12"/>
                    </svg>
                </div>
                <div class="inline-flex items-center gap-2 mb-3">
                    <div class="w-6 h-0.5 bg-sky"></div>
                    <span class="text-[10px] font-semibold tracking-[0.25em] uppercase text-sky">Vision</span>
                </div>
                <h3 class="font-condensed text-[26px] font-bold uppercase mb-4 text-white">
                    To Be the UAE's Most Trusted Contractor
                </h3>
                <p class="text-[14px] leading-[1.8] text-steel">
                    To be recognized as a leading, reliable, and innovative contracting company in the UAE — setting the benchmark
                    for construction quality, regulatory compliance, and client satisfaction across every project we undertake.
                </p>
            </div>

            {{-- Mission Card --}}
            <div class="vision-card rounded-md p-10 border border-white/[0.08]"
                 style="background: linear-gradient(135deg, rgba(10,22,40,0.9), rgba(17,34,68,0.7))">
                <div class="w-[52px] h-[52px] rounded-full flex items-center justify-center mb-6"
                     style="background: linear-gradient(135deg, #c9a84c, #e8c96b)">
                    <svg class="w-6 h-6 fill-none stroke-white" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                </div>
                <div class="inline-flex items-center gap-2 mb-3">
                    <div class="w-6 h-0.5 bg-gold"></div>
                    <span class="text-[10px] font-semibold tracking-[0.25em] uppercase text-gold">Mission</span>
                </div>
                <h3 class="font-condensed text-[26px] font-bold uppercase mb-4 text-white">
                    Deliver Excellence from Ground to Handover
                </h3>
                <p class="text-[14px] leading-[1.8] text-steel">
                    To deliver fully integrated construction solutions — from excavation to completion certificate — through
                    disciplined project management, skilled workforce, and an unwavering commitment to safety, quality,
                    and on-schedule delivery.
                </p>
            </div>
        </div>

        {{-- Core Values --}}
        <div>
            <div class="text-center mb-8">
                <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gray-mid">Core Values</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                @foreach([
                    [
                        'label' => 'Quality',
                        'desc'  => 'Uncompromising standards at every phase',
                        'icon'  => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/><path d="m9 8 2 2 4-4"/>',
                    ],
                    [
                        'label' => 'Safety',
                        'desc'  => 'HSE compliance on every site, every day',
                        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>',
                    ],
                    [
                        'label' => 'Integrity',
                        'desc'  => 'Transparent dealings with every stakeholder',
                        'icon'  => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>',
                    ],
                    [
                        'label' => 'Timeliness',
                        'desc'  => 'Projects delivered on schedule, every time',
                        'icon'  => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
                    ],
                    [
                        'label' => 'Innovation',
                        'desc'  => 'Modern methods and engineering solutions',
                        'icon'  => '<path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 0 1 7 7c0 2.38-1.19 4.47-3 5.74V17H8v-2.26C6.19 13.47 5 11.38 5 9a7 7 0 0 1 7-7z"/>',
                    ],
                    [
                        'label' => 'Compliance',
                        'desc'  => 'Full adherence to Dubai Municipality rules',
                        'icon'  => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>',
                    ],
                ] as $value)
                <div class="value-pill rounded-md p-5 text-center cursor-default">
                    <div class="flex justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            {!! $value['icon'] !!}
                        </svg>
                    </div>
                    <div class="font-condensed text-[15px] font-bold uppercase tracking-[0.06em] text-white mb-1">
                        {{ $value['label'] }}
                    </div>
                    <div class="text-[11px] text-gray-mid leading-[1.4]">{{ $value['desc'] }}</div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
