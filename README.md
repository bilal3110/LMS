# Horizon Learning Management System

Horizon LMS is a Laravel web application for Blue Horizon school. It provides a public school website, an administrator panel, and a student portal.

## Features

- Public home, about, gallery, contact, and admission pages.
- Contact messages and student admission applications.
- Course catalogue and course application forms.
- Admin tools for reviewing applications and messages, managing students and student portal accounts, maintaining courses and class subjects, and viewing the dashboard.
- Student login and pages for profile information, class subjects, course applications, and diary.
- Separate session-based authentication for administrators and students.
- Laravel migrations, model factories, and demo data.

## Requirements

- PHP `^8.0.2` and Composer
- MySQL
- Node.js and npm if you need to build the Vite frontend assets

The project uses Laravel `^9.19`. Faker is a development dependency used by the factories and demo seeder, so install Composer dependencies without `--no-dev` when setting up a development database.

## Local setup

In PowerShell, from the project directory:

```powershell
Copy-Item .env.example .env
composer install
php artisan key:generate
```

Create a MySQL database, then edit `.env` to set the connection values (`DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`). The example configuration uses MySQL on `127.0.0.1:3306` and database name `lms`.

Run the schema migrations and load sample data:

```powershell
php artisan migrate --seed
```

Start the application:

```powershell
php artisan serve
```

Visit <http://127.0.0.1:8000>.

The repository includes Vite configuration and npm scripts for the `resources/css/app.css` and `resources/js/app.js` entry points. To install JavaScript dependencies and build those assets:

```powershell
npm install
npm run build
```

For frontend development with Vite's watcher, run `npm run dev` in a separate terminal.

## Demo accounts

The demo seeder creates this administrator account:

| Role | Email | Password |
| --- | --- | --- |
| Administrator | `admin@horizon.edu.pk` | `Horizon123` |

It also creates student records and portal accounts. Each seeded portal email is the student's generated roll number followed by `@horizon.edu.pk`; the password is `Horizon123`. Look up a generated roll number in the `students` or `student_portal` table to sign in.

These are predictable local-demo credentials. Do not use them in a production deployment; change or remove the demo accounts and configure production credentials securely.

## Main routes

| Area | Routes |
| --- | --- |
| Public website | `/`, `/about`, `/gallery`, `/contact`, `/admission` |
| Course catalogue and application | `/admission/course` |
| Admin registration and login | `/adminPanel/signup`, `/adminPanel/login` |
| Student login | `/studentPortal/login` |
| Authenticated API example | `/api/user` (Sanctum authentication required) |

Admin dashboard and management pages are under `/adminPanel`; student dashboard and account pages are under `/studentPortal`. See `routes/web.php` and `routes/api.php` for the full route definitions. The `/send-email` route is a mail test endpoint; review its implementation and configure mail before using it.

## Database and demo seeding

Migrations in `database/migrations` define:

- Administrator accounts, students, student portal accounts, and school admission records
- Courses, course applications, and class subjects
- Contact messages
- Laravel users, password resets, failed jobs, and Sanctum personal access tokens

`php artisan db:seed` runs `Database\Seeders\LmsDemoSeeder`. It creates an administrator if one does not already exist, subjects for classes 1–10, and sample admission records, courses, students, portal accounts, course applications, and contact messages. Factory-generated records are added when the seeder is run again, so repeated seeding can add duplicate sample data. Run it only against a development database, never against data you need to preserve.

Seeders are in `database/seeders`; factories are in `database/factories`.

## Project structure

```text
app/
  Http/Controllers/   Public, admin, student, and mail request handlers
  Http/Middleware/    Admin and student access middleware
  Models/             Eloquent models
database/
  factories/          Factory definitions for sample records
  migrations/         Database schema
  seeders/            Demo data
resources/views/
  frontend/           Public website
  adminPanel/         Admin interface
  studentPortal/      Student interface
routes/
  web.php             Browser routes
  api.php             API routes
public/               Static images, stylesheets, and scripts
```

## Tests

Run the test suite with:

```powershell
php artisan test
```

The current suite includes Laravel's example feature and unit tests.

## Configuration

- Keep `.env` local; do not commit database credentials, application keys, or mail credentials.
- Configure `MAIL_*` values in `.env` before using mail features.
- Admin and student session guards are defined in `config/auth.php`.
