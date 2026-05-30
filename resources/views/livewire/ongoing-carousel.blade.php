{{-- resources/views/livewire/ongoing-carousel.blade.php --}}
<section id="ongoing" class="scroll-mt-[72px] py-24 md:py-[120px] px-[5%] bg-navy-mid relative overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-[3px]"
        style="background: linear-gradient(90deg, transparent, #c9a84c, #4fb3e8, transparent)"></div>

    <div class="max-w-[1300px] mx-auto">

        <div class="mb-14">
            <div class="inline-flex items-center gap-2.5 mb-4">
                <div class="w-8 h-0.5 bg-gold"></div>
                <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gold">Live Projects</span>
            </div>
            <h2 class="font-condensed font-bold uppercase tracking-[0.02em] leading-none"
                style="font-size: clamp(36px, 5vw, 58px)">Ongoing Projects</h2>
            <p class="mt-4 text-[15px] text-gray-mid max-w-[600px] leading-[1.7]">
                Projects currently under active construction by Swift Atlantis Contracting across the UAE.
            </p>
        </div>

        {{-- Alpine.js Carousel --}}
        {{-- Alpine.js Carousel --}}
        <div wire:ignore x-data="{
        cur: 0,
        cardCount: {{ count($projects ?? []) }},
        gap: 20,

        visibleCount() {
            const w = this.$refs.outer.offsetWidth;
            if (w < 480) return 1;
            if (w < 768) return 2;
            if (w < 1024) return 3;
            return 4;
        },

        maxIndex() {
            return Math.max(0, this.cardCount - this.visibleCount());
        },

        cardWidth() {
            const vis = this.visibleCount();
            return (this.$refs.outer.offsetWidth - this.gap * (vis - 1)) / vis;
        },

        updateCardWidths() {
            const w = this.cardWidth();
            this.$refs.track.querySelectorAll('.op-card').forEach(c => {
                c.style.width = w + 'px';
                c.style.minWidth = w + 'px';
            });
        },

        go(n) {
            this.cur = Math.max(0, Math.min(n, this.maxIndex()));

            this.$nextTick(() => {
                const offset = this.cur * (this.cardWidth() + this.gap);

                this.$refs.track.style.transform =
                    `translateX(-${offset}px)`;

                this.updateCardWidths();
            });
        },

        counterText() {
            return String(this.cur + 1).padStart(2,'0')
                + ' / ' +
                String(this.maxIndex() + 1).padStart(2,'0');
        },

        pages() {
            return Array.from({ length: this.maxIndex() + 1 }, (_, i) => i);
        },
    }" x-init="
    setTimeout(() => {
        updateCardWidths();
        go(0);
    }, 50);

    window.addEventListener('resize', () => {
        updateCardWidths();
        go(cur);
    });" class="relative">
            {{-- Track --}}
            <div x-ref="outer" class="overflow-hidden rounded-md">
                <div x-ref="track" id="op-track"
                    class="flex transition-transform duration-[420ms] ease-[cubic-bezier(.4,0,.2,1)]">

                    @foreach($projects as $project)
                        <div
                            class="op-card group flex-none rounded-md overflow-hidden border border-white/[0.08] bg-navy/60 {{ $project['hover_border'] }} transition-all duration-300 hover:-translate-y-1 flex flex-col mr-5">

                            {{-- Card Image --}}
                            <div class="relative h-[200px] overflow-hidden">
                                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0"
                                    style="background: linear-gradient(0deg, rgba(10,22,40,0.85) 0%, rgba(10,22,40,0.1) 60%)">
                                </div>
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="text-[9px] font-bold tracking-[0.12em] uppercase px-2.5 py-1 rounded-full {{ $project['status_color'] }}">
                                        {{ $project['status'] }}
                                    </span>
                                </div>
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="text-[9px] font-bold tracking-[0.1em] uppercase px-2.5 py-1 rounded-sm bg-black/50 backdrop-blur-sm text-gray-mid">
                                        {{ $project['type'] }}
                                    </span>
                                </div>
                                <div class="absolute bottom-3 left-3">
                                    <span
                                        class="font-condensed text-[11px] font-bold tracking-[0.1em] uppercase text-white/50">
                                        {{ $project['id'] }}
                                    </span>
                                </div>
                            </div>

                            {{-- Card Body --}}
                            <div class="p-6 flex flex-col flex-1">
                                <h3 class="font-condensed text-[20px] font-bold text-white leading-tight mb-1">
                                    {{ $project['title'] }}
                                </h3>
                                <p class="text-xs text-sky mb-3">{{ $project['location'] }}</p>
                                <div class="flex flex-wrap gap-x-4 gap-y-1.5 text-[11px] text-steel mt-auto">
                                    {{-- Floors --}}
                                    <span class="flex items-center gap-1.5">
                                        <svg class="w-3 h-3 stroke-gray-mid fill-none" stroke-width="2" viewBox="0 0 24 24">
                                            <rect x="3" y="3" width="18" height="18" rx="2" />
                                            <line x1="3" y1="9" x2="21" y2="9" />
                                            <line x1="9" y1="21" x2="9" y2="9" />
                                        </svg>
                                        {{ $project['floors'] }}
                                    </span>
                                    {{-- Started --}}
                                    <span class="flex items-center gap-1.5">
                                        <svg class="w-3 h-3 stroke-gray-mid fill-none" stroke-width="2" viewBox="0 0 24 24">
                                            <rect x="3" y="4" width="18" height="18" rx="2" />
                                            <line x1="16" y1="2" x2="16" y2="6" />
                                            <line x1="8" y1="2" x2="8" y2="6" />
                                            <line x1="3" y1="10" x2="21" y2="10" />
                                        </svg>
                                        Started {{ $project['started'] }}
                                    </span>
                                    {{-- Target --}}
                                    <span class="flex items-center gap-1.5">
                                        <svg class="w-3 h-3 stroke-gold fill-none" stroke-width="2" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="10" />
                                            <polyline points="12 6 12 12 16 14" />
                                        </svg>
                                        Target {{ $project['target'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- Controls --}}
            <div class="flex items-center justify-between mt-6">

                {{-- Dots --}}
                <div class="flex gap-2 items-center">
                    <template x-for="i in pages()" :key="i">
                        <button @click="go(i)" :class="i === cur ? 'h-2 w-5 bg-blue' : 'h-2 w-2 bg-white/20'"
                            class="rounded-full border-0 cursor-pointer transition-all duration-300 p-0"
                            :aria-label="'Go to project ' + (i + 1)">
                        </button>
                    </template>
                </div>

                <div class="flex items-center gap-4">
                    {{-- Counter --}}
                    <div class="text-[12px] font-semibold tracking-[0.15em] text-gray-mid" x-text="counterText()"></div>

                    {{-- Prev / Next --}}
                    <div class="flex gap-2">
                        <button @click="go(cur - 1)" aria-label="Previous project"
                            class="w-11 h-11 rounded-full flex items-center justify-center border border-white/20 bg-navy/70 backdrop-blur-sm text-white hover:bg-blue hover:border-blue transition-all">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="15 18 9 12 15 6" />
                            </svg>
                        </button>
                        <button @click="go(cur + 1)" aria-label="Next project"
                            class="w-11 h-11 rounded-full flex items-center justify-center border border-white/20 bg-navy/70 backdrop-blur-sm text-white hover:bg-blue hover:border-blue transition-all">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>