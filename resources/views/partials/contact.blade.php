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
            <div class="lg:col-span-5 bg-gradient-to-br from-indigo-900 to-slate-900 text-white rounded-3xl p-8 sm:p-10 flex flex-col justify-between shadow-xl relative overflow-hidden">
                <div class="absolute -right-16 -top-16 w-48 h-48 bg-indigo-500/20 rounded-full blur-2xl"></div>

                <div class="relative z-10">
                    <h3 class="text-2xl font-bold tracking-tight mb-2">Let's talk about everything!</h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-8">
                        Feel free to reach out directly via email, phone, or any of my social profiles.
                    </p>

                    <div class="space-y-6 text-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center shrink-0 text-indigo-300">
                                <i class="fa-regular fa-envelope text-base"></i>
                            </div>
                            <div>
                                <span class="block text-xs text-slate-400 font-semibold uppercase">Email</span>
                                <a href="mailto:{{ $profile['email'] ?? 'alex.williams@example.com' }}" class="text-white hover:text-indigo-300 font-medium transition-colors">
                                    {{ $profile['email'] ?? 'alex.williams@example.com' }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center shrink-0 text-indigo-300">
                                <i class="fa-solid fa-phone text-base"></i>
                            </div>
                            <div>
                                <span class="block text-xs text-slate-400 font-semibold uppercase">Phone</span>
                                <span class="text-white font-medium">
                                    {{ $profile['phone'] ?? '+1 (555) 234-5678' }}
                                </span>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center shrink-0 text-indigo-300">
                                <i class="fa-solid fa-location-dot text-base"></i>
                            </div>
                            <div>
                                <span class="block text-xs text-slate-400 font-semibold uppercase">Location</span>
                                <span class="text-white font-medium">
                                    {{ $profile['location'] ?? 'San Francisco, CA' }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-6 border-t border-white/10 relative z-10">
                    <span class="block text-xs text-slate-400 font-semibold uppercase mb-3">Connect on Social</span>
                    <div class="flex items-center gap-3">
                        {{-- Facebook --}}
                        <a href="{{ $profile['socials']['facebook'] ?? '#' }}" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white hover:text-indigo-900 text-white flex items-center justify-center transition-all">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                        {{-- Instagram --}}
                        <a href="{{ $profile['socials']['instagram'] ?? '#' }}" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white hover:text-indigo-900 text-white flex items-center justify-center transition-all">
                            <i class="fa-brands fa-instagram text-sm"></i>
                        </a>
                        {{-- YouTube --}}
                        <a href="{{ $profile['socials']['youtube'] ?? '#' }}" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white hover:text-indigo-900 text-white flex items-center justify-center transition-all">
                            <i class="fa-brands fa-youtube text-sm"></i>
                        </a>
                        {{-- GitHub --}}
                        <a href="{{ $profile['socials']['github'] ?? '#' }}" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white hover:text-indigo-900 text-white flex items-center justify-center transition-all">
                            <i class="fa-brands fa-github text-sm"></i>
                        </a>
                    </div>
                </div>

            </div>

            {{-- ========================================================================= --}}
            {{-- [CUSTOMIZE HERE]: INTERACTIVE CONTACT FORM                                --}}
            {{-- Form submits via POST to route('portfolio.contact')                      --}}
            {{-- ========================================================================= --}}
            <div class="lg:col-span-7 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/80 shadow-sm">
                
                <form action="{{ route('portfolio.contact') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        {{-- Name --}}
                        <div>
                            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                Your Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   value="{{ old('name') }}"
                                   required 
                                   placeholder="Jane Doe"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-sm text-slate-800 transition-all @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                Your Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   value="{{ old('email') }}"
                                   required 
                                   placeholder="jane@example.com"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-sm text-slate-800 transition-all @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Subject --}}
                    <div>
                        <label for="subject" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            Subject
                        </label>
                        <input type="text" 
                               name="subject" 
                               id="subject" 
                               value="{{ old('subject') }}"
                               placeholder="Project Inquiry / Job Opportunity"
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-sm text-slate-800 transition-all">
                    </div>

                    {{-- Message --}}
                    <div>
                        <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            Message <span class="text-red-500">*</span>
                        </label>
                        <textarea name="message" 
                                  id="message" 
                                  rows="5" 
                                  required 
                                  placeholder="Tell me about your project, timeline, and goals..."
                                  class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-sm text-slate-800 transition-all @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div>
                        <button type="submit" 
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm shadow-lg shadow-indigo-200 hover:shadow-indigo-300 transition-all duration-200 hover:-translate-y-0.5">
                            <i class="fa-regular fa-paper-plane"></i>
                            <span>Send Message</span>
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>
</section>
