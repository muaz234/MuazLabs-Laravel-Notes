FROM php:7.2-fpm

COPY composer.lock composer.json /var/www/ 

RUN  apt-get update &&  apt-get install -y apt-transport-https \
build-essential \
    default-mysql-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev 
RUN   docker-php-ext-configure zip --with-libzip 
RUN   docker-php-ext-install pdo mbstring pdo_mysql exif pcntl 
RUN   curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY . /var/www 
RUN composer install

EXPOSE 8181
