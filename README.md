# Examen Práctico Jr Web Developer - Netcommerce

## Requerimientos
- [x] Uso de Laravel 10.x
- [x] Se puede consultar el listado de empresas y sus tareas relacionadas.
- [x] Se implementó el uso de relaciones Eloquent HasMany
- [x] Se implementó el uso de relaciones Eloquent BelongsTo
- [x] Se utilizó validación para la creación de tareas
- [x] Se limitó la creación de tareas pendientes a 5 por usuario
- [x] Los modelos están correctamente nombrados en base a las convenciones de Laravel
- [x] Las tablas de base de datos se pueden crear mediante migraciones
- [x] Los modelos cuentan con Factories
- [x] Se crearon Seeders
- [x] No se utilizó consultas en "crudo (raw)"
- [x] Se subió el código a un repositorio de GIT
- [x] Se adjuntaron capturas de pantalla de los resultados de las consultas a los puntos de consulta

## Estructura de la Base de Datos

<p align="center">
    <img src="https://github.com/ismaelg-avilag/netcommerce-junior-web-dev-test/blob/update-README/images/database-structure.png"> 
</p>

## Resultados de los Endpoints en Postman

### `/companies` - GET

Esta ruta muestra el listado de las empresas, junto el listado de las tareas de cada empresa.

<p align="center">
    <img src="https://github.com/ismaelg-avilag/netcommerce-junior-web-dev-test/blob/update-README/images/screenshot1.png">
    <img src="https://github.com/ismaelg-avilag/netcommerce-junior-web-dev-test/blob/update-README/images/screenshot2.png">
</p>

### `/tasks/create` - POST

Esta ruta permite el registro de nuevas tareas. En la request se envían los datos: `company_id`, `name`, `description` y `user_id`. La respuesta devuelve la información de la tarea creada.

<p align="center">
    <img src="https://github.com/ismaelg-avilag/netcommerce-junior-web-dev-test/blob/update-README/images/screenshot3.png">
</p>
