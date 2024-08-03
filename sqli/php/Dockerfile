FROM php:apache
MAINTAINER postmodern <postmodern.mod3@gmail.com>
LABEL version="1.0" description="A PHP vulnerable app demonstrating SQL injection (SQLi)"

RUN apt-get -qq update && \
    apt-get install -y libsqlite3-dev sqlite3 && \
    docker-php-ext-install pdo_sqlite

COPY src/* /var/www/html/
RUN php /var/www/html/setup.php && \
    chown www-data /var/www/html/database.db
