FROM mcr.microsoft.com/vscode/devcontainers/php:8.1

# Install MySQL
RUN apt-get update && apt-get install -y mysql-server

# Install additional PHP extensions and Composer
RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Setup MySQL
COPY init-mysql.sh /tmp/
RUN chmod +x /tmp/init-mysql.sh
RUN /tmp/init-mysql.sh

# Clean up
RUN apt-get clean -y && rm -rf /var/lib/apt/lists/* /tmp/library-scripts
