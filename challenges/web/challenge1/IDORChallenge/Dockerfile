FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

#RUN useradd -d /home/ctf -m -p ctf -s /bin/bash ctf
#RUN echo "ctf:ctf" | chpasswd

WORKDIR /var/www/html

COPY ./IDORChallenge/ .

#RUN chown -R root:root /home/ctf

CMD ["php", "-S", "0.0.0.0:8000"]
