{{-- resources/views/components/about.blade.php --}}
<section id="about" class="scroll-mt-[72px] py-24 md:py-[120px] px-[5%] bg-navy">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center max-w-[1300px] mx-auto">

        {{-- Text Column --}}
        <div>
            <div class="inline-flex items-center gap-2.5 mb-4">
                <div class="w-8 h-0.5 bg-gold"></div>
                <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gold">About Us</span>
            </div>
            <h2 class="font-condensed font-bold uppercase tracking-[0.02em] leading-none mb-6"
                style="font-size: clamp(36px, 5vw, 58px)">
                Built on Trust,<br>Delivered with Precision
            </h2>
            <p class="text-base leading-[1.85] text-steel mb-5">
                Swift Atlantis Contracting L.L.C was established on 15th September 2022 under Commercial License No. 1080914,
                approved by the Dubai Economic Department and Dubai Municipality.
            </p>
            <p class="text-base leading-[1.85] text-steel mb-5">
                We are licensed to carry out integrated construction works as a main contractor — from excavations through to
                handover of building completion certificates — with approved scope for G+1 and complex multi-storey structures.
            </p>
            <p class="text-base leading-[1.85] text-steel mb-10">
                Our approach combines rigorous compliance with local authority regulations, an unwavering commitment to safety
                and quality, and on-time delivery aligned with project programs and consultant directives.
            </p>

            {{-- Info Grid --}}
            <div class="grid grid-cols-2 gap-px bg-white/[0.06] rounded overflow-hidden">
                @foreach([
                    ['label' => 'Legal Type',    'value' => 'LLC (Single Owner)'],
                    ['label' => 'Established',   'value' => 'September 2022'],
                    ['label' => 'Activity',      'value' => 'Building Contracting'],
                    ['label' => 'Jurisdiction',  'value' => 'Dubai, UAE'],
                ] as $item)
                <div class="bg-white/[0.03] p-5">
                    <div class="text-[10px] font-semibold tracking-[0.25em] uppercase text-gray-mid mb-1.5">
                        {{ $item['label'] }}
                    </div>
                    <div class="text-[15px] font-semibold text-white">{{ $item['value'] }}</div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Image Column --}}
        <div class="relative h-[360px] sm:h-[440px] lg:h-[500px]">
            <div class="about-img-main absolute top-0 left-0 w-4/5 h-4/5 rounded"></div>
            <div class="about-img-accent absolute bottom-0 right-0 w-[55%] h-[55%] rounded border-4 border-navy"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-blue px-5 py-4 rounded border-[3px] border-navy text-center z-10">
                <div class="font-condensed text-[40px] font-extrabold text-white leading-none">G+1</div>
                <div class="text-[10px] tracking-[0.15em] uppercase text-sky">Approved Scope</div>
            </div>
        </div>

    </div>
</section>
