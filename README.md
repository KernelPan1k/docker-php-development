PHP Simple Environment development
==================================

Simple environment development (apache2.4, php7.4, mariadb, phpmyadmin, maildev)

- Put your code in src/
- Manage PHP config in file additional.ini
- Manage PHP extensions in Dockerfile

        RUN install-php-extensions pdo_mysql, ...
        
- Run containers: docker-compose up -d
- Open your browser: http://127.0.0.1:8000
