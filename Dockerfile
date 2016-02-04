FROM ubuntu

MAINTAINER Sohrab Khan <sohrab@sohrabkhan.com>

RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y dialog nano apache2 php5 php5-mysql php5-curl curl wget mysql-client
RUN sudo a2enmod rewrite

ADD 000-default.conf /etc/apache2/sites-enabled/000-default.conf
ADD html /var/www/html
ADD run.sh /run.sh
RUN chmod 755 /run.sh

EXPOSE 80
#WORKDIR /html

CMD ["/run.sh"]