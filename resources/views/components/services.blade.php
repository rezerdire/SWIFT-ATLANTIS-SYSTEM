{{-- resources/views/components/services.blade.php --}}
<section id="services" class="scroll-mt-[72px] clip-services bg-navy-mid px-[5%] pb-[160px] pt-[80px] -my-10">
    <div class="max-w-[1300px] mx-auto">

        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-14 gap-4">
            <div>
                <div class="inline-flex items-center gap-2.5 mb-4">
                    <div class="w-8 h-0.5 bg-gold"></div>
                    <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gold">What We Do</span>
                </div>
                <h2 class="font-condensed font-bold uppercase tracking-[0.02em] leading-none"
                    style="font-size: clamp(36px, 5vw, 58px)">Our Services</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-white/[0.04] rounded-md overflow-hidden">
            @foreach([
                [
                    'title' => 'General Contracting',
                    'desc'  => 'Full-scope main contractor services for residential, commercial, and mixed-use projects — managing all trades from ground-breaking to handover.',
                    'icon'  => '<path d="M3 21h18M3 18h18M6 18V9m4 9V9m4 9V9m4 9V9M3 9l9-6 9 6"/>',
                ],
                [
                    'title' => 'Residential Buildings',
                    'desc'  => 'Construction of villas, townhouses, and multi-storey apartment buildings for private developers and government-linked clients across the UAE.',
                    'icon'  => '<path d="M2 20h20M4 20V10l8-8 8 8v10M10 20v-5h4v5"/>',
                ],
                [
                    'title' => 'Commercial Projects',
                    'desc'  => 'Hotel apartments, retail complexes, factories, and commercial facilities — executed with precision engineering and timely delivery.',
                    'icon'  => '<path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6M3 10h18"/>',
                ],
                [
                    'title' => 'Resort &amp; Hospitality',
                    'desc'  => 'Specialized construction for luxury resorts, hotels, and hospitality facilities — balancing aesthetics with structural integrity.',
                    'icon'  => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/>',
                ],
                [
                    'title' => 'Site Supervision',
                    'desc'  => 'Expert on-site management from excavation to final inspection, ensuring compliance with Dubai Municipality and authority standards.',
                    'icon'  => '<path d="M12 22V12M12 12L7 7M12 12l5-5M3 21h18M6 21V10M18 21V10"/>',
                ],
                [
                    'title' => 'HSE &amp; Quality Control',
                    'desc'  => 'Comprehensive health, safety, and quality assurance management — ensuring every phase meets regulatory standards and client specifications.',
                    'icon'  => '<path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9a12.02 12.02 0 00-.382-3.016z"/>',
                ],
            ] as $service)
            <div class="group bg-navy/80 p-10 relative overflow-hidden hover:bg-blue/[0.12] transition-colors duration-300">
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-blue scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                <div class="w-[52px] h-[52px] bg-blue/15 rounded-md flex items-center justify-center mb-6">
                    <svg class="w-[26px] h-[26px] stroke-sky fill-none" stroke-width="1.5" viewBox="0 0 24 24">
                        {!! $service['icon'] !!}
                    </svg>
                </div>
                <div class="font-condensed text-[22px] font-bold uppercase tracking-[0.04em] mb-3 text-white">
                    {!! $service['title'] !!}
                </div>
                <p class="text-sm leading-[1.7] text-gray-mid">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>
