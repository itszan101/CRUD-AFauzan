
## About
 - Ahmad Fauzan - web developer - 20-10-2025

---

## Requirements

- PHP >= 8.2
- Composer
- Laravel versi 12

---

## Instalasi

1. Clone repository:
   ```bash
   git clone https://github.com/itszan101/CRUD-AFauzan.git
   cd Fauzan-Deptech-FE
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy `.env`:
   ```bash
   cp .env.example .env
   ```

4. Sesuaikan konfigurasi `.env` database dan API backend

5. Generate key Laravel:
   ```bash
   php artisan key:generate
   ```

6. Generate Seeder:
   ```bash
   php artisan sb:seed --class=TaskSeeder
   ```

7. Jalankan server:
   ```bash
   php artisan serve
   ```

---

## Route Endpoints

### Task
- `GET /tasks` → Daftar task
- `POST /tasks` → Tambah task
- `PUT /tasks/{id}` → Edit task
- `DELETE /task/{id}` → Hapus task

---