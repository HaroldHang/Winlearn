#!/bin/bash

cd /usr/share/nginx/html/


if [ "$(sed -n '3p' .env)" = "$(sed -n '3p' .env.example)" ]; then
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan cache:clear
    php artisan config:clear
    php artisan route:clear
    php artisan view:clear
    php artisan clear-compiled
    
else
    php artisan migrate
    php artisan db:seed
    php artisan cache:clear
    php artisan config:clear
    php artisan route:clear
    php artisan view:clear
    php artisan clear-compiled

fi

#

# Update nginx to match worker_processes to no. of cpu's
procs=$(cat /proc/cpuinfo | grep processor | wc -l)
sed -i -e "s/worker_processes  1/worker_processes $procs/" /etc/nginx/nginx.conf


# Always chown webroot for better mounting
chown -Rf nginx:nginx /usr/share/nginx/html

# Start supervisord and services
/usr/local/bin/supervisord -n -c /etc/supervisord.conf
