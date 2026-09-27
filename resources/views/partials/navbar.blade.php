{{-- ========================================================================= --}}
{{-- [NAVIGATION BAR COMPONENT]                                                --}}
{{-- Shows the top logo initials, navigation links, and circular social icons. --}}
{{-- Matching the top header of the reference picture.                         --}}
{{-- ========================================================================= --}}

<header class="sticky top-0 z-40 bg-white/90 backdrop-blur-md border-b border-slate-100 transition-all duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            {{-- ========================================================================= --}}
            {{-- [CUSTOMIZE HERE]: LOGO / BRAND INITIALS                                  --}}
            {{-- Change 'AW' to your own initials or upload an SVG/PNG logo image.         --}}
            {{-- ========================================================================= --}}
            <a href="#hero" class="group flex items-center gap-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded-lg p-1">
                <span class="text-3xl font-extrabold tracking-tight text-blue-600 group-hover:text-indigo-600 transition-colors">
                    {{ $profile['initials'] ?? 'AW' }}
                </span>
            </a>

            {{-- ========================================================================= --}}
            {{-- [CUSTOMIZE HERE]: DESKTOP NAVIGATION LINKS                               --}}
            {{-- These match the navigation in the reference guide:                        --}}
            {{-- About me | Skills | Projects | Experience | Events                        --}}
            {{-- ========================================================================= --}}
            <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-600">
                <a href="#about" class="hover:text-blue-600 transition-colors py-1">About me</a>
                <a href="#skills" class="hover:text-blue-600 transition-colors py-1">Skills</a>
                <a href="#projects" class="hover:text-blue-600 transition-colors py-1">Projects</a>
                <a href="#experience" class="hover:text-blue-600 transition-colors py-1">Experience</a>
                <a href="#events" class="hover:text-blue-600 transition-colors py-1">Events</a>
                <a href="#contact" class="hover:text-blue-600 transition-colors py-1">Contact</a>
            </nav>

            {{-- ========================================================================= --}}
            {{-- [CUSTOMIZE HERE]: SOCIAL MEDIA ICONS (Right side of navbar)               --}}
            {{-- Circular outlined icons matching reference guide: Facebook, Instagram, YT  --}}
            {{-- Modify URLs or add GitHub/LinkedIn as desired.                            --}}
            {{-- ========================================================================= --}}
            <div class="hidden sm:flex items-center space-x-3">
                {{-- Facebook --}}
                <a href="{{ $profile['socials']['facebook'] ?? '#' }}" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   title="Facebook Profile"
                   class="social-circle-btn">
                    <i class="fa-brands fa-facebook-f text-sm"></i>
                </a>

                {{-- Instagram --}}
                <a href="{{ $profile['socials']['instagram'] ?? '#' }}" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   title="Instagram Profile"
                   class="social-circle-btn">
                    <i class="fa-brands fa-instagram text-sm"></i>
                </a>

                {{-- YouTube --}}
                <a href="{{ $profile['socials']['youtube'] ?? '#' }}" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   title="YouTube Channel"
                   class="social-circle-btn">
                    <i class="fa-brands fa-youtube text-sm"></i>
                </a>

                {{-- GitHub (Optional handy extra link) --}}
                @if(!empty($profile['socials']['github']))
                <a href="{{ $profile['socials']['github'] }}" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   title="GitHub Profile"
                   class="social-circle-btn">
                    <i class="fa-brands fa-github text-sm"></i>
                </a>
                @endif
            </div>

            {{-- Mobile Menu Hamburger Button --}}
            <div class="flex items-center md:hidden">
                <button type="button" id="mobileMenuBtn" aria-label="Toggle navigation menu" class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Dropdown Menu --}}
    <div id="mobileMenu" class="hidden md:hidden border-t border-slate-100 bg-white px-4 pt-3 pb-6 space-y-3 shadow-lg">
        <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600">About me</a>
        <a href="#skills" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600">Skills</a>
        <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600">Projects</a>
        <a href="#experience" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600">Experience</a>
        <a href="#events" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600">Events</a>
        <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600">Contact</a>
        
        <div class="pt-4 border-t border-slate-100 flex items-center space-x-3">
            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Follow:</span>
            <a href="{{ $profile['socials']['facebook'] ?? '#' }}" target="_blank" class="social-circle-btn"><i class="fa-brands fa-facebook-f text-sm"></i></a>
            <a href="{{ $profile['socials']['instagram'] ?? '#' }}" target="_blank" class="social-circle-btn"><i class="fa-brands fa-instagram text-sm"></i></a>
            <a href="{{ $profile['socials']['youtube'] ?? '#' }}" target="_blank" class="social-circle-btn"><i class="fa-brands fa-youtube text-sm"></i></a>
            @if(!empty($profile['socials']['github']))
            <a href="{{ $profile['socials']['github'] }}" target="_blank" class="social-circle-btn"><i class="fa-brands fa-github text-sm"></i></a>
            @endif
        </div>
    </div>
</header>
