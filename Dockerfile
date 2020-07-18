FROM php:7.4-apache

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions && sync

RUN apt-get update \
    && apt-get install msmtp -y --no-install-recommends --no-install-suggests \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN echo "account default" > /etc/msmtprc \
    && echo "host maildev" >> /etc/msmtprc \
    && echo "port 25" >> /etc/msmtprc \
    && echo "auto_from on" >> /etc/msmtprc \
    && echo "maildomain localhost.localdomain" >> /etc/msmtprc

RUN echo "sendmail_path=/usr/bin/msmtp -i -t" >> /usr/local/etc/php/conf.d/php-sendmail.ini

RUN install-php-extensions pdo_mysql

COPY ./additional.ini /usr/local/etc/php/conf.d/additional.ini
