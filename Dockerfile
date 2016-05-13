FROM docker.io/wordpress:latest
USER root

MAINTAINER Panigada_Paolo

COPY wp /var/www/html
RUN ls -trl /var/www/html

EXPOSE 80


