FROM php:8.3-apache

# Extensions PHP
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copier ton code dans l'image
COPY . /var/www/html

# Permissions compatibles OpenShift
RUN chgrp -R 0 /var/www/html && \
    chmod -R g+rwX /var/www/html

# Apache sur 8080 (important pour OpenShift)
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 8080