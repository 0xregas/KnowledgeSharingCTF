FROM php:8.2-cli

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install pdo pdo_mysql mysqli

WORKDIR /var/www/html

#RUN useradd -d /home/ctf -m -p ctf -s /bin/bash ctf
#RUN echo "ctf:ctf" | chpasswd

#RUN docker-php-ext-install msqli pdo pdo_mysql \
#	&& docker-php-ext-enable pdo_mysql

COPY ./IDORChallenge .

#RUN chown -R root:root /home/ctf

CMD ["php", "-S", "0.0.0.0:8000"]
