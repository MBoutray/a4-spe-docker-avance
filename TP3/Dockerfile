FROM php:8.2-apache

COPY config/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY config/apache.conf /etc/apache2/conf-available/app.conf
RUN a2enconf app

COPY src/ /var/www/html/

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

EXPOSE 80

CMD [ "apache2ctl", "-D", "FOREGROUND" ]