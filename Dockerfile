FROM php:8.1-apache

# Install ekstensi PHP yang dibutuhkan
RUN docker-php-ext-install mysqli

# Aktifkan mod_rewrite untuk Apache
RUN a2enmod rewrite

# Salin semua file ke direktori Apache
COPY . /var/www/html/

# Ubah permission
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
