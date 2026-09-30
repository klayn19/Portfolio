{{-- ========================================================================= --}}
{{-- [HERO SECTION COMPONENT]                                                  --}}
{{-- Exact replica of the reference picture provided by the user:              --}}
{{-- - Alex Williams (Name headline)                                           --}}
{{-- - Full-stack developer intro text                                         --}}
{{-- - Circular Purple Avatar with character illustration                      --}}
{{-- - Background faint geometric triangles & dot matrix                       --}}
{{-- ========================================================================= --}}

<section id="hero" class="relative pt-16 pb-24 md:pt-24 md:pb-32 overflow-hidden bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-black text-slate-900 tracking-[-0.04em] mb-6 leading-none">
            {{ $profile['name'] ?? 'Alex Williams' }}
        </h1>

        <p class="text-base sm:text-lg md:text-xl text-slate-600 leading-relaxed font-medium max-w-3xl mx-auto mb-12">
            {{ $profile['bio'] ?? "I'm a full-stack developer with great experience and passion for coding and building plain interfaces. I have a manic love for great high-loaded projects. Plus, I'm an easy-going person and fit in any team. I work remotely and save your budget on my workplace. So, if you have a complicated task, you've found the right person." }}
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="#projects" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-indigo-600 text-white font-semibold text-sm shadow-md hover:bg-indigo-700 transition-all duration-200">
                <i class="fa-solid fa-code"></i>
                <span>Explore Projects</span>
            </a>

            <a href="#contact" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-white text-slate-800 font-semibold text-sm border border-slate-200 hover:bg-slate-50 transition-all duration-200">
                <i class="fa-regular fa-envelope"></i>
                <span>Contact Me</span>
            </a>

            <a href="#about" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-full text-slate-600 hover:text-indigo-600 font-medium text-sm transition-colors">
                <i class="fa-solid fa-arrow-down"></i>
                <span>About Alex</span>
            </a>
        </div>
    </div>
</section>
