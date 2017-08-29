FROM debian:jessie
 
MAINTAINER khalil && seifeddine
 
RUN apt-get update && apt-get install -y \
    nginx
 
ADD nginx.conf /etc/nginx/
ADD babycare-server-symfony.conf /etc/nginx/sites-available/
 
RUN ln -s /etc/nginx/sites-available/babycare-server-symfony.conf /etc/nginx/sites-enabled/babycare-server-symfony
RUN rm /etc/nginx/sites-enabled/default
 
RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf
 
RUN usermod -u 501 www-data
 
CMD ["nginx"]
 
EXPOSE 80
EXPOSE 443
