# prueba_technokey
Prueba de conocimiento usando PHP y Postgresql

1. Instalar Xampp, usar la configuración de instalación por defecto.
2. Importante ir a la carpeta xampp/php y buscar el archivo php.ini y verificar que este descomentado extension=pdo_pgsql y extension=pgsql. En caso de estar comentado quitarle el ; al inicio de la linea y guardar cambios.
4. Clonar o descargar el proyecto y extraerlo en la ruta: C:\xampp\htdocs\ o ruta establecida en el momento de la instalación.
5. Instalar Postgresql, instalar usando la configuración por defecto, guardar la clave del usuario establecida en el momento de la instalación.
6. abrir pgAdmin4, seleccionar la opción Servers\PostgreSQL 15\Databases, dar clic derecho y seleccionar en create > Database.
7. en la opcion Database, establecer el nombre: prueba y en owner seleccionar el usuario postgres.
8. una vez creada la base de datos, presionaremos clic derecho y seleccionamos la opción restore y presionamos en filename y seleccionamos el archivo prueba.sql adjunto al repositorio de github.
9. editamos el valor de la variable $password del archivo db/conexion.php, definiendo el valor de la clave asignada al momento de la instalación de postgresql.
10. Abrimos el XAMPP Control y iniciaremos el servicio de Apache.
11. Para ejecutar el proyecto, abrimos el navegador e iremos a la url: localhost/prueba o localhost/nombreCarpetaProyecto
