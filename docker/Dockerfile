# Use the lastest FireHub Core as the base image
FROM thefirehubproject/core-standard:v0.1.3

# Copy the apache configuration file
COPY /000-default.conf /etc/apache2/sites-available/000-default.conf

## Copy the application code
COPY ./../ /var/www/html

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer