FROM php:8.1-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    git \
    libpq-dev \
    libzip-dev \
    racket \
    sqlite3 \
    unzip \
    zip \
    --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install \
    bcmath \
    exif \
    pdo \
    pdo_pgsql \
    pgsql \
    zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

