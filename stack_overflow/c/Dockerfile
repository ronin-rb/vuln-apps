FROM ubuntu:latest
MAINTAINER postmodern <postmodern.mod3@gmail.com>
LABEL version="1.0" description="A vulnerable network greeter server containing a Stack Overflow vulnerability"

COPY greeter.c .

RUN apt-get -qq update && \
    apt-get install -y -qq gcc && \
    gcc -O0 -o greeter greeter.c

CMD ["./greeter"]
