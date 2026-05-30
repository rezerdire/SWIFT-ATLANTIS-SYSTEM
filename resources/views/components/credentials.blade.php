{{-- resources/views/components/credentials.blade.php --}}
<section id="credentials" class="scroll-mt-[72px] py-24 md:py-[120px] px-[5%] bg-navy-mid">
    <div class="max-w-[1300px] mx-auto">

        <div class="inline-flex items-center gap-2.5 mb-4">
            <div class="w-8 h-0.5 bg-gold"></div>
            <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gold">Certifications</span>
        </div>
        <h2 class="font-condensed font-bold uppercase tracking-[0.02em] leading-none"
            style="font-size: clamp(36px, 5vw, 58px)">Licensed &amp; Certified</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-14">
            @foreach([
                [
                    'title'  => 'Commercial License',
                    'desc'   => 'Issued by Dubai Dept. of Economy &amp; Tourism',
                    'number' => 'No. 1080914',
                    'icon'   => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>',
                ],
                [
                    'title'  => 'Commercial Register',
                    'desc'   => 'Registered with Dubai Economic Development',
                    'number' => 'Reg. No. 1762575',
                    'icon'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                ],
                [
                    'title'  => 'Chamber Member',
                    'desc'   => 'Dubai Chamber of Commerce &amp; Industry',
                    'number' => 'Member No. 418548',
                    'icon'   => '<circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>',
                ],
                [
                    'title'  => 'VAT Registered',
                    'desc'   => 'UAE Federal Tax Authority · VAT Certificate',
                    'number' => 'TRN 104010741700003',
                    'icon'   => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
                ],
            ] as $cert)
            <div class="group bg-white/[0.03] border border-white/[0.07] rounded-md p-8 text-center hover:border-blue/40 hover:bg-blue/[0.06] hover:-translate-y-1 transition-all duration-300">
                <div class="w-14 h-14 bg-blue/15 rounded-full flex items-center justify-center mx-auto mb-5">
                    <svg class="w-6 h-6 stroke-sky fill-none" stroke-width="1.5" viewBox="0 0 24 24">
                        {!! $cert['icon'] !!}
                    </svg>
                </div>
                <div class="font-condensed text-[18px] font-bold uppercase tracking-[0.04em] mb-2 text-white">
                    {{ $cert['title'] }}
                </div>
                <div class="text-xs text-gray-mid leading-[1.5] mb-2">{!! $cert['desc'] !!}</div>
                <div class="text-[11px] text-sky font-semibold opacity-80">{{ $cert['number'] }}</div>
            </div>
            @endforeach
        </div>

    </div>
</section>
