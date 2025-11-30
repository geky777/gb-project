# Use official PHP 8.2 FPM image
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip curl nginx libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files first (for build caching)
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy rest of the application
COPY . .

# Laravel setup
RUN php artisan key:generate --force \
    && php artisan config:cache \
    && php artisan route:cache

# Set correct permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Copy custom Nginx config (you’ll need to create nginx/default.conf)
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM
CMD service nginx start && php-fpm
