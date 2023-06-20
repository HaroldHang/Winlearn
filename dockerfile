# Download base image ubuntu 22.04
FROM ubuntu:22.04

# LABEL about the custom image
LABEL maintainer="han20tuf@gmail.com"
LABEL version="0.1"
LABEL description="This is a custom Docker Image for PHP-FPM and Nginx."

# Disable Prompt During Packages Installation
ARG DEBIAN_FRONTEND=noninteractive
ARG user
ARG uid
# Update Ubuntu Software repository
RUN apt update
RUN apt upgrade -y

# Install nginx, php-fpm and supervisord from ubuntu repository
RUN apt install -y nginx php-fpm supervisor wget
RUN apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
RUN wget -O mysql_all.deb https://dev.mysql.com/get/mysql-apt-config_0.8.18-1_all.deb
RUN dpkg -i mysql_all.deb

RUN rm -rf /var/lib/apt/lists/*
RUN rm -rf mysql_all.deb
RUN apt clean
RUN apt-get install -y mysql-server

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Define the ENV variable
ENV nginx_vhost /etc/nginx/sites-available/default
ENV php_conf /etc/php/8.1/fpm/php.ini
ENV nginx_conf /etc/nginx/nginx.conf
ENV supervisor_conf /etc/supervisor/supervisord.conf

# Enable PHP-fpm on nginx virtualhost configuration
COPY ./docker-compose/nginx/default.conf ${nginx_vhost}
RUN sed -i -e 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' ${php_conf} && echo "\ndaemon off;" >> ${nginx_conf}

# Copy supervisor configuration
COPY ./docker-compose/supervisord.conf ${supervisor_conf}

RUN mkdir -p /run/php
RUN chown -R www-data:www-data /var/www/html
RUN chown -R www-data:www-data /run/php

RUN mkdir -p /var/www/winlearn
RUN chown -R www-data:www-data /var/www/winlearn
COPY  * /var/www/winlearn
COPY ./.env.example /var/www/winlearn/.env
# Volume configuration
VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/etc/nginx/conf.d", "/var/log/nginx", "/var/www/html"]

# Copy start.sh script and define default command for the container
COPY ./scripts/start.sh /start.sh
RUN chmod +x start.sh
CMD ["./start.sh"]

WORKDIR /var/www/winlearn
RUN composer install

# Expose Port for the Application
EXPOSE 80 443 22 3306
