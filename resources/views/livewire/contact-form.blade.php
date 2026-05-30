{{-- resources/views/livewire/contact-form.blade.php --}}
<section id="contact" class="scroll-mt-[72px] py-24 md:py-[120px] px-[5%] bg-navy relative overflow-hidden">
    <div class="absolute -top-[200px] -right-[200px] w-[600px] h-[600px] rounded-full pointer-events-none"
         style="background: radial-gradient(circle, rgba(26,111,196,0.12) 0%, transparent 70%)"></div>

    <div class="max-w-[1300px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start relative z-10">

        {{-- ── Contact Info Column ── --}}
        <div>
            <div class="inline-flex items-center gap-2.5 mb-4">
                <div class="w-8 h-0.5 bg-gold"></div>
                <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-gold">Get in Touch</span>
            </div>
            <h2 class="font-condensed font-bold uppercase tracking-[0.02em] leading-none mb-6"
                style="font-size: clamp(36px, 5vw, 58px)">Let's Build<br>Together</h2>
            <p class="text-base leading-[1.8] text-steel mb-10">
                Ready to start your next construction project in Dubai or the UAE? Contact Swift Atlantis Contracting
                to discuss your requirements with our team.
            </p>

            <div class="flex flex-col gap-y-3 rounded-md p-2">
                @foreach([
                    [
                        'label' => 'Office Address',
                        'value' => 'P.O Box: 60054 Dubai<br>Office 901, Crystal Tower, Business Bay<br>Dubai, United Arab Emirates',
                        'icon'  => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/>',
                    ],
                    [
                        'label' => 'Mobile',
                        'value' => '+971 52-1500177',
                        'icon'  => '<path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/>',
                    ],
                    [
                        'label' => 'Email',
                        'value' => 'ahmednada@swiftatlantis.ae',
                        'icon'  => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
                    ],
                    [
                        'label' => 'License',
                        'value' => '1080914 · Building Contracting',
                        'icon'  => '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/>',
                    ],
                ] as $contact)
                <div class="flex items-center gap-4 px-6 py-6 border border-white/[0.2] rounded-md hover:bg-white/[0.03] transition-colors">
                    <div class="w-9 h-9 bg-blue/15 rounded flex items-center justify-center flex-shrink-0">
                        <svg class="w-[18px] h-[18px] stroke-sky fill-none" stroke-width="1.5" viewBox="0 0 24 24">
                            {!! $contact['icon'] !!}
                        </svg>
                    </div>
                    <div>
                        <div class="text-[10px] font-semibold tracking-[0.2em] uppercase text-gray-mid mb-0.5">
                            {{ $contact['label'] }}
                        </div>
                        <div class="text-sm text-white">{!! $contact['value'] !!}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- ── Form Column ── --}}
        <div class="bg-white/[0.03] border border-white/[0.07] rounded-md p-8 md:p-10">

            @if($submitted)
            {{-- Success State --}}
            <div class="flex flex-col items-center text-center py-10">
                <div class="w-16 h-16 rounded-full bg-blue/20 border border-blue/40 flex items-center justify-center mb-5">
                    <svg class="w-8 h-8 stroke-sky fill-none" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <div class="font-condensed text-[26px] font-bold uppercase tracking-[0.04em] text-white mb-3">
                    Enquiry Sent!
                </div>
                <p class="text-sm text-steel leading-[1.7] mb-7 max-w-[320px]">
                    Thank you for reaching out. Our team will review your enquiry and get back to you shortly.
                </p>
                <button
                    wire:click="resetForm"
                    class="bg-blue text-white px-8 py-3 rounded-sm text-[13px] font-semibold tracking-[0.12em] uppercase hover:bg-blue-light transition-colors">
                    Send Another →
                </button>
            </div>

            @else
            {{-- Form --}}
            <div class="font-condensed text-[22px] font-bold uppercase tracking-[0.04em] mb-7 text-white">
                Send an Enquiry
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-[11px] font-semibold tracking-[0.15em] uppercase text-gray-mid mb-2">
                        First Name
                    </label>
                    <input
                        wire:model.live.debounce.400ms="firstName"
                        type="text"
                        placeholder="John"
                        class="w-full bg-white/5 border rounded px-4 py-3 text-sm text-white outline-none focus:border-blue-light transition-colors placeholder:text-white/25
                               {{ $errors->has('firstName') ? 'border-red-500/60' : 'border-white/10' }}">
                    @error('firstName')
                        <span class="text-[11px] text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-[11px] font-semibold tracking-[0.15em] uppercase text-gray-mid mb-2">
                        Last Name
                    </label>
                    <input
                        wire:model.live.debounce.400ms="lastName"
                        type="text"
                        placeholder="Smith"
                        class="w-full bg-white/5 border rounded px-4 py-3 text-sm text-white outline-none focus:border-blue-light transition-colors placeholder:text-white/25
                               {{ $errors->has('lastName') ? 'border-red-500/60' : 'border-white/10' }}">
                    @error('lastName')
                        <span class="text-[11px] text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-[11px] font-semibold tracking-[0.15em] uppercase text-gray-mid mb-2">
                    Email Address
                </label>
                <input
                    wire:model.live.debounce.400ms="email"
                    type="email"
                    placeholder="john@example.com"
                    class="w-full bg-white/5 border rounded px-4 py-3 text-sm text-white outline-none focus:border-blue-light transition-colors placeholder:text-white/25
                           {{ $errors->has('email') ? 'border-red-500/60' : 'border-white/10' }}">
                @error('email')
                    <span class="text-[11px] text-red-400 mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-[11px] font-semibold tracking-[0.15em] uppercase text-gray-mid mb-2">
                    Phone Number
                </label>
                <input
                    wire:model.live.debounce.400ms="phone"
                    type="tel"
                    placeholder="+971 XX XXX XXXX"
                    class="w-full bg-white/5 border rounded px-4 py-3 text-sm text-white outline-none focus:border-blue-light transition-colors placeholder:text-white/25
                           {{ $errors->has('phone') ? 'border-red-500/60' : 'border-white/10' }}">
                @error('phone')
                    <span class="text-[11px] text-red-400 mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-[11px] font-semibold tracking-[0.15em] uppercase text-gray-mid mb-2">
                    Project Type
                </label>
                <select
                    wire:model="projectType"
                    class="w-full border rounded px-4 py-3 text-sm text-white outline-none focus:border-blue-light transition-colors appearance-none
                           {{ $errors->has('projectType') ? 'border-red-500/60' : 'border-white/10' }}"
                    style="background-color: rgba(255,255,255,0.05)">
                    <option value="" style="background:#0a1628">Select project type...</option>
                    @foreach($projectTypes as $key => $label)
                    <option value="{{ $key }}" style="background:#0a1628">{{ $label }}</option>
                    @endforeach
                </select>
                @error('projectType')
                    <span class="text-[11px] text-red-400 mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-[11px] font-semibold tracking-[0.15em] uppercase text-gray-mid mb-2">
                    Message
                </label>
                <textarea
                    wire:model.live.debounce.400ms="message"
                    rows="4"
                    placeholder="Tell us about your project — location, scope, timeline..."
                    class="w-full bg-white/5 border rounded px-4 py-3 text-sm text-white outline-none focus:border-blue-light transition-colors placeholder:text-white/25 resize-y min-h-[120px]
                           {{ $errors->has('message') ? 'border-red-500/60' : 'border-white/10' }}"></textarea>
                @error('message')
                    <span class="text-[11px] text-red-400 mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <button
                wire:click="submit"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-70 cursor-not-allowed"
                class="w-full bg-blue text-white border-0 px-8 py-3.5 rounded-sm text-[13px] font-semibold tracking-[0.12em] uppercase cursor-pointer hover:bg-blue-light transition-colors mt-2 flex items-center justify-center gap-2">

                {{-- Loading spinner --}}
                <svg wire:loading class="animate-spin w-4 h-4" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2">
                    <path d="M21 12a9 9 0 11-6.219-8.56"/>
                </svg>

                <span wire:loading.remove>Submit Enquiry →</span>
                <span wire:loading>Sending...</span>
            </button>

            @endif

        </div>
    </div>
</section>
