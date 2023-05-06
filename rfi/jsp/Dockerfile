FROM tomcat:9.0.1-jre8-alpine
MAINTAINER postmodern <postmodern.mod3@gmail.com>
LABEL version="1.0" description="A JSP/Tomcat vulnerable app demonstrating Remote File Inclusion (RFI) in JSP"

ADD ./webapp /usr/local/tomcat/webapps/webapp
CMD ["catalina.sh", "run"]
