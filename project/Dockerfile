
FROM php:apache

COPY . /var/www/html/

RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite

RUN service apache2 restart

CMD ["apache2-foreground"]
