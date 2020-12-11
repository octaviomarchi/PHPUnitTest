FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

RUN apt-get update

RUN apt update && apt install -y zip git
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php && rm composer-setup.php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod a+x /usr/local/bin/composer
RUN composer install --no-scripts --no-autoloader
COPY . ./
RUN composer dump-autoload --optimize

CMD php -S 0.0.0.0:8000 -t public
EXPOSE 8000