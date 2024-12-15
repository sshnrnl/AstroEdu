# Gunakan image PHP dengan Nginx
FROM php:8.0-fpm

# Install ekstensi yang dibutuhkan untuk Laravel, seperti ekstensi MySQL dan lainnya
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    libmariadb-dev-compat \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory ke lokasi aplikasi Laravel
WORKDIR /var/www/html

# Salin seluruh source code aplikasi ke direktori kerja
COPY . /var/www/html
WORKDIR /var/www/html/public

# Jalankan composer untuk menginstal dependency
RUN composer install --no-dev --optimize-autoloader

# Berikan izin pada folder storage dan bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html

# Expose port yang digunakan oleh aplikasi
EXPOSE 80

# Jalankan PHP-FPM untuk server backend
CMD ["php-fpm", "-F"]

RUN php artisan route:clear && php artisan config:clear && php artisan cache:clear && php artisan view:clear
