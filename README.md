<a name="readme-top"></a>

# Sobre el Proyecto

_Este proyecto es un sistema de postulacion de empleos de programación._

<br />
<br />

# Bitácora del proyecto

_Esta sección muestra los avances por dia del proyecto._

| Fecha      | Nombre                            | Descripción                                                                                                                |
| :--------- | :-------------------------------- | :------------------------------------------------------------------------------------------------------------------------- |
| `16/03/23` | `Creacion del proyecto`           | Creación del proyecto y se agrega phone para user.                                                                         |
| `17/03/23` | `Rol y cuenta validada`           | Creación de un rol para user y validacion para cada cuenta por email.                                                      |
| `20/03/23` | `Vista vacantes`                  | Vistas de vacantes - Livewire - Listado salarios y componente TEXTAREA.                                                    |
| `21/03/23` | `Validacion del formulario`       | Validando el formulario - reglas a las vacantes.                                                                           |
| `22/03/23` | `Funcionalidad nueva vacante`     | Almacenando una nueva vacante - Storage de portada.                                                                        |
| `23/03/23` | `Listado de las vacantes`         | Sistema de listado y paginación de las vacantes.                                                                           |
| `24/03/23` | `Editar una vacante`              | Sistema de muestra de vacantes y cambio de las rutas para los componentes livewire.                                        |
| `25/03/23` | `Editar una vacante`              | Sistema de actualizacion de las vacantes.                                                                                  |
| `26/03/23` | `Actualizar imagen de portada`    | Actualización de las imagenes de portada, tambien elimina el archivo antiguo.                                              |
| `27/03/23` | `Policy de vacante y eliminacion` | Se crea un policy para evitar otros usuarios editen otra vacante que no sea suya y eliminado de vacante.                   |
| `28/03/23` | `Vista de una nueva vacante`      | Se crea una nueva vista para mostrar las vacantes para usuarios registrados o invitados y cambio en la rutas de route web. |
| `29/03/23` | `Cambios esteticos`               | Nuevos cambios esteticos y titulo para las vistas.                                                                         |

<br />
<br />

### Levantar el servidor Local

<p>Levantar estos comandos en 2 consolas <b>CMD</b> al mismo tiempo</p>

1. Levantado de servidor local

    ```
    php artisan serve
    ```

2. Servidor de instancias de NPM

    ```
    npm run dev
    ```

<br />
<br />

# Instalación del proyecto

_Para la instalacion de este proyecto Laravel es necesario seguir los siguientes comandos_

1. Instalacion de los paquetes `Composer`

    ```
    composer install
    ```

2. Instalacion de los paquetes `NODE`

    ```
    npm install
    ```

3. Construcción de los paquetes `NODE`

    ```
    npm run build
    ```

4. Construcción de la DB.

    ```
    php artisan migrate
    ```

5. Generación de una llave de proyecto

    ```
    php artisan key:generate
    ```

6. Generación de seeds

    ```
    php artisan db:seed
    ```

7. Creación de los enlaces simbólicos, para generar en la carpeta public las imagenes por defecto

    ```
    php artisan storage:link
    ```

<br />
<br />

### Comandos SQL

```
php artisan migrate:rollback
```

<p>Regresa a la migracion anterior de la DB</p>

<br />

```
php artisan migrate:refresh
```

<p>Limpia la DB</p>

<br />

```
php artisan migrate:rollback --step=1
```

<p>Regresa a la migracion anterior de un paso de la DB</p>

<br />
<br />

### Reinicio de la Base de Datos

```
php artisan migrate:fresh --seed
```

<p>Reinicia desde cero la DB y crea los seeders</p>

<br />

```
php artisan migrate:refresh --seed
```

<p>Limpia la DB y crea los seeders</p>

<br />
<br />

## Otros Comandos

_Comandos que podrian ser necesarios_

1. Generación de seeds

    ```
    php artisan db:seed
    ```

2. Limpieza de caché

    ```
    php artisan config:cache
    ```

3. Creacion de los links de los archivos estaticos

    ```
    php artisan storage:link
    ```

4. Creacion de un modelo con controller tipo resource, con migration y seeder para la DB.

    ```
    php artisan make:model Model -mcs --resource
    ```

5. Creacion de un componente livewire con ruta estatica.
    ```
    php artisan make:livewire Forms/Vacancy/EditVacancies
    ```

<br />
<br />

#### Paquetes Utilizados

<p align="left">
<a href="https://laravel.com/docs/9.x/starter-kits#laravel-breeze">Breeze</a>
<br />
<a href="https://laravel-lang.com/">Laravel Lang Publisher</a>
<br />
<a href="https://laravel-livewire.com/">Livewire</a>
<br />
<a href="https://alpinejs.dev/">Alpine.js</a>
</p>

<br />
<br />

#### Programas que utilicé

_Lista de programas utilizados en este proyecto_

<p align="left">
<a href="https://nodejs.org/">Node <b>LTS</b></a>
<br />
<a href="https://getcomposer.org/download/">Composer</a>
</p>

<br />
<br />

## Contacto

Mi Cuenta GitHub: [https://github.com/DonMartinWorks](https://github.com/DonMartinWorks)

<br />

Link ReadMe Opción N°2: [https://readme.so/es](https://readme.so/es)

<br />
<br />

<a href="#readme-top">Subir a las instrucciones</a>
