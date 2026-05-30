{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-black/40 border-t border-white/[0.06] py-10 px-[5%]">
    <div class="max-w-[1300px] mx-auto flex flex-col sm:flex-row items-center sm:items-center justify-between gap-4">
        <a href="#" class="flex items-center gap-2.5 no-underline">
            <svg width="32" height="32" viewBox="0 0 40 40" fill="none">
                <polygon points="20,4 36,34 4,34" fill="none" stroke="#4fb3e8" stroke-width="2"/>
                <rect x="16" y="16" width="8" height="18" fill="#2589e8"/>
                <rect x="12" y="20" width="4" height="14" fill="#4fb3e8" opacity="0.5"/>
                <rect x="24" y="22" width="4" height="12" fill="#4fb3e8" opacity="0.5"/>
            </svg>
            <span class="font-condensed text-sm font-bold text-steel tracking-[0.06em] uppercase">
                Swift Atlantis Contracting L.L.C
            </span>
        </a>
        <div class="text-right">
            <div class="text-xs text-gray-mid mb-1">License No. 1080914 · Dubai, United Arab Emirates</div>
            <div class="text-[11px] text-white/20">© {{ date('Y') }} Swift Atlantis Contracting L.L.C · All rights reserved</div>
        </div>
    </div>
</footer>
