FROM php:apache

COPY 000-default.conf /etc/apache2/sites-available/

RUN apt-get update && apt-get install -y gnupg2 && \
  a2enmod rewrite

WORKDIR /var/www/html/demo-docker-server

