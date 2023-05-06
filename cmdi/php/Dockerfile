FROM php:apache
MAINTAINER postmodern <postmoder.mod3@gmail.com>
LABEL version="1.0" description="A PHP vulnerable app demonstrating Command Injection"

RUN apt-get -qq update

COPY src/* /var/www/html/
