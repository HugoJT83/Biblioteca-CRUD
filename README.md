# Proyecto de biblioteca

Aplicación web de gestión de libros. 
<br>
![Banner](./docs/imgs/banner.png)


## 1. Acerca del proyecto

La aplicación se ha desarrollado con **Laravel 12** a través de **plantillas Blade**, utilizando **PHP 8.5** y **Composer**; la aplicación se gestiona con **MySQL** y utiliza las siguientes dependencias para su funcionamiento:  

* **Laravel Breeze** (Manejo de sesiones y usuarios)
* **TailwindCSS** (desarrollo en el front-end para estilos)
* **DaisyUI** (plugin de TailwindCSS para uso de elementos preconstruidos)

---

## 2. Documentación

En la carpeta DOCS se encuentran los documentos correspondientes al SCHEMA de la BD, así como las pruebas de funcionamiento de la app en forma de capturas de pantalla.  

* [SCHEMA](./docs/db_schema.md)
* [Pruebas de funcionamiento](./docs/pruebas_funcionamiento.md)

---

## 3. Ejecución

Importante: Para ejecutar el proyecto se requiere tener un servidor MySQL activo en el puerto **3306**.

Las instrucciones para ejecutar el proyecto son:
* Ejecutar **composer update** para descargar las dependencias
* Ejecutar **npm run build**
* Ejecutar las migraciones a través de **php artisan migrate**; si este comando no se puede ejecutar, hay que comprobar que la aplicación ha sido levantada.
* Ejecutar **php artisan serve** y **npm run dev** para levantar la aplicación
* Se accede a la app a través de "http://localhost:8000/"

---

## Funcionalidades CRUD

La aplicación cuenta con las siguientes características:

1. Crear libros
2. Listar libros (tanto búsquedas concretas como generales con paginación)
3. Actualizar libros existentes
4. Eliminar libros
5. Filtros de búsqueda (título)

