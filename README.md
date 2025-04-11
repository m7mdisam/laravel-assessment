# Laravel Assignment API (Scoped Models in Shared Table)

This project uses a single `objects` table to implement 4 logical models:
- Franchise
- Schedule
- Parent
- Student

## ✅ How It Works

- All records are stored in the `objects` table
- Global scopes are used to filter each model by `type_id`
- Relationships:
  - Student belongs to Parent
  - Parent belongs to Franchise
  - Schedule belongs to Franchise

## 🚀 How to Run

1. Clone the repo
2. Install dependencies:

```bash
composer install
```

3. Copy `.env.example` to `.env`, and set up your database
4. Run the setup:

```bash
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

## 📦 Available API Endpoints

- `GET /api/franchises`
- `POST /api/schedules`
- `PUT /api/parents/{id}`
- `DELETE /api/students/{id}`

All endpoints return JSON responses only.

## 📌 Notes

- Uses only two tables: `object_types` and `objects`
- No UI — pure API with structured controller logic
