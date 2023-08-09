#!/bin/bash
set -o monitor
trap exit SIGCHILD
# Start nginx
nginx -g 'daemon off;' &
# Start php-fpm
php-fpm -F &
wait