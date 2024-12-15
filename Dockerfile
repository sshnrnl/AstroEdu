# Use the PHP 8.3 image
FROM php:8.3-fpm

# Install dependencies and extensions for Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    libmariadb-dev-compat \
    libzip-dev \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip bcmath mbstring

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy application files to the working directory
COPY . /var/www/html

# Install dependencies via Composer
RUN composer install --no-dev --optimize-autoloader

# Expose the port for the Laravel development server
EXPOSE 8000

# Run the Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
