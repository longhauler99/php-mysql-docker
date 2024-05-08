# Use an official PHP image as the base image
FROM php:8.2-apache

# Install additional PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy application files into the container
COPY . /var/www/html/

# Expose port 80 to the Docker host
EXPOSE 80
