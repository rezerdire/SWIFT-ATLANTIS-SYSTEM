{{-- resources/views/components/hero.blade.php --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="hero-bg absolute inset-0"></div>
    <div class="grid-overlay absolute inset-0"></div>
    <div class="absolute bottom-0 left-0 right-0 h-[3px]"
         style="background: linear-gradient(90deg, transparent, #1a6fc4, #4fb3e8, #c9a84c, transparent)"></div>

    {{-- Main Content --}}
    <div class="relative z-10 px-[5%] pt-[120px] pb-20 max-w-[900px] w-full">

        <div class="animate-fade-up-1 inline-flex items-center gap-2.5 mb-7">
            <div class="w-10 h-0.5 bg-gold"></div>
            <span class="text-[11px] font-semibold tracking-[0.3em] uppercase text-gold">Building Excellence in the UAE</span>
        </div>

        <h1 class="animate-fade-up-2 font-condensed font-extrabold uppercase leading-[0.92] tracking-[-0.01em] mb-7"
            style="font-size: clamp(52px, 9vw, 100px)">
            Swift<br>
            <span class="text-sky">Atlantis</span><br>
            Contracting
        </h1>

        <p class="animate-fade-up-3 text-[18px] font-light leading-[1.7] text-steel max-w-[560px] mb-12">
            A Dubai-based general contracting company delivering integrated construction solutions — from excavation to handover — with precision, quality, and trust.
        </p>

        <div class="animate-fade-up-4 flex flex-wrap gap-4">
            <a href="#projects"
               class="rounded-lg inline-flex items-center gap-2 bg-blue text-white px-8 py-3.5 rounded-sm text-[13px] font-semibold tracking-[0.1em] uppercase no-underline hover:bg-blue-light hover:-translate-y-px transition-all">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7"/>
                    <rect x="14" y="3" width="7" height="7"/>
                    <rect x="14" y="14" width="7" height="7"/>
                    <rect x="3" y="14" width="7" height="7"/>
                </svg>
                View Projects
            </a>
            <a href="#contact"
               class="rounded-lg inline-flex items-center gap-2 bg-transparent text-white px-8 py-3.5 rounded-sm border border-white/25 text-[13px] font-semibold tracking-[0.1em] uppercase no-underline hover:border-sky hover:text-sky transition-all">
                Get In Touch →
            </a>
        </div>
    </div>

    {{-- Desktop Stats Panel --}}
    <div class="animate-fade-up-5 absolute right-[5%] bottom-20 z-10 border border-white/10 rounded overflow-hidden backdrop-blur-md bg-navy/60 hidden sm:flex flex-col">
        @foreach([
            ['value' => '20+',  'label' => 'Years Experience'],
            ['value' => '24+',  'label' => 'Projects Delivered'],
            ['value' => '2022', 'label' => 'Est. Dubai, UAE'],
        ] as $stat)
        <div class="px-7 py-5 {{ !$loop->last ? 'border-b border-white/[0.08]' : '' }} text-center">
            <div class="font-condensed text-[36px] font-bold text-gold-light leading-none mb-1">{{ $stat['value'] }}</div>
            <div class="text-[10px] font-normal tracking-[0.2em] uppercase text-gray-mid">{{ $stat['label'] }}</div>
        </div>
        @endforeach
    </div>

    {{-- Mobile Stats Row --}}
    <div class="absolute bottom-1 left-[5%] right-[5%] flex gap-3 sm:hidden z-10">
        @foreach([
            ['value' => '20+',  'label' => 'Yrs Exp.'],
            ['value' => '24+',  'label' => 'Projects'],
            ['value' => '2022', 'label' => 'Est. UAE'],
        ] as $stat)
        <div class="flex-1 bg-navy/70 backdrop-blur-sm border border-white/10 rounded p-3 text-center">
            <div class="font-condensed text-2xl font-bold text-gold-light">{{ $stat['value'] }}</div>
            <div class="text-[9px] tracking-widest uppercase text-gray-mid">{{ $stat['label'] }}</div>
        </div>
        @endforeach
    </div>
</section>
