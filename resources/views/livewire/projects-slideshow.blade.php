{{-- resources/views/livewire/projects-slideshow.blade.php --}}
<section id="projects" class="scroll-mt-[72px] py-24 md:py-[120px] px-[5%] bg-navy">
    <div class="max-w-[1300px] mx-auto">

        <div class="mb-14">
            <div class="inline-flex items-center gap-2.5 mb-4">
                <div class="w-8 h-0.5 bg-gold"></div>
                <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gold">Portfolio</span>
            </div>
            <h2 class="font-condensed font-bold uppercase tracking-[0.02em] leading-none"
                style="font-size: clamp(36px, 5vw, 58px)">Projects by Our Director</h2>
            <p class="mt-4 text-[15px] text-gray-mid max-w-[620px] leading-[1.7]">
                Key projects managed by Eng. Ahmed Nada across UAE and Egypt — spanning luxury resorts, residential
                towers,
                commercial buildings, and more.
            </p>
        </div>

        {{-- Alpine.js slideshow wrapper --}}
        <div x-data="{
                current: 0,
                total: {{ count($slides) }},
                dir: 'right',
                autoplay: null,

                go(n, direction = 'right') {
                    this.dir = direction;
                    this.current = ((n % this.total) + this.total) % this.total;
                },
                next()  { this.go(this.current + 1, 'right'); },
                prev()  { this.go(this.current - 1, 'left'); },
                startAutoplay() {
                    this.autoplay = setInterval(() => this.next(), 6000);
                },
                stopAutoplay() {
                    clearInterval(this.autoplay);
                },
            }" x-init="
                startAutoplay();
                $watch('current', () => {});
            " @keydown.arrow-right.window="next()" @keydown.arrow-left.window="prev()" @mouseenter="stopAutoplay()"
            @mouseleave="startAutoplay()" class="relative rounded-md overflow-hidden border border-white/[0.08]"
            style="min-height: 520px;">

            {{-- Slides --}}

            @foreach($slides as $index => $slide)
                <div x-show="current === {{ $index }}" x-cloak x-transition:enter="transition-opacity duration-500"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-300" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" class="grid grid-cols-1 lg:grid-cols-2 absolute inset-0"
                    style="min-height:520px;">
                    {{-- Image --}}
                    <div class="relative overflow-hidden" style="min-height:280px">
                        <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}"
                            class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0"
                            style="background: linear-gradient(90deg, transparent 60%, rgba(10,22,40,0.95) 100%), linear-gradient(0deg, rgba(10,22,40,0.5), transparent)">
                        </div>
                        <div class="absolute top-5 left-5">
                            <span
                                class="text-[10px] font-semibold tracking-[0.12em] uppercase px-3 py-1.5 rounded-sm bg-blue text-white">
                                {{ $slide['category'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Content ayoko na--}}
                    <div class="bg-navy/80 backdrop-blur-sm flex flex-col justify-center p-10 lg:p-14">
                        <span
                            class="font-condensed text-[64px] font-extrabold text-white/[0.06] leading-none select-none mb-2">
                            {{ $slide['number'] }}
                        </span>
                        <div class="font-condensed text-[30px] font-bold uppercase text-white leading-tight mb-2">
                            {{ $slide['title'] }}
                        </div>
                        <div class="text-sky text-sm font-semibold mb-5">{{ $slide['location'] }}</div>
                        <p class="text-[14px] leading-[1.8] text-steel mb-6">{{ $slide['desc'] }}</p>
                        <div class="flex flex-wrap gap-3">
                            @foreach($slide['stats'] as $stat)
                                <div class="text-center px-4 py-3 rounded bg-white/[0.04] border border-white/[0.07]">
                                    <div class="font-condensed text-xl font-bold text-gold-light">{{ $stat['value'] }}</div>
                                    <div class="text-[9px] tracking-widest uppercase text-gray-mid">{{ $stat['label'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Prev / Next overlay buttons --}}
            <button @click="prev()"
                class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full flex items-center justify-center border border-white/20 bg-navy/70 backdrop-blur-sm text-white hover:bg-blue hover:border-blue transition-all">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>
            <button @click="next()"
                class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full flex items-center justify-center border border-white/20 bg-navy/70 backdrop-blur-sm text-white hover:bg-blue hover:border-blue transition-all">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>
        </div>

        {{-- Dots + Counter --}}
        <div class="flex items-center justify-between mt-6" x-data x-bind:data-current="$store.slideshow?.current">
            <div x-data="{ get current() { return Alpine.$data(document.querySelector('[x-data*=\'current: 0\']'))?.current ?? 0 } }"
                class="flex gap-2">
                @foreach($slides as $index => $slide)
                    <button @click="
                                    let sd = Alpine.$data(document.querySelector('[x-data*=\'current: 0, total\']'));
                                    sd.go({{ $index }}, {{ $index }} > sd.current ? 'right' : 'left');
                                " :class="{{ $index }} === (Alpine.$data(document.querySelector('[x-data*=\'current: 0, total\']'))?.current ?? 0)
                                    ? 'bg-blue w-5'
                                    : 'bg-white/20 w-2'" class="h-2 rounded-full transition-all duration-300">
                    </button>
                @endforeach
            </div>

            {{-- Counter synced via Alpine --}}
            <div class="text-[12px] font-semibold tracking-[0.15em] text-gray-mid" x-text="
                    (() => {
                        const sd = Alpine.$data(document.querySelector('[x-data*=\'current: 0, total\']'));
                        const c = (sd?.current ?? 0) + 1;
                        return String(c).padStart(2,'0') + ' / ' + String({{ count($slides) }}).padStart(2,'0');
                    })()
                 ">
            </div>
        </div>

    </div>
</section>