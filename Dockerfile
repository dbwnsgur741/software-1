FROM php:7.2-apache

MAINTAINER dbwnsgur741

COPY ./public-html/ /var/www/html/

RUN docker-php-ext-install mysqli
RUN apt-get update