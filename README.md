# RegistrApp

Detalle algunas de las características más importantes de los clientes de su empresa, en una lista de clientes creada por usted y su equipo de trabajo, exporte a través de una API dichos clientes y sus características, y consuma los datos dede cualquier otro servidor. En esta versión gratuita usted solo podrá detallar las características de "Profesión" y "Empresa" de cada uno de los clientes que agregue a la lista.
Ojos, los diferentes integrandes de su equipo de trabajo pueden crear, ver y eliminar personas en la lista, pero no todos pueden editar los clientes, cada registro de cliente sólo se deja editar por la persona que lo creó.  

## Comenzando 🚀

1. Despues de descargar todo el código desde gitHub lo primero que debe hacer es descomprimir el archivo zip en una carpeta para obtener todos los archivos del programa.
2.  con tu IDE ingresa a la carpeta en la que se encuentra el programa.
3. en MySQL debes crear una base de datos llamada "registrapp", el usuario que usa esta app para conectarse es "root" y la clave es "root".
4. Si deseas implementar tu propio usuario y contraseña entonces debes ajustar las siguientes líneas del archivo .env 
```
DB_USERNAME=root
DB_PASSWORD=root
```
5. Después de generar la conexión a la base de datos debes crear las tablas a través de las migraciones, para eso, abre la terminal y ejecuta el comando:
```
php artisan migrate
```
6. A continuación levanta el servidor ejecutando en la terminal el comando
``` 
php artisan serve
```
 Abre en un navegador la url que te arroja el servidor.
7. Si todo sale bien, se abrira la página principal de RegistrApp, para interactuar con ella debe crear registros, para eso, debe crear un nuevo usuario.
8. En el dashboar puede encontrar las opciones de ver usuarios, crear usuario y la api para consumir desde otra app, esta última está lista para ser consumida desde cualquier otra app, no tiene que realizar ningun ajuste al respecto sobre ella.

### Pre-requisitos 📋

_En primer lugar y lo más importante, Laravel 9 requiere la última versión de PHP 8 y PHPUnit 8 para las pruebas. Esto se debe a que este nuevo Laravel utilizará la última versión de Symfony 6.0, la cual también requiere PHP 8_

### error No such file or directory autoload.php

Si al intentar ejecutar el projecto arroja un error que dice algo así:

Warning: require(ruta\proyecto\public/../vendor/autoload.php failed to open stream: No such file or directory in ruta\proyecto.
Fatal error: require(): Failed opening required…

La solución es navegar hasta la raíz de nuestro proyecto desde la terminal y ejecutar:
```
composer install
```
Esto empieza a descargar las dependencias y generará automáticamente el archivo autoload.php. De esta manera, el problema tendría que desaparecer.


## RegistrApp está construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [Livewire](https://laravel-livewire.com/) - El framework full-stack para Laravel 
* [Breeze](https://laravel.com/docs/10.x/starter-kits) - Una implementación sencilla para la autenticación
* [Sweet alert](https://sweetalert2.github.io/) - El maquillador de alertas de JavaScript


## Autor ✒️

* **Cristian Maldonado** - *fillStack developer* - [villanuevand](https://github.com/villanuevand)


## Licencia 📄

Este proyecto está bajo la Licencia gratuita.

