# Stage 1: Borrow Node.js from the official image
FROM node:20-alpine AS node_builder

# Stage 2: Your main PHP Image
FROM richarvey/nginx-php-fpm:latest

# Copy Node.js and NPM from the first stage into our PHP stage
COPY --from=node_builder /usr/local/bin/node /usr/local/bin/
COPY --from=node_builder /usr/local/lib/node_modules /usr/local/lib/node_modules
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm

COPY . /var/www/html

# These variables help the richarvey image configure Nginx for Laravel
ENV APP_TYPE laravel
ENV WEBROOT /var/www/html/public
ENV APP_ENV production
ENV APP_DEBUG false
ENV SKIP_COMPOSER 1
ENV PHP_ERRORS_STDERR 1

# Install PHP and JS dependencies
RUN composer install --no-dev
RUN npm install && npm run build

# Essential for Laravel to write logs and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache