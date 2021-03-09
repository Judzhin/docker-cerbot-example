FROM php:7.2-fpm as scratch

ARG APP_ENV
ENV APP_ENV=${APP_ENV}

# Add php config
COPY .docker/php-fpm/php_${APP_ENV}.ini /usr/local/etc/php/php.ini
COPY .docker/php-fpm/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN apt-get update && apt-get install -y wget \
    && chmod 777 -R /tmp && chmod o+t -R /tmp

RUN wget https://getcomposer.org/installer -O - -q \
    | php -- --install-dir=/bin --filename=composer --quiet \
ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/html

# DEV env (local)
FROM scratch as dev

FROM scratch as test

# PROD env (kubernetes)
FROM scratch as prod

USER www-data:www-data
CMD ["php-fpm"]
EXPOSE 9000