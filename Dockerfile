# Use an official PHP image with Apache server
FROM php:7.4-apache

# Copy application files to the Apache document root
COPY ./html /var/www/html

# Install MySQLi extension for PHP
RUN docker-php-ext-install mysqli

# Expose port 80 for the Apache server
EXPOSE 80
