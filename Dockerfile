FROM trafex/php-nginx


COPY . /var/www/html
#docker run -p 80:8080 -v ~/my-codebase:/var/www/html