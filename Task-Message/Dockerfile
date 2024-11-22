# 1. Використовуємо базовий образ PHP з Apache
FROM php:8.1-apache

# 2. Встановлюємо розширення для роботи з MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 3. Встановлюємо Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Копіюємо файли проекту до контейнера
COPY . /var/www/html/Task-Message

# Встановлюємо робочий каталог
WORKDIR /var/www/html/Task-Message


# 5. Встановлюємо залежності через Composer
RUN composer install --no-dev --optimize-autoloader
# 6. Виставляємо права на директорії (якщо це потрібно)
RUN chown -R www-data:www-data /var/www/html/Task-Message && chmod -R 755 /var/www/html/Task-Message

RUN a2enmod rewrite

# 7. Відкриваємо порт 80
EXPOSE 80

# 8. Запускаємо Apache
CMD ["apache2-foreground"]
