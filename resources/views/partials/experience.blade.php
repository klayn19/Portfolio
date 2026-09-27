{{-- ========================================================================= --}}
{{-- [EXPERIENCE TIMELINE SECTION]                                            --}}
{{-- Highlights your career history, company roles, and verified achievements. --}}
{{-- ========================================================================= --}}

<section id="experience" class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block px-3.5 py-1 text-xs font-semibold tracking-wider text-indigo-700 uppercase bg-indigo-50 rounded-full border border-indigo-100 mb-3">
                My Journey
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Experience &amp; Education
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                A look at the projects, coursework, and experiences that shaped me as a developer throughout my college years.
            </p>
        </div>

        {{-- ========================================================================= --}}
        {{-- [CUSTOMIZE HERE]: TIMELINE ITEMS                                          --}}
        {{-- Modifiable in PortfolioController.php $experience array                  --}}
        {{-- ========================================================================= --}}
        <div class="relative pl-6 sm:pl-8 border-l-2 border-indigo-100 space-y-12">
            @foreach ($experience as $job)
                <div class="relative group">
                    {{-- Timeline Bullet Circle --}}
                    <div class="absolute -left-[31px] sm:-left-[39px] top-1.5 w-5 h-5 rounded-full bg-white border-4 border-indigo-600 group-hover:scale-125 transition-transform duration-200"></div>

                    <div class="bg-slate-50/70 hover:bg-white rounded-2xl p-6 sm:p-8 border border-slate-200/80 transition-all duration-200 hover:shadow-md hover:border-indigo-100">
                        {{-- Period & Location Badges --}}
                        <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                            <span class="px-3 py-1 bg-indigo-100/70 text-indigo-700 text-xs font-bold rounded-full">
                                {{ $job['period'] }}
                            </span>
                            <span class="text-xs font-medium text-slate-400 flex items-center gap-1">
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $job['location'] }}
                            </span>
                        </div>

                        {{-- Role & Company --}}
                        <h3 class="text-xl font-bold text-slate-900 mt-2">
                            {{ $job['role'] }}
                        </h3>
                        <div class="text-sm font-semibold text-indigo-600 mb-4">
                            {{ $job['company'] }}
                        </div>

                        {{-- Summary --}}
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">
                            {{ $job['summary'] }}
                        </p>

                        {{-- Key Achievements --}}
                        @if(!empty($job['achievements']))
                            <div class="space-y-2 pt-2 border-t border-slate-200/60">
                                <span class="text-xs font-bold text-slate-700 uppercase tracking-wide">Key Impacts:</span>
                                <ul class="space-y-1.5 mt-1">
                                    @foreach ($job['achievements'] as $item)
                                        <li class="text-xs sm:text-sm text-slate-600 flex items-start gap-2">
                                            <i class="fa-solid fa-check text-indigo-500 mt-1 text-xs"></i>
                                            <span>{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
