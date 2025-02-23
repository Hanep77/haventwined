## setup backend

```sh
composer install
```
copy .env.example to .env
then change this
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={your_db_name}
DB_USERNAME=root
DB_PASSWORD=

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
VITE_URL_API=http://localhost:8000 or something  
```sh
npm run dev
```
```sh
npm run build
```
