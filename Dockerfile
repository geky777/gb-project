# ---------------------------------------------------------
# 1. Base PHP-FPM Image
# ---------------------------------------------------------
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip curl nginx gettext-base libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------------------------------------------------------
# 2. Set working directory
# ---------------------------------------------------------
WORKDIR /var/www/html
ENV PORT=80

# Copy all project files
COPY . .

# ---------------------------------------------------------
# 3. Install PHP dependencies
# ---------------------------------------------------------
RUN composer install --no-dev --optimize-autoloader

# ---------------------------------------------------------
# 4. Set correct permissions
# ---------------------------------------------------------
RUN chown -R www-data:www-data storage bootstrap/cache

# ---------------------------------------------------------
# 5. Nginx Configuration
# ---------------------------------------------------------
RUN rm -f /etc/nginx/sites-enabled/default
COPY public/default.conf /etc/nginx/conf.d/default.conf.template

# ---------------------------------------------------------
# 6. Expose port
# ---------------------------------------------------------
EXPOSE 80

# ---------------------------------------------------------
# 7. Start PHP-FPM + Nginx correctly
# ---------------------------------------------------------
CMD ["sh", "-c", "envsubst '$PORT' < /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf && php-fpm & nginx -g 'daemon off;'"]
