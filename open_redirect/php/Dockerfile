FROM php:apache
MAINTAINER postmodern <postmodern.mod3@gmail.com>
LABEL version="1.0" description="A PHP vulnerable app demonstrating Open Redirect"

RUN apt-get -qq update

COPY src/* /var/www/html/
