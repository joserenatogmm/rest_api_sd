FROM phpdockerio/php74-fpm:latest

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    php7.4-sqlite3 \
    php7.4-bcmath \
    php7.4-gd \
    php7.4-imap \
    php-yaml \
    vim \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

WORKDIR "/application"