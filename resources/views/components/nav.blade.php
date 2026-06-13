{{-- resources/views/components/nav.blade.php --}}
<div x-data="{ open: false }" @click.outside="open = false">

    {{-- ── DESKTOP NAV ── --}}
    <nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-[5%] h-[72px] bg-navy/90 backdrop-blur-md border-b border-white/[0.07]">

        {{-- Logo --}}
        <a href="#" class="flex items-center gap-1 no-underline">
       <div class="w-[60px] h-[60px] flex items-center justify-center shrink-0 mt-2">
    <img
        src="Images/logo/logo-swift.png"
        alt="Swift Atlantis Logo"
        class="nav-logo-img-default"
    />
</div>
            
            <div class="flex flex-col leading-none">
                <span class="font-condensed text-base font-bold tracking-[0.08em] text-white">Swift Atlantis</span>
                <span class="text-[10px] font-light tracking-[0.2em] text-sky uppercase">Contracting L.L.C</span>
            </div>
        </a>

        {{-- Desktop Links --}}
        <ul class="hidden md:flex gap-8 list-none">
            @foreach([
                ['href' => '#about',      'label' => 'About'],
                ['href' => '#vision',     'label' => 'Vision'],
                ['href' => '#services',   'label' => 'Services'],
                ['href' => '#projects',   'label' => 'Projects'],
                ['href' => '#ongoing',    'label' => 'Ongoing'],
                ['href' => '#leadership', 'label' => 'Leadership'],
            ] as $link)
            <li>
                <a href="{{ $link['href'] }}"
                   class="text-[13px] font-normal tracking-[0.12em] uppercase text-steel hover:text-white transition-colors no-underline">
                    {{ $link['label'] }}
                </a>
            </li>
            @endforeach
            <li>
                <a href="#contact"
                   class="rounded-lg text-[13px] font-semibold tracking-[0.12em] uppercase bg-blue text-white px-5 py-2 rounded-sm hover:bg-blue-light transition-colors no-underline">
                    Contact Us
                </a>
            </li>
        </ul>

        {{-- Hamburger --}}
        <button
            @click="open = !open"
            class="md:hidden flex flex-col gap-1.5 p-2"
            aria-label="Toggle menu">
            <span class="w-6 h-0.5 bg-white block"></span>
            <span class="w-6 h-0.5 bg-white block"></span>
            <span class="w-6 h-0.5 bg-white block"></span>
        </button>
    </nav>

    {{-- ── MOBILE MENU ── --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="fixed top-[72px] left-0 right-0 z-40 bg-navy/98 backdrop-blur-md border-b border-white/10 flex flex-col px-[5%] py-6 gap-4">

        @foreach([
            ['href' => '#about',      'label' => 'About'],
            ['href' => '#vision',     'label' => 'Vision'],
            ['href' => '#services',   'label' => 'Services'],
            ['href' => '#projects',   'label' => 'Projects'],
            ['href' => '#ongoing',    'label' => 'Ongoing'],
            ['href' => '#leadership', 'label' => 'Leadership'],
        ] as $link)
        <a href="{{ $link['href'] }}"
           @click="open = false"
           class="text-sm font-semibold tracking-widest uppercase text-steel hover:text-white block py-2 no-underline">
            {{ $link['label'] }}
        </a>
        @endforeach

        <a href="#contact"
           @click="open = false"
           class="text-sm font-semibold tracking-widest uppercase bg-blue text-white px-5 py-3 rounded-sm text-center block mt-2 no-underline">
            Contact Us
        </a>
    </div>

</div>
