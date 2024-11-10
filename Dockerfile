# Usa una imagen base de PHP con Apache
FROM php:8.0-apache

# Configura el nombre del servidor para evitar la advertencia
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copia el archivo PHP en el directorio raíz del servidor
COPY index.php /var/www/html/

# Exponer el puerto 80 para acceder a la aplicación en el navegador
EXPOSE 80
