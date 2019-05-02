# CodeIgniter 2
Open Source PHP MVC Framework


Basic Setup:

<b>MYSQL PART:</b>

Go to MySQL or open phpMyadmin and create a database name called <b>'codeigniter_blog_db'</b> and then import the <b>codeigniter_blog_db.sql</b> file into to the database.

Now run xampp or wamp server and visit: <b>http://localhost/codeigniter</b>

Note: work fine with PHP 5 version. above php 5 it will give error.


<b>CODEIGNITER CONFIGURATIONS:</b>

1. First, open the <b>database.php</b> file inside <b>/codigniter/application/config/database.php</b> and change the mysql hostname, username and password as per your database server configuration:
<pre>
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
</pre>
2. Then, open <b>config.php</b> file inside <b>/codigniter/application/config/config.php</b> and set the <b>$config['base_url']</b> to <b>$config['base_url'] = 'http://localhost/codeigniter/';</b>

