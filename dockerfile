# Use uma imagem base do PHP com Apache
FROM php:8.1-apache

# Copie os arquivos do projeto para o diretório do servidor web
COPY . /var/www/html

# Dê as permissões corretas para o diretório
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Habilite o módulo de regravação do Apache (opcional, mas útil)
RUN a2enmod rewrite