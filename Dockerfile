ARG PHP_EXTS="bcmath ctype fileinfo mbstring pdo pdo_mysql dom pcntl"
ARG PHP_PECL_EXTS="redis"
ARG COMPOSER_TAG="2.5.4"
ARG NODE_VERSION="18"
ARG PHP_VERSION="8.2-cli-alpine"
ARG NGINX_VERSION="1.23-alpine"

FROM composer:${COMPOSER_TAG} as composer_base

LABEL description="Composer stage for Laravel 10.x"
LABEL version="1.0"

ARG PHP_EXTS
ARG PHP_PECL_EXTS

RUN mkdir -p /opt/apps/laravel-in-kubernetes
WORKDIR /opt/apps/laravel-in-kubernetes

RUN addgroup -g 1000 -S composer \
    && adduser -u 1000 -D -S -G composer composer \
    && chown -R composer /opt/apps/laravel-in-kubernetes

RUN apk add --no-cache ${PHPIZE_DEPS} openssl ca-certificates libxml2-dev oniguruma-dev \
    && docker-php-ext-install -j$(nproc) ${PHP_EXTS} \
    && pecl install ${PHP_PECL_EXTS} \
    && docker-php-ext-enable ${PHP_PECL_EXTS} \
    && apk del ${PHPIZE_DEPS}

COPY --chown=composer . .

USER composer
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --optimize-autoloader

RUN composer dump-autoload --optimize

WORKDIR /opt/apps/laravel-in-kubernetes

FROM node:${NODE_VERSION} as frontend

LABEL description="Frontend stage for Laravel 10.x"
LABEL version="1.0"

COPY --from=composer_base /opt/apps/laravel-in-kubernetes/public public

COPY --from=composer_base /opt/apps/laravel-in-kubernetes /opt/apps/laravel-in-kubernetes

WORKDIR /opt/apps/laravel-in-kubernetes

RUN npm install && \
    npm run build

FROM php:${PHP_VERSION} as cli

LABEL description="CLI stage for Laravel 10.x"
LABEL version="1.0"

ARG PHP_EXTS
ARG PHP_PECL_EXTS

WORKDIR /opt/apps/laravel-in-kubernetes

RUN apk add --virtual build-dependencies --no-cache ${PHPIZE_DEPS} openssl ca-certificates libxml2-dev oniguruma-dev && \
    docker-php-ext-install -j$(nproc) ${PHP_EXTS} && \
    pecl install ${PHP_PECL_EXTS} && \
    docker-php-ext-enable ${PHP_PECL_EXTS} && \
    apk del build-dependencies

COPY --from=composer_base /opt/apps/laravel-in-kubernetes /opt/apps/laravel-in-kubernetes
COPY --from=frontend /opt/apps/laravel-in-kubernetes/public /opt/apps/laravel-in-kubernetes/public

FROM php:${PHP_VERSION} as fpm_server

LABEL description="FPM stage for Laravel 10.x"
LABEL version="1.0"

ARG PHP_EXTS
ARG PHP_PECL_EXTS

WORKDIR /opt/apps/laravel-in-kubernetes

RUN apk add --virtual build-dependencies --no-cache ${PHPIZE_DEPS} openssl ca-certificates libxml2-dev oniguruma-dev && \
    docker-php-ext-install -j$(nproc) ${PHP_EXTS} && \
    pecl install ${PHP_PECL_EXTS} && \
    docker-php-ext-enable ${PHP_PECL_EXTS} && \
    apk del build-dependencies

USER  www-data

COPY --from=composer_base --chown=www-data /opt/apps/laravel-in-kubernetes /opt/apps/laravel-in-kubernetes
COPY --from=frontend --chown=www-data /opt/apps/laravel-in-kubernetes/public /opt/apps/laravel-in-kubernetes/public

RUN php artisan event:cache && \
    php artisan route:cache && \
    php artisan view:cache

FROM nginx:${NGINX_VERSION} as web_server

LABEL description="NGINX stage for Laravel 10.x"
LABEL version="1.0"

WORKDIR /opt/apps/laravel-in-kubernetes

COPY docker/nginx.conf.template /etc/nginx/templates/default.conf.template

COPY --from=frontend /opt/apps/laravel-in-kubernetes/public /opt/apps/laravel-in-kubernetes/public

FROM cli as cron

LABEL description="Cron stage for Laravel 10.x"
LABEL version="1.0"

WORKDIR /opt/apps/laravel-in-kubernetes

RUN touch laravel.cron && \
    echo "* * * * * cd /opt/apps/laravel-in-kubernetes && php artisan schedule:run" >> laravel.cron && \
    crontab laravel.cron

CMD ["crond", "-l", "2", "-f"]

FROM cli