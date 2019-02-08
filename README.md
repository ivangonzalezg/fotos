# Fotos

Guardas fotos en base de datos Mysql usando PHP

## Configuración de Mysql

Para crear la base de datos adecuada usa las siguientes instrucciones. 

En terminal escribe: 

```
mysql -u root -p
```
Esto te permitirá entrar a Mysql. Luego de escribir la contraseña usa los siguietes comandos:

Crea una base de datos que llamaremos "imagenesblob":
```
create database imagenesblob;
```
Selecciona la base de datos creada:
```
use imagenesblob;
```
Crea una tabla para almacenar las imagenes:

```
create table img(
img_id int not null auto_increment primary key,
img_comentario varchar(100) not null,
img_contenido longblob
);
```

## Configuración de conexión

Abre "**_userdata.php_**" y edita los parámetros para tu conexión

### Ejemplo

```
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "imagenesblob";
?>
```

## Contribuyendo
Los pull requests son bienvenidos. Para cambios importantes, primero abra un problema para discutir qué le gustaría cambiar.

Por favor, asegúrese de actualizar las pruebas según corresponda.

## Licencia
[MIT](https://choosealicense.com/licenses/mit/)

