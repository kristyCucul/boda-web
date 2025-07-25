# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instala la extensión mysqli para MySQL
RUN docker-php-ext-install mysqli

# Habilita el módulo rewrite (por si usas URLs amigables)
RUN a2enmod rewrite

# Copia todo tu proyecto a la carpeta de Apache
COPY . /var/www/html/
