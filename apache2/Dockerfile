FROM php:8.3-apache

#enable apache2 mods
RUN a2enmod rewrite
RUN a2enmod ssl
RUN a2enmod headers

#create directories for logging and certificates
RUN mkdir -p /etc/apache2/ssl
RUN mkdir -p /var/log/httpd/domains
RUN touch /var/log/httpd/domains/bebmeccanica.it.bytes
RUN touch /var/log/httpd/domains/bebmeccanica.it.log
RUN touch /var/log/httpd/domains/bebmeccanica.it.error.log

#install php libraries
RUN apt update \
    && apt -y upgrade \
    && apt install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libtidy-dev \
        libzip-dev \
        libbz2-dev \
        libcurl4-openssl-dev \
        libxml2-dev \
        libgmp-dev \
        libssl-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql exif tidy zip bz2 ctype curl dom fileinfo filter ftp gettext gmp

#Copy SSL keys
#COPY ./ssl/localhost.pem /etc/apache2/ssl/bebmeccanica.pem
#COPY ./ssl/localhost-key.pem /etc/apache2/ssl/bebmeccanica-key.pem

#Copy apache conf files
COPY ./bebmeccanica.it.httpd.conf /etc/apache2/sites-available/000-default.conf
COPY ./bebmeccanica.it.httpd.ssl.conf /etc/apache2/sites-available/000-default-ssl.conf

#enable default ssl vhost
RUN a2ensite 000-default-ssl

COPY ./php/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

EXPOSE 80
EXPOSE 443
