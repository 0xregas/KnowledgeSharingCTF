FROM php:8.2

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install pdo pdo_mysql mysqli

#RUN useradd -d /home/ctf -m -p ctf -s /bin/bash ctf
#RUN echo "ctf:ctf" | chpasswd

#RUN docker-php-ext-install msqli pdo pdo_mysql

WORKDIR /var/www/html

COPY ./SQLInjection .

#RUN chown -R root:root /home/ctf

CMD ["php", "-S", "0.0.0.0:8003"]
