# Utiliza la imagen base de phpmyadmin
FROM phpmyadmin:latest

# Update
RUN apt-get update
# Instala servidor openssh
RUN apt-get install -y openssh-server
# Instala interprete python
RUN apt-get install -y python3
# Copia el archivo config.secret.inc.php en el contenedor
COPY config.secret.inc.php /etc/phpmyadmin/config.secret.inc.php
# Inicia el servicio SSH al arrancar el contenedor
CMD service ssh start && apache2-foreground
