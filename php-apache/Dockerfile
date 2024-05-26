# Utiliza la imagen base de PHP con Apache
FROM php:apache

# Update  
RUN apt-get update  
# Instala servidor openssh
RUN apt-get install -y openssh-server
# Instala interprete python
RUN apt-get install -y python3
# Instala la extensión MySQLi
RUN docker-php-ext-install mysqli
# Inicia el servicio SSH al arrancar el contenedor
CMD service ssh start && apache2-foreground
