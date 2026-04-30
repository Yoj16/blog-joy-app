FROM php:8.3-apache

# 1. Installation des extensions nécessaires pour MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# 2. Définition du répertoire de travail
WORKDIR /var/www/html

# 3. Copie du code source vers le conteneur
# Comme ton index.php est à la racine, il sera dans /var/www/html/index.php
COPY . /var/www/html

# 4. Ajustement des permissions pour la sécurité OpenShift (Arbitrary User IDs)
# OpenShift utilise un utilisateur aléatoire appartenant au groupe root (0)
RUN chgrp -R 0 /var/www/html && \
    chmod -R g+rwX /var/www/html

# 5. Configuration d'Apache pour le port 8080 (obligatoire sur OpenShift)
# On s'assure que le DocumentRoot reste /var/www/html (pas de /public ici)
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# 6. Exposition du port 8080
EXPOSE 8080