{{-- ========================================================================= --}}
{{-- [HERO SECTION COMPONENT]                                                  --}}
{{-- Exact replica of the reference picture provided by the user:              --}}
{{-- - Alex Williams (Name headline)                                           --}}
{{-- - Full-stack developer intro text                                         --}}
{{-- - Circular Purple Avatar with character illustration                      --}}
{{-- - Background faint geometric triangles & dot matrix                       --}}
{{-- ========================================================================= --}}

<section id="hero" class="relative pt-16 pb-24 md:pt-24 md:pb-32 overflow-hidden hero-pattern">
    
    {{-- Floating subtle background decorative shapes (left & right) --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <!-- Floating purple blur glow behind avatar -->
        <div class="absolute left-1/2 bottom-8 -translate-x-1/2 w-96 h-96 bg-purple-200/40 rounded-full blur-3xl -z-10"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        
        {{-- ===================================================================== --}}
        {{-- [CUSTOMIZE HERE]: YOUR NAME (Main Headline)                           --}}
        {{-- Change the name in app/Http/Controllers/PortfolioController.php       --}}
        {{-- or directly edit below.                                               --}}
        {{-- ===================================================================== --}}
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight mb-8">
            {{ $profile['name'] ?? 'Alex Williams' }}
        </h1>

        {{-- ===================================================================== --}}
        {{-- [CUSTOMIZE HERE]: YOUR BIO / INTRO TEXT                               --}}
        {{-- Matches the exact wording from your reference image.                  --}}
        {{-- You can customize your bio in PortfolioController.php or right here. --}}
        {{-- ===================================================================== --}}
        <p class="text-base sm:text-lg md:text-xl text-slate-600 leading-relaxed font-normal max-w-3xl mx-auto mb-12">
            {{ $profile['bio'] ?? "I'm a full-stack developer with great experience and passion for coding and building plain interfaces. I have a manic love for great high-loaded projects. Plus, I'm an easy-going person and fit in any team. I work remotely and save your budget on my workplace. So, if you have a complicated task, you've found the right person." }}
        </p>

        {{-- ===================================================================== --}}
        {{-- [CUSTOMIZE HERE]: AVATAR IMAGE                                        --}}
        {{-- By default, uses the purple circle avatar matching your screenshot:   --}}
        {{-- public/images/avatar.svg                                              --}}
        {{-- To use your own photo: place my-photo.jpg in public/images/ and change--}}
        {{-- 'images/avatar.svg' to 'images/my-photo.jpg'                          --}}
        {{-- ===================================================================== --}}
        <div class="relative inline-block mb-10 group">
            <div class="w-48 h-48 sm:w-56 sm:h-56 md:w-64 md:h-64 rounded-full overflow-hidden shadow-2xl ring-8 ring-purple-100/70 transition-transform duration-300 group-hover:scale-105">
                <img src="{{ asset($profile['avatar'] ?? 'images/avatar.svg') }}" 
                     alt="{{ $profile['name'] ?? 'Avatar' }}" 
                     class="w-full h-full object-cover">
            </div>
            
            {{-- Online / Available for Hire Status Badge --}}
            <div class="absolute bottom-3 right-3 sm:bottom-4 sm:right-4 bg-emerald-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md border-2 border-white flex items-center gap-1.5" title="Available for new opportunities">
                <span class="w-2 h-2 bg-white rounded-full animate-ping"></span>
                <span>Available</span>
            </div>
        </div>

        {{-- Call To Action Buttons --}}
        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="#projects" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-indigo-600 text-white font-semibold text-sm shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:shadow-indigo-300 transition-all duration-200 hover:-translate-y-0.5">
                <i class="fa-solid fa-code"></i>
                <span>Explore Projects</span>
            </a>
            
            <a href="#contact" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-white text-slate-800 font-semibold text-sm border border-slate-200 hover:bg-slate-50 hover:border-slate-300 shadow-sm transition-all duration-200 hover:-translate-y-0.5">
                <i class="fa-regular fa-envelope"></i>
                <span>Contact Me</span>
            </a>
            
            {{-- Resume / CV Link (Replace '#' with your resume file in public/files/resume.pdf) --}}
            <a href="#about" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-full text-slate-600 hover:text-indigo-600 font-medium text-sm transition-colors">
                <i class="fa-solid fa-arrow-down"></i>
                <span>About Alex</span>
            </a>
        </div>

    </div>
</section>
