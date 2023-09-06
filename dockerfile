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
RUN apt install -y nginx php-fpm supervisor
RUN apt-get install -y \
    git \
    curl \
    wget \
    dpkg \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
RUN apt install -y mysql-server
#RUN wget -O mysql_all.deb https://dev.mysql.com/get/mysql-apt-config_0.8.18-1_all.deb
#RUN dpkg -i mysql_all.deb
RUN apt install php8.1-common php8.1-mysql php8.1-xml php8.1-xmlrpc php8.1-curl php8.1-gd php8.1-imagick php8.1-cli php8.1-dev php8.1-imap php8.1-mbstring php8.1-opcache php8.1-soap php8.1-zip php8.1-redis php8.1-intl -y
#RUN curl -sL https://deb.nodesource.com/setup_18.x -o nodesource_setup.sh
RUN ls ~/
#RUN touch ~/.bashrc && chmod +x ~/.bashrc
#RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
#RUN export NVM_DIR="$([ -z "${XDG_CONFIG_HOME-}" ] && printf %s "${HOME}/.nvm" || printf %s "${XDG_CONFIG_HOME}/nvm")" [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
#RUN . ~/.nvm/nvm.sh && . ~/.bashrc
#RUN nvm install v18.14.0
#RUN apt -y install nodejs
# Get NodeJS
COPY --from=node:18.14.0-slim /usr/local/bin /usr/local/bin
# Get npm
COPY --from=node:18.14.0-slim /usr/local/lib/node_modules /usr/local/lib/node_modules
RUN node -v
RUN npm -v
#RUN apt install npm

#RUN rm -rf /var/lib/apt/lists/*
#RUN rm -rf mysql_all.deb
#RUN apt clean

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#Create system user to run Composer and Artisan Commands
#RUN useradd -G www-data,root -u $uid -d /home/$user $user
#RUN mkdir -p /home/$user/.composer && \
#    chown -R $user:$user /home/$user

# Define the ENV variable
ENV nginx_vhost /etc/nginx/sites-available/default
ENV nginx_conf /etc/nginx/nginx.conf
ENV php_conf /etc/php/8.1/fpm/php.ini
ENV supervisor_conf /etc/supervisor/supervisord.conf
# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1
#ENV MYSQL_ROOT_PASSWORD ""
# Enable PHP-fpm on nginx virtualhost configuration
COPY ./docker-compose/nginx/default ${nginx_vhost}
RUN sed -i -e 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' ${php_conf} && echo "\ndaemon off;" >> ${nginx_conf}

# Copy supervisor configuration
COPY ./docker-compose/supervisord.conf ${supervisor_conf}

RUN mkdir -p /run/php
RUN chown -R www-data:www-data /run/php
RUN chown -R www-data:www-data /var/www/html

RUN mkdir -p /var/www/winlearn
COPY  . /var/www/winlearn
RUN chown -R www-data:www-data /var/www/winlearn
RUN chown -R www-data.www-data /var/www/winlearn/storage
RUN chown -R www-data.www-data /var/www/winlearn/bootstrap/cache
# Volume configuration
VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/etc/nginx/conf.d", "/var/log/nginx", "/var/www/html", "/var/run"]

# Copy start.sh script and define default command for the container
COPY ./scripts/start.sh /start.sh
RUN chmod +x start.sh
RUN ls /etc/init.d && ps
RUN cat ${nginx_vhost}
#CMD ["/etc/init.d/nginx restart"]
RUN /etc/init.d/mysql restart

WORKDIR /var/www/winlearn
RUN ls && pwd
RUN composer install
RUN npm install
RUN chmod +x ./scripts/build.sh
#CMD ["./scripts/build.sh"]

WORKDIR /
CMD ["./start.sh"]

WORKDIR /var/www/winlearn
#RUN /etc/init.d/mysql status
RUN printenv
RUN php artisan key:generate && \
php artisan cache:clear && \
#php artisan config:clear && \
php artisan route:clear && \
php artisan view:clear && \
php artisan clear-compiled
RUN npm run build
# Expose Port for the Application
WORKDIR /
EXPOSE 80
#EXPOSE 443

