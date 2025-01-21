# Use the official PHP image with Apache
FROM php:8.1-apache

# Set the working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl \
    libonig-dev libxml2-dev libzip-dev git && \
    docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the Laravel application into the container
COPY . /var/www/html

# Set permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 for Apache
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
