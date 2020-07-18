PHP Simple Environment development
==================================

Simple environment development (apache2.4, php7.4, mariadb, phpmyadmin, maildev)

- docker-compose up -d
- http://127.0.0.1:8000
- Put the code in src/
- PHP config in additional.ini
- PHP extensions

        RUN install-php-extensions pdo_mysql, ...
        
