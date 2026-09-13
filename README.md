# Umar Portfolio Website

A dynamic personal portfolio website built by Umar Farooq using PHP, MySQL, JavaScript, HTML, and CSS.

This project was created to showcase Umar Farooq's professional profile, technical skills, services, projects, blog content, and professional experience through a dynamic portfolio website with an admin dashboard.

The repository represents an earlier stage of Umar's software engineering journey and focuses on core PHP, MySQL, JavaScript, and frontend development.

## About Umar Farooq

Umar Farooq is a Software Engineer, Full Stack Developer, and Project Manager focused on building web applications, SaaS products, ERP and CRM systems, and AI-powered solutions.

His current technical focus includes:

* PHP and Laravel
* Full Stack Web Development
* SaaS Applications
* ERP and CRM Systems
* REST APIs and Backend Development
* React and Next.js
* TypeScript and Tailwind CSS
* AI Application Development
* Cloud and VPS Solutions
* Project Management

Umar has worked on business applications, SaaS products, ERP systems, CRM platforms, automation workflows, and client projects across different markets.

## Project Overview

Umar Portfolio is a dynamic portfolio management website with two main parts:

1. Public Portfolio Website
2. Admin Dashboard

The public website presents Umar's professional information and portfolio content.

The admin dashboard provides content management functionality for updating portfolio information, services, projects, blog posts, team information, and other website content.

## Main Features

### Professional Portfolio

The website provides sections for:

* Professional introduction
* About information
* Technical skills
* Services
* Portfolio projects
* Blog posts
* Testimonials
* Team information
* Contact information
* Social media profiles

### Dynamic Content

Portfolio content is stored in a MySQL database instead of being hardcoded into individual pages.

This allows the administrator to update:

* About information
* Skills
* Services
* Portfolio projects
* Blog posts
* Team members
* Testimonials
* Website information

without manually changing the frontend templates.

### Admin Dashboard

The `Dashboard/` directory contains the administration area.

The dashboard provides functionality for managing portfolio content through a backend interface.

Main management areas include:

* About information
* Services
* Portfolio projects
* Blog posts
* Team members
* Testimonials
* Website content

## Tech Stack

### Frontend

* HTML5
* CSS3
* JavaScript
* Bootstrap
* jQuery
* Responsive design
* Venobox
* Typed.js
* Owl Carousel
* Font Awesome
* Ionicons

### Backend

* PHP
* MySQL
* MySQLi
* PHP Sessions

### Architecture

The project uses a lightweight PHP architecture with:

* Reusable PHP templates
* Database-driven content
* Shared frontend components
* Server-side form processing
* Session-based administration

This project predates Umar's current Laravel-based development work, so it intentionally uses core PHP rather than Laravel.

## Project Structure

```text
Umar_Portfolio/
│
├── index.php
├── blog-single.php
├── portfolio-details.php
├── portfolio.sql
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── img/
│   └── vendor/
│
├── Dashboard/
│   └── index.php
│
├── front_files/
│   ├── header.php
│   └── footer.php
│
├── forms/
│   └── contact.php
│
└── README.md
```

## Website Sections

### Hero Section

The homepage introduces Umar Farooq and presents his professional roles.

The original implementation supports dynamic role text and portfolio-focused messaging.

### About Section

The About section presents:

* Name
* Professional profile
* Contact information
* Biography
* Technical skills
* Skill percentages

### Services

Services are loaded dynamically from the database.

This allows the administrator to create, update, and remove service offerings without modifying the main frontend page.

### Portfolio

The portfolio section displays completed projects with:

* Project images
* Project title
* Project category
* Project date
* Project description
* Detailed project pages

### Blog

The blog system provides:

* Blog listing
* Featured images
* Categories
* Author information
* Publication dates
* Individual blog pages

### Testimonials

The website supports client testimonials and team information through database-driven content.

### Contact

The contact section includes:

* Contact form
* Email/contact information
* Social profile links
* Location information

## Database

The project uses MySQL for storing dynamic portfolio information.

The main database tables include:

* `tittle`
* `about_me`
* `services`
* `portfolio_post`
* `blog_post`
* `team_members`
* `login`

