FROM php:8.3-cli-alpine

# Tudo vai rodar dentro do /var/www/html no container
WORKDIR /var/www/html

# Copia a pasta de fora para a pasta /var/www/html de dentro do container
COPY ./ /var/www/html

# Exponho a porta 80
EXPOSE 80

# Subo o servidor embutido do PHP na porta 80, "lendo" apenas a pasta public/
CMD php -S 0.0.0.0:80 -t public/
