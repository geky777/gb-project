FROM richarvey/nginx-php-fpm:php8.1

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install --no-dev --optimize-autoloader \
    && php artisan key:generate --force \
    && php artisan config:cache \
    && php artisan route:cache

CMD ["/start.sh"]