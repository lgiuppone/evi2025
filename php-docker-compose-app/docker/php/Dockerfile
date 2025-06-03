FROM php:8.1-apache

# Copy application source code to the container
COPY ./src /var/www/html/

# Install any necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]