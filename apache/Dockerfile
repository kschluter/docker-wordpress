ARG APACHE_VERSION=""
FROM ubuntu:16.04

RUN apt-get update\
 && apt-get install -y\
 apache2\
 htop\
 curl\
 nano\
 wget\
 sudo

# Replace the default apache site
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf
# Start Apache
CMD apachectl -D FOREGROUND