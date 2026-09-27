{{-- ========================================================================= --}}
{{-- [SKILLS & TECH STACK SECTION]                                             --}}
{{-- Shows your proficiency across Frontend, Backend, Databases, and Tools.    --}}
{{-- ========================================================================= --}}

<section id="skills" class="py-24 bg-slate-50/70 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block px-3.5 py-1 text-xs font-semibold tracking-wider text-indigo-700 uppercase bg-indigo-50 rounded-full border border-indigo-100 mb-3">
                Technical Toolkit
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Skills &amp; Technologies
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                Technologies and tools I work with in school coursework, personal projects, and continuous self-study.
            </p>
        </div>

        {{-- ========================================================================= --}}
        {{-- [CUSTOMIZE HERE]: SKILLS CATEGORY CARDS                                   --}}
        {{-- Loop through $skills grouped by category in PortfolioController.php       --}}
        {{-- ========================================================================= --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($skills as $category => $items)
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm flex flex-col justify-between card-lift">
                    <div>
                        {{-- Category Header --}}
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                            <h3 class="font-bold text-slate-900 text-lg">{{ $category }}</h3>
                            <span class="text-xs font-semibold px-2 py-0.5 rounded bg-indigo-50 text-indigo-600">
                                {{ count($items) }} Skills
                            </span>
                        </div>

                        {{-- Skill Items List --}}
                        <div class="space-y-4">
                            @foreach ($items as $skill)
                                <div>
                                    <div class="flex items-center justify-between text-xs font-semibold mb-1.5">
                                        <div class="flex items-center gap-2 text-slate-800">
                                            <i class="{{ $skill['icon'] }} text-indigo-500 w-4 text-center"></i>
                                            <span>{{ $skill['name'] }}</span>
                                        </div>
                                        <span class="text-slate-400">{{ $skill['level'] }}%</span>
                                    </div>
                                    {{-- Animated Progress Bar --}}
                                    <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden">
                                        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-1.5 rounded-full transition-all duration-700" 
                                             style="width: {{ $skill['level'] }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Bottom Pill --}}
                    <div class="mt-6 pt-4 border-t border-slate-50 text-center">
                        <span class="text-[11px] text-slate-400 font-medium">Hands-on Experience</span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
