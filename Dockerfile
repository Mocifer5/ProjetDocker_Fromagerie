# Utilise l'image de base PHP avec Apache
FROM php:7.4-apache

# Installe l'extension mysqli
RUN docker-php-ext-install mysqli

# Copie le code source dans le conteneur
COPY ./html /var/www/html/

# Active les modules Apache 
RUN a2enmod rewrite
