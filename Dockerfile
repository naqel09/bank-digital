FROM php:8.3-cli

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install\
    pdo \
    pdo_pgsql \
    zip

# Install Node.js 22 + npm
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock ./

COPY . .

RUN composer install \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

# Install frontend dependencies
RUN npm install

# Build Tailwind + Vite (production — satu-satunya yang dibutuhkan di Docker)
RUN npm run build

RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD [ "php", "artisan", "serve","--host=0.0.0.0", "--port=8000"]
