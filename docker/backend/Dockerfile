FROM php:fpm

# Install dependencies
# RUN apt-get update && apt-get install -y \
#    build-essential \
#    libpng-dev \
#    libjpeg62-turbo-dev \
#    libfreetype6-dev \
#    locales \
#    libonig-dev \
#    zip \
#    libzip-dev \
#    jpegoptim optipng pngquant gifsicle \
#    vim \
#    unzip \
#    git \
#    curl
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git
# RUN pecl install xdebug-3.0.1 \
#    && docker-php-ext-enable xdebug
WORKDIR /var/www/backend

COPY ./backend/composer.lock ./backend/composer.json ./backend/composer.phar ./
# Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
# RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
# RUN docker-php-ext-configure gd --with-freetype --with-jpeg
# RUN docker-php-ext-install gd
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo_mysql

# RUN sudo apt install --no-install-recommends php8.1
# RUN apt install php-cli
# Install composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/var/www/backend --filename=composer
# RUN php /var/www/backend/composer.phar update

# COPY ./backend/vendor vendor

USER root

COPY ./docker/backend/ext /usr/local/lib/php/extensions/no-debug-non-zts-20220829

EXPOSE 9000
CMD ["php-fpm"]


