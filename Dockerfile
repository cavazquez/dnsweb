FROM php:8-apache

COPY src/ /var/www/html/

RUN mkdir /hostfile

RUN chown -R www-data.www-data /var/www/html /hostfile

VOLUME /hostfile
