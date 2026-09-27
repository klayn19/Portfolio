# Developer Portfolio - Laravel Edition

A responsive developer portfolio built with the **Laravel Framework**, tailored to showcase software engineering and web development projects. Designed based on the clean aesthetic from your reference guide.

---

## 🚀 How to Run the Portfolio

### Option 1: Using Laravel Artisan (Recommended)

Open your terminal in `c:\xampp\htdocs\portfolio` and run:

```bash
php artisan serve
```

Then open your browser to: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

### Option 2: Using XAMPP Apache

1. Open **XAMPP Control Panel** and start **Apache**.
2. Open your browser to: **[http://localhost/portfolio/public/](http://localhost/portfolio/public/)**

---

## 🛠️ Where to Modify the Code

Every file includes descriptive comments marked with `[CUSTOMIZE HERE]` so you can easily locate what you want to edit.

| What do you want to change?                        | File to edit                                                                                                                       |
| -------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| **Your Name, Bio, Email, Socials & Projects Data** | [`app/Http/Controllers/PortfolioController.php`](file:///c:/xampp/htdocs/portfolio/app/Http/Controllers/PortfolioController.php)   |
| **Top Logo ("AW"), Nav Links & Social Icons**      | [`resources/views/partials/navbar.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/navbar.blade.php)         |
| **Hero Section (Title, Bio text, Avatar)**         | [`resources/views/partials/hero.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/hero.blade.php)             |
| **Projects Showcase Layout, Cards & Filters**      | [`resources/views/partials/projects.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/projects.blade.php)     |
| **Project Quick View Modal**                       | [`resources/views/partials/modal.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/modal.blade.php)           |
| **Skills & Progress Bars**                         | [`resources/views/partials/skills.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/skills.blade.php)         |
| **Work Experience Timeline**                       | [`resources/views/partials/experience.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/experience.blade.php) |
| **Events, Talks & Hackathons**                     | [`resources/views/partials/events.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/events.blade.php)         |
| **Contact Form & Info Box**                        | [`resources/views/partials/contact.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/contact.blade.php)       |
| **Footer & Copyright**                             | [`resources/views/partials/footer.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/partials/footer.blade.php)         |
| **Page Title, SEO Meta & Master Layout**           | [`resources/views/layouts/app.blade.php`](file:///c:/xampp/htdocs/portfolio/resources/views/layouts/app.blade.php)                 |

---

## 🖼️ How to Change the Avatar & Project Images

1. **Avatar Image**:
    - The default avatar is at [`public/images/avatar.svg`](file:///c:/xampp/htdocs/portfolio/public/images/avatar.svg) (matching your reference image).
    - To use your own photo, place an image (e.g. `my-photo.jpg`) inside `public/images/`.
    - In [`app/Http/Controllers/PortfolioController.php`](file:///c:/xampp/htdocs/portfolio/app/Http/Controllers/PortfolioController.php), update:
        ```php
        'avatar' => 'images/my-photo.jpg',
        ```

2. **Project Screenshots / Mockups**:
    - Put your project screenshots or mockup images inside `public/images/projects/`.
    - Update the `'image'` path inside the `$projects` array in [`PortfolioController.php`](file:///c:/xampp/htdocs/portfolio/app/Http/Controllers/PortfolioController.php).

---

## 🧪 Testing

To run the automated tests:

```bash
php artisan test
```

All feature and unit tests are configured to verify that the portfolio layout renders correctly and the contact form validation functions properly.
