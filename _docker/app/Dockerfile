FROM php:8.2-fpm

RUN pecl install redis && docker-php-ext-enable redis

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN apt-get update && apt-get install -y \
      supervisor \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      nano \
      libwebp-dev \
      libjpeg-dev \
      git && \
      docker-php-ext-install pdo && \
      docker-php-ext-install pdo_pgsql && \
      docker-php-ext-install pgsql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

COPY . /var/www

WORKDIR /var/www

RUN if ! test -f /var/www/.env; then \
      cp .env.example .env; \
    fi

#COPY app            /var/www/app
#COPY bootstrap      /var/www/bootstrap
#COPY config         /var/www/config
#COPY database       /var/www/database
#COPY public         /var/www/public
#COPY resources      /var/www/resources
#COPY routes         /var/www/routes
#COPY storage        /var/www/storage
#COPY artisan        /var/www/artisan
#COPY package.json   /var/www/package.json
#COPY vite.config.js /var/www/vite.config.js
#
#COPY composer.*     ./

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin
# alias
RUN echo "alias a='artisan'" >> /root/.bashrc

#RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
#RUN apt-get install -y nodejs
#RUN apt-get update
#RUN sudo apt-get install -y build-essential
#RUN apt-get install -y npm

# Настройка supervisor
COPY ./_docker/supervisor/laravel-worker.conf /etc/supervisor/conf.d/laravel-worker.conf

#
#RUN composer install \
#      --no-interaction \
#      --no-plugins \
#      --no-suggest \
#      --no-scripts \
#      --no-autoloader \
#      --prefer-dist
#
#RUN composer dump-autoload  --no-scripts --optimize && \
#    chown -R root:www-data /var/www && \
##    chmod 755 -R /var/www
#    chmod 755 -R /var/www && \
#    chmod -R 775 /var/www/storage && \
#    chmod -R 775 /var/www/bootstrap/cache

#RUN     chown -R root:www-data /var/www && \
#        chmod 755 -R /var/www

#RUN if ! test -f /var/www/.env; then \
#      cp .env.example .env; \
#    fi

#WORKDIR /var/www
#
ENTRYPOINT composer install \
    --no-interaction \
    --no-plugins \
    --no-suggest \
    --no-scripts \
    --no-autoloader \
    --prefer-dist && \
    composer dump-autoload  --no-scripts --optimize && \
    chown -R root:www-data /var/www && \
    chmod 777 -R /var/www && \
    chmod -R 777 /var/www/storage && \
    chmod -R 777 /var/www/bootstrap/cache && \
    cp .env.example .env && \
    php artisan key:generate && \
    php-fpm



