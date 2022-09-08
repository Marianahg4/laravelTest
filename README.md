RESUMEN TEST EN LARAVEL











MARIANA HENANDEZ GOMEZ
FICHA: 2341240








ANALISIS Y DESARROLLO DE SISTEMA DE INFORMACION
08/08/2022
CENTRO DE DISEÑO E INNOVACION TECNOLOGICA INDUSTRIAL




RESUMEN:
La persona que está realizando el video, inicia explicándonos como realiza un código el cual genera varias carpetas y archivos de manera automática para comenzar a crear el test.
 
El utilizo el comando  ./vendor/bin/phpunit para crear el test a través de la consola
 
Debemos tener en cuenta que los dos puntos que aparecen quieren decir que hemos ejecutad las dos pruebas 
Creamos un nuevo archivo de test usando el siguiente código:
 
 
Ejecutamos nuestros test con php artisan test para verificar que todo esté bien
 
Ingresamos al archivo usertest.php y modificamos la ruta, asi:
 
Procedemos a crear los test unitarios:
Usamos el siguiente comando:
 

procedemos a realizar mas pruebas usando el siguiente código:
 
Creamos la respectiva interfaz de autentificación reactiva asi:
 
Luego instalamos lo siguiente usando este comando preferiblemente en el cmd de Windows:
 
Después este comando
 
Y luego:
 
Base de datos:
Creamos nuestra base de datos manualmente utilizando phpmyadmin asi:
 
Ingresamos al archivo .env y nos aseguramos de que las bases de datos tengan el mismo nombre:
 
Procedemos a migrar con el comando que ya conocíamos:
 
Y así migro:
 
Después nos dirigimos a la carpeta unit y a usertest.php quitamos la función que esta y creamos una nueva asi:
 
En los use se hace la siguiente modificación:
 
Se hizo la prueba y arrojo un error 
 
La solución era corregir la ruta en USERTEST.PHP asi:
 
Después procedemos a llamar la función que vamos a crear a continuación asi:
 
Y asi quedaría nuestra función 
 



