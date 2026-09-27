{{-- ========================================================================= --}}
{{-- [ABOUT ME SECTION]                                                        --}}
{{-- Highlights your story, philosophy, stats, and key engineering strengths.  --}}
{{-- ========================================================================= --}}

<section id="about" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Left Column: Bio Narrative & Stats --}}
            <div class="lg:col-span-7">
                <span class="inline-block px-3.5 py-1 text-xs font-semibold tracking-wider text-indigo-700 uppercase bg-indigo-50 rounded-full border border-indigo-100 mb-3">
                    About Me
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Building Practical Web Apps &amp; Growing as a Developer
                </h2>
                
                {{-- Detailed Narrative --}}
                <div class="mt-6 space-y-4 text-slate-600 text-base leading-relaxed">
                    <p>
                        Hello! I am <strong class="text-slate-900 font-semibold">{{ $profile['name'] ?? 'Klein' }}</strong>, a 4th-year student passionate about web development and building clean, practical applications with <strong class="text-indigo-600 font-semibold">Laravel and PHP</strong>.
                    </p>
                    <p>
                        Most of my coding experience comes from working on university capstone systems, course laboratories, and personal projects like educational platforms, monitoring tools, and interactive web apps.
                    </p>
                    <p>
                        As I prepare to graduate, I'm actively seeking an internship or junior developer role where I can contribute, learn from experienced engineers, and continue leveling up my skills with a great team.
                    </p>
                </div>

                {{-- ========================================================================= --}}
                {{-- [CUSTOMIZE HERE]: STAT METRICS GRID                                       --}}
                {{-- Values passed from $stats array in PortfolioController.php                --}}
                {{-- ========================================================================= --}}
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-8 pt-8 border-t border-slate-100">
                    @foreach ($stats as $stat)
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 text-center">
                            <div class="text-2xl sm:text-3xl font-extrabold text-indigo-600">{{ $stat['value'] }}</div>
                            <div class="text-xs sm:text-sm font-medium text-slate-500 mt-1">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right Column: 4 Key Pillars / Strengths --}}
            <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4">
                
                <div class="p-5 rounded-2xl border border-slate-100 bg-slate-50/60 hover:bg-white hover:border-indigo-200 hover:shadow-md transition-all">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center mb-3">
                        <i class="fa-solid fa-code text-lg"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Web Development</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Building clean, responsive web apps using Laravel, PHP, Blade templates, and Tailwind CSS.
                    </p>
                </div>

                <div class="p-5 rounded-2xl border border-slate-100 bg-slate-50/60 hover:bg-white hover:border-indigo-200 hover:shadow-md transition-all">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center mb-3">
                        <i class="fa-solid fa-database text-lg"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Database &amp; Back-End</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Designing relational databases in MySQL and SQLite, writing queries, and handling CRUD logic and APIs.
                    </p>
                </div>

                <div class="p-5 rounded-2xl border border-slate-100 bg-slate-50/60 hover:bg-white hover:border-indigo-200 hover:shadow-md transition-all">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-3">
                        <i class="fa-solid fa-puzzle-piece text-lg"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Problem Solving</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Breaking down requirements step-by-step and debugging software issues with patience and focus.
                    </p>
                </div>

                <div class="p-5 rounded-2xl border border-slate-100 bg-slate-50/60 hover:bg-white hover:border-indigo-200 hover:shadow-md transition-all">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-3">
                        <i class="fa-solid fa-graduation-cap text-lg"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Ready to Learn &amp; Work</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Eager to adapt to team workflows, collaborate using Git, and quickly pick up new tools and frameworks.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>
