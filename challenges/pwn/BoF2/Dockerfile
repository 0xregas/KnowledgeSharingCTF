FROM ubuntu:24.10

RUN apt-get update

RUN useradd -d /home/ctf -m -p ctf -s /bin/bash ctf
RUN echo "ctf:ctf" | chpasswd

WORKDIR /home/ctf

COPY BoF2 .
COPY flag.txt .
COPY ynetd .
COPY start.sh .

#RUN chown -R root:root /home/ctf

USER ctf
EXPOSE 1338
CMD ["./start.sh"]
