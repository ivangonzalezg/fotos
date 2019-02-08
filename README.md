# Fotos

Guardas fotos en base de datos Mysql usando PHP

## Configuraciones

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