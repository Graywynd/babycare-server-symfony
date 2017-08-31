FROM  codereviewvideos/www.dev

RUN sudo apt-get update
RUN sudo apt-get install -y autoconf pkg-config libssl-dev
RUN sudo pecl install mongodb-1.2.2
RUN sudo docker-php-ext-install bcmath
RUN sudo echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

# Install Laravel dependencies
RUN sudo apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev

RUN sudo docker-php-ext-install iconv mcrypt mbstring \
    && docker-php-ext-install zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd


WORKDIR /var/www/dev
