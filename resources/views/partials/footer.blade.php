{{-- ========================================================================= --}}
{{-- [FOOTER COMPONENT]                                                        --}}
{{-- Bottom footer with copyright, navigation links, and back-to-top button.   --}}
{{-- ========================================================================= --}}

<footer class="bg-white border-t border-slate-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            
            {{-- Logo / Initials & Copyright --}}
            <div class="flex items-center gap-3">
                <a href="#hero" class="text-2xl font-extrabold text-blue-600 hover:text-indigo-600 transition-colors">
                    {{ $profile['initials'] ?? 'AW' }}
                </a>
                <span class="text-slate-300">|</span>
                <p class="text-xs sm:text-sm text-slate-500">
                    &copy; {{ date('Y') }} {{ $profile['name'] ?? 'Alex Williams' }}. All rights reserved.
                </p>
            </div>

            {{-- Back to top button --}}
            <div>
                <a href="#hero" aria-label="Back to top" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-100 hover:bg-indigo-600 hover:text-white text-slate-600 transition-all shadow-sm">
                    <i class="fa-solid fa-arrow-up text-sm"></i>
                </a>
            </div>

        </div>
    </div>
</footer>
