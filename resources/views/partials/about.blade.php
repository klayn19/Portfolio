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
                    Crafting Clean Code & High-Performance Web Applications
                </h2>

                <div class="mt-6 space-y-4 text-slate-600 text-base leading-relaxed">
                    <p>
                        Hello! I am <strong class="text-slate-900 font-semibold">{{ $profile['name'] ?? 'Alex Williams' }}</strong>, a passionate software developer specializing in building reliable, elegant, and secure web applications using the <strong class="text-indigo-600 font-semibold">Laravel ecosystem</strong>.
                    </p>
                    <p>
                        With a deep dedication to clean software architecture, I focus on turning complex business requirements into intuitive, blazing-fast digital products. Whether designing relational schemas, writing expressive Eloquent models, or crafting pixel-perfect interfaces, I take pride in quality execution.
                    </p>
                    <p>
                        I work remotely with clients and distributed teams across timezones, practicing agile methodologies, test-driven development, and asynchronous communication to ensure seamless collaboration.
                    </p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-8 pt-8 border-t border-slate-100">
                    @foreach ($stats as $stat)
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 text-center">
                            <div class="text-2xl sm:text-3xl font-extrabold text-indigo-600">{{ $stat['value'] }}</div>
                            <div class="text-xs sm:text-sm font-medium text-slate-500 mt-1">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4">
                <div class="p-5 rounded-2xl border border-slate-200 bg-white hover:border-indigo-200 hover:shadow-sm transition-all">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center mb-3">
                        <i class="fa-solid fa-layer-group text-lg"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Clean MVC & Domain Architecture</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Writing decoupled, testable, and maintainable code adhering to SOLID principles and Laravel best practices.
                    </p>
                </div>

                <div class="p-5 rounded-2xl border border-slate-200 bg-white hover:border-indigo-200 hover:shadow-sm transition-all">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center mb-3">
                        <i class="fa-solid fa-gauge-high text-lg"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">High-Load Optimization</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Database indexing, Redis caching, queued background workers, and asynchronous job pipelines.
                    </p>
                </div>

                <div class="p-5 rounded-2xl border border-slate-200 bg-white hover:border-indigo-200 hover:shadow-sm transition-all">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-3">
                        <i class="fa-solid fa-laptop-code text-lg"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Modern Front-End</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Crafting responsive, accessible, mobile-first interfaces using Tailwind CSS, Blade, and modern JS.
                    </p>
                </div>

                <div class="p-5 rounded-2xl border border-slate-200 bg-white hover:border-indigo-200 hover:shadow-sm transition-all">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-3">
                        <i class="fa-solid fa-globe text-lg"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Remote & Budget Friendly</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Independent remote setup that saves workplace overhead while providing predictable milestones.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
