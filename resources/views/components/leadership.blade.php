{{-- resources/views/components/leadership.blade.php --}}
<section id="leadership" class="scroll-mt-[72px] py-24 md:py-[120px] px-[5%] bg-navy">
    <div class="max-w-[1300px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

        {{-- Profile Card --}}
        <div class="bg-white/[0.03] border border-white/[0.08] rounded-md overflow-hidden">
            <div class="p-10 text-center relative"
                 style="background: linear-gradient(135deg, #0a1628, rgba(26,111,196,0.3))">
                <div class="w-[100px] h-[100px] rounded-full bg-blue border-[3px] border-white/15 mx-auto mb-4 flex items-center justify-center font-condensed text-[36px] font-bold text-white">
                    AN
                </div>
                <div class="font-condensed text-[26px] font-bold uppercase tracking-[0.04em] mb-1.5">Eng. Ahmed Nada</div>
                <div class="text-xs tracking-[0.2em] uppercase text-sky">Owner · Managing Director</div>
            </div>
            <div class="px-10 py-8">
                @foreach([
                    ['label' => 'Education',   'value' => 'B.Sc. Architectural Engineering, Mansoura University (2002)'],
                    ['label' => 'Experience',  'value' => '20+ Years in Construction'],
                    ['label' => 'Regions',     'value' => 'UAE &amp; Egypt'],
                ] as $detail)
                <div class="flex items-start gap-3.5 py-3 {{ !$loop->last ? 'border-b border-white/[0.06]' : '' }} text-sm">
                    <span class="text-gray-mid text-xs font-semibold tracking-[0.1em] uppercase min-w-[100px]">
                        {{ $detail['label'] }}
                    </span>
                    <span class="text-white">{!! $detail['value'] !!}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Bio --}}
        <div>
            <div class="inline-flex items-center gap-2.5 mb-4">
                <div class="w-8 h-0.5 bg-gold"></div>
                <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gold">Leadership</span>
            </div>
            <h2 class="font-condensed font-bold uppercase tracking-[0.02em] leading-none mb-6"
                style="font-size: clamp(36px, 5vw, 58px)">
                Two Decades of<br>Construction Mastery
            </h2>
            <p class="text-base leading-[1.85] text-steel mb-5">
                Eng. Ahmed Mohamed Nada brings over 20 years of hands-on construction experience to Swift Atlantis. A graduate
                of Mansoura University's Faculty of Engineering (Architectural Engineering, 2002), he has progressed through every
                engineering stage — from site observation and supervision to full project contracting and consultancy.
            </p>
            <p class="text-base leading-[1.85] text-steel mb-8">
                His portfolio spans luxury resorts, high-rise residential towers, hospitals, factories, and retail complexes
                across the UAE and Egypt — serving prestigious clients and working under major development groups including
                Travco Group.
            </p>
            <div class="flex flex-wrap gap-2">
                @foreach([
                    'Site Supervision', 'Project Management', 'Structural Engineering', 'Consultancy',
                    'UAE Regulations', 'Luxury Hospitality', 'High-Rise Construction', 'Healthcare Facilities',
                ] as $skill)
                <span class="px-4 py-1.5 border border-sky/25 rounded-sm text-[11px] font-semibold tracking-[0.1em] uppercase text-sky bg-sky/[0.06]">
                    {{ $skill }}
                </span>
                @endforeach
            </div>
        </div>

    </div>
</section>
