{{-- ========================================================================= --}}
{{-- [PROJECT DETAILS MODAL COMPONENT]                                         --}}
{{-- Popup window opened when clicking 'Quick View' on any project card.       --}}
{{-- ========================================================================= --}}

<div id="projectDetailsModal" class="hidden fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modalTitle" role="dialog" aria-modal="true">
    
    {{-- Backdrop overlay --}}
    <div id="modalBackdrop" 
         onclick="closeProjectModal()" 
         class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300 opacity-0"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        {{-- Modal Dialog Card --}}
        <div id="modalContent" 
             class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all duration-300 opacity-0 scale-95 sm:my-8 sm:w-full sm:max-w-3xl border border-slate-100">
            
            {{-- Close button --}}
            <button type="button" 
                    onclick="closeProjectModal()" 
                    aria-label="Close modal"
                    class="absolute top-4 right-4 z-20 w-9 h-9 rounded-full bg-slate-900/70 hover:bg-slate-900 text-white flex items-center justify-center transition-colors">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>

            {{-- Modal Image Preview --}}
            <div class="relative bg-slate-950 aspect-video overflow-hidden">
                <img id="modalImage" 
                     src="" 
                     alt="Project Preview" 
                     class="w-full h-full object-cover">
            </div>

            {{-- Modal Body Content --}}
            <div class="p-6 sm:p-8">
                
                {{-- Category & Title --}}
                <div class="mb-4">
                    <span id="modalCategory" class="inline-block text-xs font-bold uppercase tracking-wider text-indigo-600 mb-1">
                        Category
                    </span>
                    <h3 id="modalTitle" class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                        Project Title
                    </h3>
                </div>

                {{-- Full Project Description --}}
                <p id="modalDescription" class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                    Full project description will appear here.
                </p>

                {{-- Tech Stack Tags Container --}}
                <div class="mb-8">
                    <span class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Technologies Used:</span>
                    <div id="modalTags" class="flex flex-wrap gap-2">
                        <!-- Dynamically filled with tags via openProjectModal() JS -->
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-slate-100">
                    <div class="flex flex-wrap items-center gap-3">
                        <a id="modalLiveLink" 
                           href="#" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-xs sm:text-sm shadow-md transition-all">
                            <span>Open Live Preview</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                        </a>

                        <a id="modalGithubLink" 
                           href="#" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs sm:text-sm transition-all">
                            <i class="fa-brands fa-github text-base"></i>
                            <span>View Source Code</span>
                        </a>
                    </div>

                    <button type="button" 
                            onclick="closeProjectModal()" 
                            class="text-xs font-semibold text-slate-400 hover:text-slate-600 transition-colors">
                        Close &times;
                    </button>
                </div>

            </div>

        </div>
    </div>
</div>
