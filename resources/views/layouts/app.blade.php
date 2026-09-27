<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ========================================================================= --}}
    {{-- [CUSTOMIZE HERE]: PAGE TITLE & META TAGS                                   --}}
    {{-- You can change the title, description, and keywords for SEO optimization.  --}}
    {{-- ========================================================================= --}}
    <title>{{ $profile['name'] ?? 'Alex Williams' }} - Portfolio</title>
    <meta name="description" content="Portfolio of {{ $profile['name'] ?? 'Alex Williams' }} - Full-stack developer showcasing modern web projects, architecture, and skills.">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/avatar.svg') }}">

    <!-- Google Fonts (Plus Jakarta Sans & Inter for clean, modern typography) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 Icons (Used for Facebook, Instagram, YouTube, GitHub, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tailwind CSS (via Tailwind CDN for instant zero-config preview, plus Vite build support) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        },
                        avatarPurple: '#7c3aed',
                    }
                }
            }
        }
    </script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: #ffffff;
            color: #1e293b;
            overflow-x: hidden;
        }

        /* Subtle animated background floating shapes */
        .hero-pattern {
            background-image: url('{{ asset("images/bg-pattern.svg") }}');
            background-repeat: no-repeat;
            background-position: center top;
            background-size: 100% auto;
        }

        /* Smooth card hover lift effect */
        .card-lift {
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-lift:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px -10px rgba(99, 102, 241, 0.15), 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        /* Social icon circular outline matching the reference picture */
        .social-circle-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 9999px;
            border: 1.5px solid #93c5fd;
            color: #3b82f6;
            transition: all 0.25s ease;
            background-color: transparent;
        }
        .social-circle-btn:hover {
            border-color: #2563eb;
            background-color: #eff6ff;
            color: #1d4ed8;
            transform: translateY(-2px);
        }

        /* Active filter button style */
        .filter-btn.active {
            background-color: #4f46e5;
            color: #ffffff;
            box-shadow: 0 4px 14px 0 rgba(79, 70, 229, 0.35);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased selection:bg-indigo-500 selection:text-white">

    {{-- ========================================================================= --}}
    {{-- [NAVIGATION BAR]: Brand Logo, Section Links & Social Icons                --}}
    {{-- Defined in resources/views/partials/navbar.blade.php                       --}}
    {{-- ========================================================================= --}}
    @include('partials.navbar')

    {{-- Main Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- ========================================================================= --}}
    {{-- [FOOTER]: Copyright & Quick Links                                         --}}
    {{-- Defined in resources/views/partials/footer.blade.php                       --}}
    {{-- ========================================================================= --}}
    @include('partials.footer')

    {{-- ========================================================================= --}}
    {{-- [PROJECT DETAILS MODAL]: Popup for quick view of project details          --}}
    {{-- Defined in resources/views/partials/modal.blade.php                        --}}
    {{-- ========================================================================= --}}
    @include('partials.modal')

    <!-- Interactive Scripts (Filter tabs, Mobile menu, Modal controller) -->
    <script>
        // Project Filtering Logic
        function filterProjects(category, btnElement) {
            // Update active state of buttons
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => btn.classList.remove('active', 'bg-indigo-600', 'text-white'));
            buttons.forEach(btn => btn.classList.add('bg-slate-100', 'text-slate-700', 'hover:bg-slate-200'));

            btnElement.classList.remove('bg-slate-100', 'text-slate-700', 'hover:bg-slate-200');
            btnElement.classList.add('active', 'bg-indigo-600', 'text-white');

            // Show or hide project cards
            const projectCards = document.querySelectorAll('.project-card');
            projectCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (category === 'all' || cardCategory === category) {
                    card.style.display = 'block';
                    card.classList.remove('opacity-0', 'scale-95');
                    card.classList.add('opacity-100', 'scale-100');
                } else {
                    card.style.display = 'none';
                    card.classList.add('opacity-0', 'scale-95');
                    card.classList.remove('opacity-100', 'scale-100');
                }
            });
        }

        // Project Quick View Modal Logic
        const projectModal = document.getElementById('projectDetailsModal');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const modalContent = document.getElementById('modalContent');

        function openProjectModal(projectData) {
            document.getElementById('modalTitle').textContent = projectData.title;
            document.getElementById('modalCategory').textContent = projectData.category_label || projectData.category;
            document.getElementById('modalDescription').textContent = projectData.long_description || projectData.description;
            document.getElementById('modalImage').src = projectData.image;
            document.getElementById('modalImage').alt = projectData.title;
            document.getElementById('modalLiveLink').href = projectData.live_url;
            document.getElementById('modalGithubLink').href = projectData.github_url;

            // Render tags
            const tagsContainer = document.getElementById('modalTags');
            tagsContainer.innerHTML = '';
            if (projectData.tags) {
                projectData.tags.forEach(tag => {
                    const span = document.createElement('span');
                    span.className = 'px-3 py-1 bg-indigo-50 text-indigo-700 text-xs font-semibold rounded-full border border-indigo-100';
                    span.textContent = tag;
                    tagsContainer.appendChild(span);
                });
            }

            // Show modal
            projectModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                modalBackdrop.classList.remove('opacity-0');
                modalBackdrop.classList.add('opacity-100');
                modalContent.classList.remove('opacity-0', 'scale-95');
                modalContent.classList.add('opacity-100', 'scale-100');
            }, 10);
        }

        function closeProjectModal() {
            modalBackdrop.classList.remove('opacity-100');
            modalBackdrop.classList.add('opacity-0');
            modalContent.classList.remove('opacity-100', 'scale-100');
            modalContent.classList.add('opacity-0', 'scale-95');
            setTimeout(() => {
                projectModal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 250);
        }

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            // Close mobile menu when clicking any nav link
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        // Auto dismiss flash messages after 6 seconds
        setTimeout(() => {
            const flash = document.getElementById('flashSuccessAlert');
            if (flash) {
                flash.style.transition = 'opacity 0.5s ease';
                flash.style.opacity = '0';
                setTimeout(() => flash.remove(), 500);
            }
        }, 6000);
    </script>
</body>
</html>
