
# Welcome in my project

Auto Man is a car dealership website built with Laravel and Tailwind CSS. It allows users to browse cars, view details, and contact the dealership, while providing an admin dashboard to manage cars, appointments, and other data.

## Installeren
Clone the repository:


```bash
git clone https://github.com/yourusername/auto-man.git
cd auto-man

```
- Installeer de dependencies

```bash
composer install
npm install
npm run dev


```
- Copy .env.example to .env and set up your database credentials:

```bash
cp .env.example .env
php artisan key:generate
```

- Run migrations and seeders:

```bash
php artisan migrate --seed
```

- Serve the application locally:

```bash
composer run dev 
or
php artisan serve
```
- For dashboard Admin 

Visit: http://127.0.0.1:8000/admin/login
email : test@example.com
password : password



Veel succes!
Amin

