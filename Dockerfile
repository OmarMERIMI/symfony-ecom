FROM php:8.2-fpm-alpine

# Install system dependencies & PHP extensions
RUN apk add --no-cache \
    git \
    unzip \
    libzip-dev \
    icu-dev \
    libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
    intl \
    opcache \
    zip \
    pdo \
    pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
