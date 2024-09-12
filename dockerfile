FROM php:8.0-apache

# Copia os arquivos do diretório src para a pasta onde o Apache espera servir arquivos
COPY . /var/www/html/

# Expor a porta 80 (onde o Apache estará escutando)
EXPOSE 80