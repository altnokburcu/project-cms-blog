FROM nginx:alpine

RUN mkdir -p /var/www
RUN chown nginx -R /var/www
RUN chmod 777 -R /var/www

CMD ["nginx"]

EXPOSE 80 443