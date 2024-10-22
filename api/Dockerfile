# Use the official PHP image with Apache server
FROM php:7.4-apache

# Install MySQLi extension for PHP (required for API server to interact with MySQL database)
RUN docker-php-ext-install mysqli

# Copy the API application files (PHP) to the Apache document root
COPY ./api.php /var/www/html/

# Expose port 80 for the Apache server
EXPOSE 80
