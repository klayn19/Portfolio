{{-- ========================================================================= --}}
{{-- [MAIN PORTFOLIO VIEW: resources/views/portfolio/index.blade.php]          --}}
{{-- ========================================================================= --}}
{{-- HOW TO CUSTOMIZE THIS PORTFOLIO:                                          --}}
{{-- 1. Modify Personal Data & Projects:                                       --}}
{{--    Edit 'app/Http/Controllers/PortfolioController.php'                     --}}
{{--                                                                           --}}
{{-- 2. Modify Section Layouts & Design:                                       --}}
{{--    - Hero section (Name, bio, purple circle avatar):                      --}}
{{--      resources/views/partials/hero.blade.php                              --}}
{{--    - Projects showcase grid & filters:                                    --}}
{{--      resources/views/partials/projects.blade.php                          --}}
{{--    - Navigation bar & social icons:                                       --}}
{{--      resources/views/partials/navbar.blade.php                            --}}
{{--    - About Me & career statistics:                                        --}}
{{--      resources/views/partials/about.blade.php                             --}}
{{--    - Technical skills & progress bars:                                    --}}
{{--      resources/views/partials/skills.blade.php                            --}}
{{--    - Work experience timeline:                                            --}}
{{--      resources/views/partials/experience.blade.php                        --}}
{{--    - Events, talks & hackathons:                                          --}}
{{--      resources/views/partials/events.blade.php                            --}}
{{--    - Contact form & direct details:                                       --}}
{{--      resources/views/partials/contact.blade.php                           --}}
{{--                                                                           --}}
{{-- 3. Replace Avatar & Images:                                               --}}
{{--    Place your custom images in 'public/images/'                           --}}
{{-- ========================================================================= --}}

@extends('layouts.app')

@section('content')

    {{-- 1. Hero Section (Alex Williams, intro text, circular purple avatar) --}}
    @include('partials.hero')

    {{-- 2. Projects Showcase Section (Filtered project cards & details) --}}
    @include('partials.projects')

    {{-- 3. About Me Section (Bio narrative, stats, and engineering values) --}}
    @include('partials.about')

    {{-- 4. Skills & Tech Stack Section (Frontend, Backend, DB & Tools) --}}
    @include('partials.skills')

    {{-- 5. Work Experience Timeline Section --}}
    @include('partials.experience')

    {{-- 6. Events, Community & Awards Section --}}
    @include('partials.events')

    {{-- 7. Contact Section (Interactive Form & Info) --}}
    @include('partials.contact')

@endsection
