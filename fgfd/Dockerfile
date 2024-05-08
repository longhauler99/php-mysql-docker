FROM php:8.2-apache

# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install mysqli pdo pdo_mysql gd
    
EXPOSE 80

# CMD [ "apache2-foreground" ]