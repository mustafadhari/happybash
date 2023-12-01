# Use an official PHP image with PHP 8.1
FROM php:8.1-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install MySQL
RUN apt-get update \
    && apt-get install -y mysql-server \
    && rm -rf /var/lib/apt/lists/*

# Start MySQL and create a database
RUN service mysql start && \
    mysql -e "CREATE DATABASE laravel;"

# Set working directory
WORKDIR /var/www

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Expose port 8000 for Laravel
EXPOSE 8000
