# Stage 1: Build Assets
FROM node:20-alpine AS node_builder
WORKDIR /app
COPY . .
RUN npm install && npm run build

# Stage 2: Main PHP/Nginx Image
FROM richarvey/nginx-php-fpm:latest

# Set the working directory explicitly
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Copy built assets from Stage 1
COPY --from=node_builder /app/public/build /var/www/html/public/build

# Configuration Variables
ENV APP_TYPE laravel
ENV WEBROOT /var/www/html/public
ENV APP_ENV production
ENV APP_DEBUG false
ENV SKIP_COMPOSER 1

# Install PHP dependencies
RUN composer install --no-dev

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache