## setup
composer install
cp .env.example .env
php artisan key:generate.

## create DB
php artisan migrate

## upload
php artisan storage:link


