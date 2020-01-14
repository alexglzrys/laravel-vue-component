<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">Administrador de ideas basado en Componentes de VueJS</p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca del Proyecto

La finalidad de este proyecto es construir un sistema minimalista basado en el Framework de PHP **Laravel** con conexión a Base de Datos **MySQL**, y gestionado en el Frontend con la librería de Javascript **VueJS** a través de la construcción de diferentes componentes (SFC) cuya cominicación HTTP es a través de la librería **Axios**.  

- Laravel Framework 6.x LTS
- Gestor de Base de Datos MySQL 5.X
- VueJS 2.x
- Axios


Otras librerías o frameworks implementadas en el proyecto mediante el Gestor de Paquetes **NPM** y la tecnología de **Laravel Mix** son:

- Moment.js
- Framework Bootstrap 4.x
- Toastr.js
- jQuery 3.x
- FontAwesome 5

#### Instrucciones de instalación
Configurar permisos en el directorio storage de la aplicación

~~~
sudo chmod 755 -R storage
~~~

Instalar las dependencias del proyecto
~~~
composer install
~~~

Crear una copia del archivo .env.example con la configuración correcta del proyecto. Por ejemplo, credenciales de acceso a la Base de Datos
~~~
cp .env.example .env
~~~

Crear un nuevo API Key para la aplicación
~~~
php artisan key:generate
~~~

Crear la base de datos para el proyecto mediante algún Sistema Administrador de Bases de Datos Relacionales soportado por Laravel. **Por ejemplo, MySQL.** Finalmente, registre las credenciales de acceso en el archivo de configuración .env
~~~
mysql> CREATE DATABASE nombre_db;
~~~

Ejecutar las migraciones y sembrar los datos de prueba
~~~
php artisan migrate --seed
~~~

Ejecutar la aplicación. **Por ejemplo, mediante el servidor HTTP integrado en Laravel**
~~~
php artisan serve
~~~