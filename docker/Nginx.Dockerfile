FROM nginx

ADD conf/vhost.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/webApplication
