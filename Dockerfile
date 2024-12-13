# PHP 8.2 va Composer o'rnatilgan rasmi
FROM php:8.2-fpm

# Kerakli kengaytmalarni o'rnatish
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl && \
    docker-php-ext-install pdo pdo_mysql zip

# Composerni o'rnatish
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Laravel loyihangizni nusxalash
WORKDIR /var/www/html
COPY . .

# Cache ni tozalash va sozlash
RUN composer install --optimize-autoloader --no-dev && \
    php artisan config:cache && \
    php artisan route:cache

# Xizmatni boshlash
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
