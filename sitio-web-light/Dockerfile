FROM php:8.1-apache
COPY . /var/www/html/
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite
EXPOSE 80