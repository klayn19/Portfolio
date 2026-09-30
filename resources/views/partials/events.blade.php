{{-- ========================================================================= --}}
{{-- [EVENTS, TALKS & CERTIFICATIONS SECTION]                                  --}}
{{-- Directly matches the "Events" link in the top navigation bar.             --}}
{{-- Highlights conferences, keynote talks, hackathon awards & certifications. --}}
{{-- ========================================================================= --}}

<section id="events" class="py-24 bg-slate-50/70 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block px-3.5 py-1 text-xs font-semibold tracking-wider text-indigo-700 uppercase bg-indigo-50 rounded-full border border-indigo-100 mb-3">
                Academic & Tech Milestones
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Events & Activities
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                Competitions, seminars, and tech events I've joined or participated in as a student.
            </p>
        </div>

        {{-- ========================================================================= --}}
        {{-- [CUSTOMIZE HERE]: EVENTS CARDS GRID                                       --}}
        {{-- Loop through $events array defined in PortfolioController.php             --}}
        {{-- ========================================================================= --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($events as $event)
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm card-lift flex flex-col justify-between">
                    <div>
                        @if(!empty($event['image']))
                            <a href="{{ asset($event['image']) }}" target="_blank" rel="noopener noreferrer" class="block mb-5 overflow-hidden rounded-xl border border-slate-200 bg-slate-50">
                                <img src="{{ asset($event['image']) }}" alt="Certificate: {{ $event['title'] }}" loading="lazy" class="w-full h-64 sm:h-72 object-contain">
                            </a>
                        @endif

                        <div class="flex items-center justify-between gap-2 mb-3">
                            <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 flex items-center gap-1.5">
                                <i class="fa-regular fa-calendar text-indigo-400"></i>
                                {{ $event['year'] }} · {{ $event['type'] }}
                            </span>
                            @if(!empty($event['badge']))
                                <span class="px-2.5 py-0.5 bg-emerald-50 text-emerald-700 border border-emerald-100 text-xs font-semibold rounded-full">
                                    {{ $event['badge'] }}
                                </span>
                            @endif
                        </div>

                        <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-1">
                            {{ $event['title'] }}
                        </h3>

                        <div class="text-xs sm:text-sm font-medium text-slate-400 mb-3 flex items-center gap-1.5">
                            <i class="fa-solid fa-location-pin text-slate-300"></i>
                            {{ $event['location'] }}
                        </div>

                        <p class="text-sm text-slate-600 leading-relaxed">
                            {{ $event['summary'] }}
                        </p>
                    </div>

                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                        <span>Verified Community Event</span>
                        <i class="fa-solid fa-award text-indigo-400 text-sm"></i>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
