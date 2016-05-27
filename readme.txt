Este API fue codificado utilizando CODEIGNITER 3.0, html5, php, clases CSS3 y Bootsrap. 
Los valores actuales para la conexión a la base de datos son los siguientes: 
		
		hostname' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'db_users',
		'dbdriver' => 'mysqli',	
		
Estos valores pueden ser modificados en: "\evaluacionPagoFacil\application\config\database.php"

La ruta de inicio de la aplicación es en 'http://localhost/evaluacionPagoFacil/'. En caso de instalar este API en una ruta 
diferente, se deberá de cambiar la siguiente línea en el archivo "\application\config\config.php": 

	$config['base_url'] = 'http://localhost/evaluacionPagoFacil/';
 
 por: 	
 
	$config['base_url'] = 'nuevaRuta';


La tabla principal de usuarios es: "t_users". 
Se puede encontrar un query para la generación de la base de datos en la carpeta raíz del proyecto. 

En la línea final del query se encuentra lo siguiente: 

INSERT INTO `t_users` (`username`,`surname`,`password`,`country`,`email`,`role`) VALUES ("Admin","Sudo","pass","Mexico","Admin@gmail.com","Admin"); 

Para ingresar al API se debera de colocar "Admin@gmail.com" en el E-mail y "pass" en el password. 