FROM ctftraining/base_image_nginx_mysql_php_73
COPY ./source /tmp/
RUN cp -f /tmp/index.php /var/www/html \
    && cp -f /tmp/flaggg /flaggg \
    && chown -R www-data:www-data /var/www/html \
    && sed -i 's/skip-network/#skip-network/' /etc/my.cnf.d/mariadb-server.cnf
