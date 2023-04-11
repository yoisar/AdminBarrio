# AdminBarrio
AdminBarrio es un sistema de gestión y administración de barrios, que permite la gestión de los habitantes, propiedades, pagos y servicios de un barrio o conjunto residencial.

# Estructura del proyecto
El proyecto sigue una estructura modular, donde cada módulo tiene una estructura de carpetas atómica, facilitando el mantenimiento y escalabilidad del sistema. A continuación se describen los módulos principales:

ResidentesModule: Módulo encargado de la gestión de los residentes del barrio, incluyendo la gestión de sus propiedades y pagos.
ServiciosModule: Módulo encargado de la gestión de los servicios ofrecidos por el barrio, tales como seguridad, aseo, jardinería, entre otros.
AdministracionModule: Módulo encargado de la gestión administrativa del barrio, incluyendo la gestión de la junta de administración y la contabilidad.
Cada módulo cuenta con un archivo Module.php que se encarga de registrar las rutas, proveedores de servicios y controladores necesarios para su funcionamiento.

# Tecnologías utilizadas
El proyecto está desarrollado utilizando el framework Laravel 8, que proporciona una arquitectura de software MVC robusta y escalable. Además, se utilizan las siguientes tecnologías:

- PHP 7.4+
- MySQL 8
- Vue.js para la parte frontend

# Instalación y configuración
Para instalar y configurar el sistema, es necesario seguir los siguientes pasos:

- Clonar el repositorio en el servidor de producción
- Ejecutar el comando composer install para instalar las dependencias de PHP
- Crear una base de datos en MySQL
- Configurar las credenciales de la base de datos en el archivo .env
- Ejecutar el comando php artisan migrate para crear las tablas en la base de datos
- Ejecutar el comando php artisan db:seed para poblar la base de datos con datos de prueba
- Ejecutar el comando php artisan serve para levantar el servidor de desarrollo

# Contribuciones
Las contribuciones al proyecto son bienvenidas. Si desea contribuir, siga los siguientes pasos:

# Realizar un fork del repositorio
- Crear una rama con su cambio (git checkout -b mi-cambio)
- Realizar los cambios necesarios
- Realizar los tests correspondientes
- Hacer commit de los cambios (git commit -am 'Agregar mi cambio')
- Hacer push de la rama (git push origin mi-cambio)
- Crear un pull request

# Licencia
El proyecto está licenciado bajo la Licencia MIT.
