{{-- ========================================================================= --}}
{{-- [CONTACT SECTION COMPONENT]                                               --}}
{{-- Provides a contact form with Laravel CSRF protection & validation,        --}}
{{-- alongside your direct contact info & social profiles.                     --}}
{{-- ========================================================================= --}}

<section id="contact" class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block px-3.5 py-1 text-xs font-semibold tracking-wider text-indigo-700 uppercase bg-indigo-50 rounded-full border border-indigo-100 mb-3">
                Let's Connect
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Get In Touch
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                Have a new project in mind, an engineering problem to solve, or just want to say hi? Drop me a message below!
            </p>
        </div>

        {{-- Flash Success Message --}}
        @if (session('success'))
            <div id="flashSuccessAlert" class="max-w-4xl mx-auto mb-8 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-center justify-between shadow-sm">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-600 text-xl"></i>
                    <span class="font-medium text-sm">{{ session('success') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        @endif

        <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            {{-- ========================================================================= --}}
            {{-- [CUSTOMIZE HERE]: DIRECT CONTACT INFO & SOCIAL MEDIA                      --}}
            {{-- ========================================================================= --}}
            <div class="lg:col-span-12 bg-white text-slate-800 rounded-3xl p-8 sm:p-10 flex flex-col justify-between shadow-sm border border-slate-200/80 relative overflow-hidden">
                <div class="absolute -right-16 -top-16 w-48 h-48 bg-indigo-100 rounded-full blur-2xl"></div>

                <div class="relative z-10">
                    <h3 class="text-2xl font-bold tracking-tight mb-2 text-slate-900">Let's talk about everything!</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-8">
                        Feel free to reach out directly via email, phone, or any of my social profiles.
                    </p>

                    <div class="space-y-5 text-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center shrink-0 text-indigo-600">
                                <i class="fa-regular fa-envelope text-base"></i>
                            </div>
                            <div>
                                <span class="block text-[10px] text-slate-500 font-bold uppercase tracking-[0.18em] mb-1">Email</span>
                                <a href="mailto:{{ $profile['email'] ?? 'alex.williams@example.com' }}" class="text-slate-900 hover:text-indigo-600 font-medium transition-colors">
                                    {{ $profile['email'] ?? 'alex.williams@example.com' }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center shrink-0 text-indigo-600">
                                <i class="fa-solid fa-phone text-base"></i>
                            </div>
                            <div>
                                <span class="block text-[10px] text-slate-500 font-bold uppercase tracking-[0.18em] mb-1">Phone</span>
                                <span class="text-slate-900 font-medium">
                                    {{ $profile['phone'] ?? '+1 (555) 234-5678' }}
                                </span>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center shrink-0 text-indigo-600">
                                <i class="fa-solid fa-location-dot text-base"></i>
                            </div>
                            <div>
                                <span class="block text-[10px] text-slate-500 font-bold uppercase tracking-[0.18em] mb-1">Location</span>
                                <span class="text-slate-900 font-medium">
                                    {{ $profile['location'] ?? 'San Francisco, CA' }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-6 border-t border-slate-200 relative z-10">
                    <span class="block text-[10px] text-slate-500 font-bold uppercase tracking-[0.18em] mb-3">Connect on Social</span>
                    <div class="flex items-center gap-3">
                        {{-- Facebook --}}
                        <a href="{{ $profile['socials']['facebook'] ?? '#' }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-indigo-600 hover:text-white text-slate-700 flex items-center justify-center transition-all">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                        {{-- GitHub --}}
                        <a href="{{ $profile['socials']['github'] ?? '#' }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-indigo-600 hover:text-white text-slate-700 flex items-center justify-center transition-all">
                            <i class="fa-brands fa-github text-sm"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
