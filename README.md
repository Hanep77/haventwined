landing page responsif dan admin panel untuk Haventwined, dibuat menggunakan vuejs dan laravel dengan bantual filament untuk admin panel

## setup backend

```sh
composer install
```
- copy .env.example to .env
- then change this
- DB_CONNECTION=mysql
- DB_DATABASE={your_db_name}

```sh
php artisan key:generate
```
```sh
php artisan migrate --seed
```
```sh
php artisan make:filament-user
```
```sh
php artisan storage:link
```
```sh
php artisan serve
```

- open localhost:8000/admin
- click edit
- upload images


## Setup frontend
```sh
npm install
```
create .env file
VITE_API_URL=http://localhost:8000 or something  
```sh
npm run dev
```
```sh
npm run build
```