The complete database structure is available in:

```text
portfolio.sql
```

## Installation

### Requirements

You need:

* PHP
* MySQL or MariaDB
* Apache, Nginx, or another PHP-compatible web server
* Modern web browser

For modern development environments, Laravel Herd, Laragon, XAMPP, MAMP, or a standard PHP server can be used depending on your setup.

### 1. Clone the Repository

```bash
git clone https://github.com/Umar-444/Umar_Portfolio.git
cd Umar_Portfolio
```

### 2. Create the Database

Create a MySQL database named:

```text
portfolio
```

### 3. Import the Database

Import the provided SQL file:

```bash
mysql -u root -p portfolio < portfolio.sql
```

You can also import `portfolio.sql` through phpMyAdmin, Adminer, TablePlus, or another MySQL database client.

### 4. Configure Database Connection

Update the database connection used by the PHP application.

Example:

```php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "portfolio"
);
```

Update the following values according to your local environment:

```text
Host: localhost
Username: root
Password: your_password
Database: portfolio
```

Do not use production database credentials inside the source code.

### 5. Start the Application

Place the project inside your PHP web server directory and open:

```text
http://localhost/Umar_Portfolio/
```

### 6. Open the Admin Dashboard

```text
http://localhost/Umar_Portfolio/Dashboard/
```

Use the administrator credentials configured in the `login` table.

## Security

The original project includes basic security practices such as:

* Session-based authentication
* Input sanitization
* `htmlentities()`
* `strip_tags()`
* `mysqli_real_escape_string()`

For production use, the application should be modernized with stronger security practices.

Recommended improvements include:

* PHP 8+
* Prepared SQL statements
* Password hashing with `password_hash()`
* Password verification with `password_verify()`
* CSRF protection
* Server-side validation
* Secure session configuration
* Environment-based configuration
* HTTPS
* Proper authorization checks
* Secure file upload validation

## Development Notes

This repository represents an earlier PHP-based version of Umar Farooq's personal portfolio.

Umar's current development work has expanded into modern application development using technologies such as:

* Laravel
* PHP
* React
* Next.js
* TypeScript
* Tailwind CSS
* REST APIs
* ERP systems
* CRM platforms
* SaaS applications
* AI integrations
* Cloud infrastructure

The repository is therefore useful as a record of his earlier web development work and the progression of his engineering experience.

## Future Improvements

Potential improvements for this project include:

* Migrate the application to Laravel
* Upgrade to PHP 8+
* Replace raw MySQLi queries with prepared statements
* Add a proper MVC architecture
* Add REST API endpoints
* Improve authentication and authorization
* Add password hashing
* Add CSRF protection
* Add automated tests
* Improve admin dashboard UX
* Add responsive improvements
* Add SEO metadata management
* Add sitemap generation
* Add structured data
* Add analytics integration
* Add email notifications
* Add image optimization
* Add caching

## Author

### Umar Farooq

Software Engineer | Full Stack Developer | SaaS | ERP | Laravel | Next.js

Umar Farooq builds web applications, SaaS products, ERP and CRM systems, and AI-powered applications.

He currently works across backend engineering, frontend development, software architecture, business applications, automation, and project management.

### Connect With Umar

GitHub
https://github.com/Umar-444

LinkedIn
https://linkedin.com/in/Umar444

X
https://x.com/Umar_444__

Portfolio
https://itsumarfarooq.com

## Repository

GitHub repository:

```text
https://github.com/Umar-444/Umar_Portfolio
```

## License

This project is based on the DevFolio Bootstrap portfolio template by BootstrapMade.

Original template:

https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/

Please review and comply with the original template's license terms before redistributing or commercially using template assets.

## Project History

Created: September 2021

This repository represents an earlier version of Umar Farooq's professional portfolio and documents part of his progression from PHP-based web development toward modern software engineering, SaaS, ERP, CRM, Laravel, Next.js, and AI application development.

---

Built by Umar Farooq.

Software Engineer | Full Stack Developer | SaaS | ERP | Laravel | Next.js

GitHub: https://github.com/Umar-444
LinkedIn: https://linkedin.com/in/Umar444
Portfolio: https://itsumarfarooq.com
