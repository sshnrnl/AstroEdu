# Gunakan image PHP dengan Nginx
FROM php:8.0-fpm


# Install ekstensi yang dibutuhkan untuk Laravel, seperti ekstensi MySQL dan lainnya
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git libmysqlclient-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set direktori kerja di dalam kontainer
WORKDIR /var/www

# Salin file aplikasi Laravel ke dalam kontainer
COPY . .

# Install dependensi PHP Laravel (dengan Composer)
RUN composer install --no-dev --optimize-autoloader

# Pastikan file storage dan cache Laravel bisa ditulis
RUN chmod -R 775 storage bootstrap/cache

# Expose port yang digunakan oleh aplikasi
EXPOSE 80

# Jalankan PHP-FPM untuk server backend
CMD ["php-fpm"]
