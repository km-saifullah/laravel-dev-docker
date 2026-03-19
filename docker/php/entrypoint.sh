#!/bin/sh

cd /var/www

# Install dependencies
if [ ! -d "vendor" ]; then
    composer install
fi

# Laravel permissions
chown -R www-data:www-data storage bootstrap/cache

# Wait for database
echo "Waiting for database..."
sleep 10

# Run migrations automatically
php artisan migrate --force

# Start PHP-FPM
php-fpm
