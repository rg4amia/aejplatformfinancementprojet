FROM php:8.1-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Set working directory
WORKDIR /var/www

# Install supervisor
#RUN apt-get install -y supervisor

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Copy nginx/php/supervisor configs
#RUN cp docker/general/supervisord.conf /etc/supervisord.conf
RUN apk update && apk add --no-cache supervisor

ADD docker/general/supervisord.conf /etc/supervisor/conf.d/worker.conf
ADD docker/config/php/local.ini /usr/local/etc/php/conf.d/app.ini
ADD docker/config/nginx/conf.d/app.conf /etc/nginx/sites-enabled/default

# PHP Error Log Files
RUN mkdir /var/log/php
RUN touch /var/log/php/errors.log && chmod 777 /var/log/php/errors.log

# Deployment steps
#RUN chmod +x /var/www/docker/run.sh

USER $user

#EXPOSE 80

#ENTRYPOINT ["/var/www/docker/run.sh"]
