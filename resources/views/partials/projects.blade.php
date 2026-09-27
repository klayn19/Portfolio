{{-- ========================================================================= --}}
{{-- [PROJECTS SHOWCASE SECTION]                                               --}}
{{-- Showcases your featured web development and software engineering projects. --}}
{{-- Features:                                                                 --}}
{{-- - Interactive category filters (All, Full-Stack, Frontend, Backend)       --}}
{{-- - Responsive project cards with tech tags and action buttons             --}}
{{-- - "Quick View" modal popup for project screenshots & detailed breakdown   --}}
{{-- ========================================================================= --}}

<section id="projects" class="py-24 bg-slate-50/70 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="inline-block px-3.5 py-1 text-xs font-semibold tracking-wider text-indigo-700 uppercase bg-indigo-50 rounded-full border border-indigo-100 mb-3">
                Portfolio Showcase
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Featured Projects &amp; Work
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                A collection of web applications, academic systems, and personal projects I've built while practicing software development.
            </p>

            {{-- ========================================================================= --}}
            {{-- [CUSTOMIZE HERE]: PROJECT CATEGORY FILTER BUTTONS                         --}}
            {{-- You can add or rename filters below (must match 'category' in controller) --}}
            {{-- ========================================================================= --}}
            <div class="flex flex-wrap items-center justify-center gap-2 mt-8">
                <button type="button" 
                        onclick="filterProjects('all', this)" 
                        class="filter-btn active px-4 py-2 text-xs sm:text-sm font-semibold rounded-full bg-indigo-600 text-white transition-all shadow-sm">
                    All Works
                </button>
                <button type="button" 
                        onclick="filterProjects('fullstack', this)" 
                        class="filter-btn px-4 py-2 text-xs sm:text-sm font-semibold rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-all">
                    Full-Stack
                </button>
                <button type="button" 
                        onclick="filterProjects('frontend', this)" 
                        class="filter-btn px-4 py-2 text-xs sm:text-sm font-semibold rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-all">
                    Frontend / UI
                </button>
                <button type="button" 
                        onclick="filterProjects('backend', this)" 
                        class="filter-btn px-4 py-2 text-xs sm:text-sm font-semibold rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-all">
                    Backend / DevOps
                </button>
            </div>
        </div>

        {{-- ========================================================================= --}}
        {{-- [CUSTOMIZE HERE]: PROJECT CARDS GRID                                      --}}
        {{-- Automatically loops through the $projects array passed from              --}}
        {{-- PortfolioController.php. You can also modify card HTML layout below.      --}}
        {{-- ========================================================================= --}}
        <div id="projectsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($projects as $project)
                <div class="project-card group bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm card-lift flex flex-col transition-all duration-300"
                     data-category="{{ $project['category'] }}">
                    
                    {{-- Project Thumbnail with Hover Preview Action --}}
                    <div class="relative overflow-hidden bg-slate-100 aspect-video">
                        <img src="{{ asset($project['image']) }}" 
                             alt="{{ $project['title'] }}" 
                             class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                        
                        {{-- Featured Ribbon Badge --}}
                        @if(!empty($project['featured']))
                            <div class="absolute top-3 left-3 bg-indigo-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-md flex items-center gap-1">
                                <i class="fa-solid fa-star text-[9px]"></i>
                                <span>Featured</span>
                            </div>
                        @endif

                        {{-- Quick View Overlay Trigger --}}
                        <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-3">
                            <button type="button" 
                                    onclick="openProjectModal({{ json_encode($project) }})" 
                                    class="px-4 py-2 bg-white text-slate-900 font-semibold text-xs rounded-full shadow-lg hover:bg-indigo-600 hover:text-white transition-all transform translate-y-2 group-hover:translate-y-0">
                                <i class="fa-regular fa-eye mr-1"></i> Quick View
                            </button>
                        </div>
                    </div>

                    {{-- Project Content --}}
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            {{-- Category Pill --}}
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs font-bold uppercase tracking-wider text-indigo-600">
                                    {{ $project['category_label'] ?? $project['category'] }}
                                </span>
                            </div>

                            {{-- Project Title --}}
                            <h3 class="text-xl font-bold text-slate-900 group-hover:text-indigo-600 transition-colors">
                                {{ $project['title'] }}
                            </h3>

                            {{-- Project Description --}}
                            <p class="mt-2.5 text-sm text-slate-600 leading-relaxed line-clamp-3">
                                {{ $project['description'] }}
                            </p>
                        </div>

                        <div class="mt-6 pt-5 border-t border-slate-100">
                            {{-- Tech Stack Tags --}}
                            <div class="flex flex-wrap gap-1.5 mb-5">
                                @foreach ($project['tags'] as $tag)
                                    <span class="px-2.5 py-0.5 bg-slate-100 text-slate-700 text-xs font-medium rounded-md">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>

                            {{-- Action Links --}}
                            <div class="flex items-center justify-between pt-2">
                                <div class="flex items-center gap-3">
                                    {{-- Live Demo Link --}}
                                    @if(!empty($project['live_url']))
                                        <a href="{{ $project['live_url'] }}" 
                                           target="_blank" 
                                           rel="noopener noreferrer" 
                                           class="inline-flex items-center gap-1.5 text-xs font-semibold text-indigo-600 hover:text-indigo-800 transition-colors">
                                            <span>Live Demo</span>
                                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                        </a>
                                    @endif

                                    {{-- GitHub Source Link --}}
                                    @if(!empty($project['github_url']))
                                        <a href="{{ $project['github_url'] }}" 
                                           target="_blank" 
                                           rel="noopener noreferrer" 
                                           class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-600 hover:text-slate-900 transition-colors">
                                            <i class="fa-brands fa-github text-sm"></i>
                                            <span>Code</span>
                                        </a>
                                    @endif
                                </div>

                                {{-- Details Button --}}
                                <button type="button" 
                                        onclick="openProjectModal({{ json_encode($project) }})" 
                                        class="text-xs font-semibold text-slate-500 hover:text-indigo-600 transition-colors">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-span-full py-12 text-center text-slate-500">
                    No projects found. Add your projects in <code class="bg-slate-100 px-2 py-1 rounded">PortfolioController.php</code>.
                </div>
            @endforelse
        </div>

        {{-- Call To Action Box below projects --}}
        <div class="mt-16 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl p-8 sm:p-12 text-white shadow-xl relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
            
            <div class="max-w-2xl relative z-10">
                <span class="text-xs font-bold uppercase tracking-wider text-indigo-200">Open for Opportunities</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold mt-1">Looking for an intern or junior web developer?</h3>
                <p class="mt-2 text-indigo-100 text-sm sm:text-base leading-relaxed">
                    I'm in my final year of college and ready to contribute to real-world projects. I'd love to bring my dedication, problem-solving mindset, and coding skills to your team.
                </p>
                <div class="mt-6 flex flex-wrap gap-4">
                    <a href="#contact" class="px-6 py-3 rounded-full bg-white text-indigo-700 font-bold text-sm shadow hover:bg-indigo-50 transition-all">
                        Let's Get In Touch
                    </a>
                    <a href="{{ $profile['socials']['github'] ?? 'https://github.com' }}" target="_blank" class="px-6 py-3 rounded-full bg-indigo-700/60 hover:bg-indigo-700 text-white font-semibold text-sm border border-indigo-400/40 transition-all flex items-center gap-2">
                        <i class="fa-brands fa-github"></i>
                        <span>See All on GitHub</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
