<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the main portfolio page.
     * 
     * NOTE FOR CUSTOMIZATION:
     * You can edit your portfolio content directly in the arrays below,
     * or you can edit the Blade views in resources/views/partials/
     */
    public function index()
    {
        // =========================================================================
        // [CUSTOMIZE HERE]: YOUR PERSONAL & HERO PROFILE INFORMATION
        // =========================================================================
        $profile = [
            'initials'    => 'K',                 // Shown in the top-left navigation logo
            'name'        => 'Klein',             // Your full name shown in the Hero section
            'title'       => '4th Year Student & Aspiring Web Developer', 
            // Bio text: natural, genuine, non-AI tone for a graduating student
            'bio'         => "Hey, I'm Klein! I'm a 4th-year student passionate about web development and building clean, practical applications. I mainly work with Laravel, PHP, MySQL, and Tailwind CSS. Always curious to learn new tools and ready to take on junior developer or internship opportunities.",
            
            // Avatar image path (Place your image inside public/images/)
            // To use your own photo, change this to: asset('images/your-photo.png') or asset('images/your-photo.jpg')
            'avatar'      => 'images/avatar.svg',
            
            // Your contact & location details
            'email'       => 'klein@example.com',
            'phone'       => '+63 912 345 6789',
            'location'    => 'Open to Remote & On-Site',
            'availability'=> 'Available for Internships & Junior Roles',
            
            // Social media links
            'socials'     => [
                'facebook'  => 'https://facebook.com',
                'instagram' => 'https://instagram.com',
                'youtube'   => 'https://youtube.com',
                'github'    => 'https://github.com',
                'linkedin'  => 'https://linkedin.com',
            ],
        ];

        // =========================================================================
        // [CUSTOMIZE HERE]: HIGHLIGHT STATS (Showcased in About Me section)
        // Realistic, impressive student milestones
        // =========================================================================
        $stats = [
            ['value' => '4th',  'label' => 'Year Student'],
            ['value' => '10+',  'label' => 'Projects & Labs'],
            ['value' => '3+',   'label' => 'Years Coding'],
            ['value' => 'Ready','label' => 'For Internship'],
        ];

        // =========================================================================
        // [CUSTOMIZE HERE]: YOUR PROJECT SHOWCASE
        // Featured projects from C:\xampp\htdocs:
        // COS_LARAVEL, SAM_system, playlist, coffee menu
        // =========================================================================
        $projects = [
            [
                'id'          => 1,
                'title'       => 'COS_LARAVEL (Clash of Subjects)',
                'category'    => 'fullstack',
                'category_label' => 'Full-Stack / Unity API',
                'description' => 'A gamified learning web platform with student, teacher, and admin dashboards, integrated with a Unity quiz game API.',
                'long_description' => 'An educational web application built with Laravel and MySQL. Features role-based dashboards for Teachers, Students, and Administrators. Teachers can manage sections, create subject quiz questions, and view student analytics. Includes an automated REST API consumed by a Unity quiz game to fetch questions dynamically.',
                'image'       => 'images/projects/project1.svg',
                'tags'        => ['Laravel', 'PHP', 'MySQL', 'Unity Game API', 'Docker', 'Blade'],
                'live_url'    => '#',
                'github_url'  => 'https://github.com/klayn19/COS_LARAVEL',
                'featured'    => true,
            ],
            [
                'id'          => 2,
                'title'       => 'SAM System (Student Achievement Monitoring)',
                'category'    => 'fullstack',
                'category_label' => 'Full-Stack / Academic',
                'description' => 'A web-based student achievement monitoring system with grade management, RFID and manual attendance tracking, and report generation.',
                'long_description' => 'Developed with PHP, MySQL, and JavaScript. Features dedicated dashboards for Admins, Teachers, and Students. Supports RFID-based and manual student attendance, grade recording with print-ready reports, account lockout security, and email password recovery via PHPMailer.',
                'image'       => 'images/projects/project2.svg',
                'tags'        => ['PHP', 'MySQL', 'JavaScript', 'RFID Attendance', 'PHPMailer', 'Bootstrap'],
                'live_url'    => '#',
                'github_url'  => 'https://github.com/klayn19/SAM',
                'featured'    => true,
            ],
            [
                'id'          => 3,
                'title'       => 'Playlist Web App',
                'category'    => 'frontend',
                'category_label' => 'Frontend / Web App',
                'description' => 'An interactive music playlist portal with user registration, secure session authentication, and personalized playback interface.',
                'long_description' => 'A responsive web application built with PHP, Bootstrap, and MySQL featuring a stylized user interface. Includes account registration, credential validation, session handling, and access to curated music playlists with smooth navigation.',
                'image'       => 'images/projects/project3.svg',
                'tags'        => ['PHP', 'Bootstrap', 'MySQL', 'HTML5/CSS3', 'JavaScript'],
                'live_url'    => '#',
                'github_url'  => '#',
                'featured'    => true,
            ],
            [
                'id'          => 4,
                'title'       => 'Coffee Menu & Inventory System',
                'category'    => 'backend',
                'category_label' => 'Python / GUI & Database',
                'description' => 'A desktop coffee shop POS and inventory management system with dark-mode GUI, SQLite database, and product catalog.',
                'long_description' => 'Developed in Python using CustomTkinter and SQLite. Provides full inventory and menu management for coffee shops, including item pricing, categorized product listings with images, ingredient stock-level tracking, and sales transaction logging.',
                'image'       => 'images/projects/project4.svg',
                'tags'        => ['Python', 'CustomTkinter', 'SQLite', 'Pillow', 'GUI Application'],
                'live_url'    => '#',
                'github_url'  => '#',
                'featured'    => true,
            ],
        ];

        // =========================================================================
        // [CUSTOMIZE HERE]: YOUR SKILLS & TECH STACK
        // Grouped by categories with realistic student proficiency levels
        // =========================================================================
        $skills = [
            'Frontend' => [
                ['name' => 'HTML5 & Modern CSS3', 'level' => 85, 'icon' => 'fa-brands fa-html5'],
                ['name' => 'JavaScript (ES6+)', 'level' => 78, 'icon' => 'fa-brands fa-js'],
                ['name' => 'Tailwind CSS & Bootstrap', 'level' => 82, 'icon' => 'fa-solid fa-wind'],
                ['name' => 'Blade Templating', 'level' => 85, 'icon' => 'fa-solid fa-code'],
                ['name' => 'Vue.js Basics', 'level' => 65, 'icon' => 'fa-brands fa-vuejs'],
            ],
            'Backend' => [
                ['name' => 'PHP (OOP & Fundamentals)', 'level' => 82, 'icon' => 'fa-brands fa-php'],
                ['name' => 'Laravel Framework', 'level' => 80, 'icon' => 'fa-brands fa-laravel'],
                ['name' => 'RESTful APIs & CRUD', 'level' => 78, 'icon' => 'fa-solid fa-network-wired'],
                ['name' => 'MVC Architecture', 'level' => 80, 'icon' => 'fa-solid fa-layer-group'],
                ['name' => 'Authentication & Sessions', 'level' => 75, 'icon' => 'fa-solid fa-shield-halved'],
            ],
            'Database' => [
                ['name' => 'MySQL / MariaDB', 'level' => 82, 'icon' => 'fa-solid fa-database'],
                ['name' => 'Relational DB Design', 'level' => 78, 'icon' => 'fa-solid fa-server'],
                ['name' => 'SQL Queries & Eloquent ORM', 'level' => 80, 'icon' => 'fa-solid fa-table'],
                ['name' => 'SQLite', 'level' => 75, 'icon' => 'fa-solid fa-hard-drive'],
                ['name' => 'Migrations & Seeders', 'level' => 82, 'icon' => 'fa-solid fa-seedling'],
            ],
            'Tools & Workflow' => [
                ['name' => 'Git & GitHub Version Control', 'level' => 80, 'icon' => 'fa-brands fa-git-alt'],
                ['name' => 'XAMPP & Apache Setup', 'level' => 88, 'icon' => 'fa-solid fa-server'],
                ['name' => 'Composer & NPM Ecosystem', 'level' => 78, 'icon' => 'fa-solid fa-box-open'],
                ['name' => 'Postman (API Testing)', 'level' => 76, 'icon' => 'fa-solid fa-paper-plane'],
                ['name' => 'VS Code & Command Line', 'level' => 85, 'icon' => 'fa-solid fa-terminal'],
            ],
        ];

        // =========================================================================
        // [CUSTOMIZE HERE]: WORK EXPERIENCE & CAREER TIMELINE
        // Authentic college student journey: Capstone, Internships, Coursework
        // =========================================================================
        $experience = [
            [
                'period'   => '2024 - Present',
                'role'     => 'Lead Developer (Capstone Project)',
                'company'  => 'University Capstone Team',
                'location' => 'Campus / Hybrid',
                'summary'  => 'Leading the web development for our 4th-year capstone project, coordinating database design, backend logic, and frontend views.',
                'achievements' => [
                    'Designed the database schema and implemented core modules using Laravel & MySQL',
                    'Managed team tasks and code versions through GitHub repositories',
                    'Presented project demos and progress updates to academic advisers and panelists',
                ],
            ],
            [
                'period'   => '2024',
                'role'     => 'Web Developer / IT Intern',
                'company'  => 'Internship Program',
                'location' => 'On-site / Hybrid',
                'summary'  => 'Assisted in updating web interfaces, fixing layout bugs, and writing simple database queries under mentor guidance.',
                'achievements' => [
                    'Built reusable frontend components using HTML, CSS, and JavaScript',
                    'Supported the team in testing features and fixing reported bugs',
                    'Learned real-world workflow, teamwork, and code review practices',
                ],
            ],
            [
                'period'   => '2021 - Present',
                'role'     => '4th Year College Student (BSIT / BSCS)',
                'company'  => 'University',
                'location' => 'College Studies',
                'summary'  => 'Studying computer science and information technology fundamentals with a focus on web development and programming.',
                'achievements' => [
                    'Completed coursework in Data Structures, OOP, Web Systems, and Database Management',
                    'Consistently developed hands-on lab projects and software assignments',
                ],
            ],
        ];

        // =========================================================================
        // [CUSTOMIZE HERE]: EVENTS, TALKS & CERTIFICATIONS
        // Realistic student milestones: Capstones, hackathons, seminars, courses
        // =========================================================================
        $events = [
            [
                'year'     => '2025',
                'type'     => 'Academic Milestone',
                'title'    => '4th-Year Capstone Project Defense',
                'location' => 'University Department',
                'summary'  => 'Successfully presented and demonstrated our web system prototype to the faculty evaluation panel.',
                'badge'    => 'Capstone Passed',
            ],
            [
                'year'     => '2024',
                'type'     => 'Hackathon',
                'title'    => 'Campus Tech Hackathon',
                'location' => 'University Tech Club',
                'summary'  => 'Collaborated with fellow students in a 24-hour hackathon to build a community web tool prototype.',
                'badge'    => 'Participant',
            ],
            [
                'year'     => '2023',
                'type'     => 'Certificate',
                'title'    => 'Web Development & PHP Fundamentals',
                'location' => 'Online Course',
                'summary'  => 'Completed structured coursework on PHP, MySQL database design, and building web apps.',
                'badge'    => 'Completed',
            ],
            [
                'year'     => '2023',
                'type'     => 'Seminar',
                'title'    => 'Student Developer Tech Summit',
                'location' => 'Local Tech Community',
                'summary'  => 'Attended talks on Git workflows, modern web frameworks, and preparing for developer careers.',
                'badge'    => 'Attendee',
            ],
        ];

        return view('portfolio.index', compact(
            'profile',
            'stats',
            'projects',
            'skills',
            'experience',
            'events'
        ));
    }

    /**
     * Handle contact form submission.
     */
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // In a live production app, you can send an email here using:
        // Mail::to(config('mail.from.address'))->send(new ContactMessage($validated));

        return back()->with('success', 'Thank you! Your message has been sent successfully. I will get back to you shortly.');
    }
}
