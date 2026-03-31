FROM richarvey/nginx-php-fpm:latest

# 1. Install specific Node.js version (v22) from community repository
RUN apk add --no-cache nodejs-current npm --repository=http://dl-cdn.alpinelinux.org/alpine/edge/community

COPY . /var/www/html

ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1

# 2. Install PHP dependencies
RUN composer install --no-dev

# 3. Install JS dependencies and build assets
RUN npm install && npm run build

# Ensure permissions are correct for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache