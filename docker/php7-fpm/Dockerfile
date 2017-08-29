FROM php:7.0-fpm
 
MAINTAINER Khalil ben aissa && seifeddine khiari
 
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zlib1g-dev \
    libicu-dev \
    g++
 
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version
 
# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Paris /etc/localtime
RUN "date"
 
# Install APCu v5.1.7
RUN mkdir -p /usr/src/php/ext
RUN curl -L -o /tmp/apcu-5.1.7.tgz https://pecl.php.net/get/apcu-5.1.7.tgz
RUN tar xfz /tmp/apcu-5.1.7.tgz
RUN rm -r /tmp/apcu-5.1.7.tgz
RUN mv apcu-5.1.7  /usr/src/php/ext/apcu
 
# Install the available extensions
RUN docker-php-ext-install mongodb
 


# Configure short open tag for Symfony
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/php.ini
 
# for mac
RUN usermod -u 501 www-data 
 
WORKDIR /var/www/babycare-server-symfony