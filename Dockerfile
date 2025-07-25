# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instala las extensiones necesarias para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
  && docker-php-ext-install pgsql pdo_pgsql

# Habilita el módulo rewrite (opcional)
RUN a2enmod rewrite

# Copia tu proyecto al directorio público de Apache
COPY . /var/www/html/
