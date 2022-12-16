FROM php:8.2-fpm-alpine3.16

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apk add --no-cache --upgrade libcurl \
    libpng-dev libxml2-dev curl-dev git zip

# Install PHP extension installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

# Install PHP extensions
RUN install-php-extensions pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN adduser -S $user -G root -u $uid
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:root /home/$user

# Set working directory
WORKDIR /var/www

# Copy all files to workdir
COPY . .

# Install project dependencies
RUN composer update
RUN composer install
RUN composer dump-autoload

# Wrapping the project with native commands
RUN php artisan optimize
RUN php artisan route:clear
RUN php artisan route:cache
RUN php artisan config:clear
RUN php artisan config:cache
RUN php artisan view:clear
RUN php artisan view:cache
RUN php artisan key:generate
RUN php artisan config:cache

USER $user
