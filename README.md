# Laravel Assessment

This is a basic Laravel API project based on the assessment instructions.

## ✅ What’s Included

- 6 Models: `ObjectType`, `Object`, `Franchise`, `Schedule`, `Parent`, `Student`
- Uses only 2 tables: `object_types` and `objects`
- Relationships are handled using scopes and foreign keys
- All models use the same `objects` table with a `type_id` filter
- Seeders are provided to populate sample data

## 📦 Requirements

- PHP 8.1 or later
- Composer
- MySQL
- Laravel CLI

## ⚙️ Setup Instructions

1. Clone the repo:
   ```bash
   git clone https://github.com/m7mdisam/laravel-assessment.git
   cd laravel-assessment
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy `.env` file:
   ```bash
   cp .env.example .env
   ```

4. Set up your `.env` database section:
   ```
   DB_DATABASE=laravel_api
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Generate app key:
   ```bash
   php artisan key:generate
   ```

6. Run migrations and seeders:
   ```bash
   php artisan migrate:fresh --seed
   ```

7. Start the server:
   ```bash
   php artisan serve
   ```

8. Access API endpoints:
   - `GET /api/franchises`
   - `GET /api/schedules`
   - `GET /api/parents`
   - `GET /api/students`
