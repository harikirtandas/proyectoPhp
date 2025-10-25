# Usar la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Configuración de PHP para desarrollo
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && echo "display_errors=On" >> $PHP_INI_DIR/php.ini \
    && echo "display_startup_errors=On" >> $PHP_INI_DIR/php.ini \
    && echo "error_reporting=E_ALL" >> $PHP_INI_DIR/php.ini

# Instalar Composer globalmente (opcional, útil para dependencias)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copiar el código de la app (aunque en desarrollo usamos volumen)
COPY ./src /var/www/html

# Cambiar permisos para que Apache pueda escribir si es necesario
RUN chown -R www-data:www-data /var/www/html

# Usar usuario seguro
USER www-data