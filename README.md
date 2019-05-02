# CodeIgniter 2
Open Source PHP MVC Framework


Basic Setup:

MYSQL PART:

Go to MySQL or open phpMyadmin and create a database name called 'codeigniter_blog_db' and then import the codeigniter_blog_db.sql file into to the database.

Now run xampp or wamp server and visit http://localhost/codeigniter

Note: work fine with PHP 5 version. above php 5 it will give error.


CODEIGNITER CONFIGURATIONS:

1. First, open the database.php file inside /codigniter/application/config/database.php and change the mysql hostname, username and password as per your database server configuration:

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',//change this as per your server
	'username' => 'root',//change this as per your server
	'password' => '', //change this as per your server
	'database' => 'codeigniter_blog_db',
	'dbdriver' => 'mysql',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

2. Then, open config.php file inside /codigniter/application/config/config.php and set the $config['base_url'] to $config['base_url'] = 'http://localhost/codeigniter/';

