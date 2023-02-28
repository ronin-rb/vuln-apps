FROM php:7.0-apache
MAINTAINER postmodern <postmoder.mod3@gmail.com>
LABEL version="1.0" description="A PHP vulnerable app demonstrating Remote File Inclusion (RFI)"

RUN apt-get -qq update

COPY src/* /var/www/html/
