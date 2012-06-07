<?php
define('HOST', 'YOUR-HOST');
define('DATABASE', 'itunes_connect_stats');
define('DB_USER', 'YOUR-DBUSER');
define('DB_PASSWORD', 'YOUR-DBPASS');

//set default timezone so that it will not give warnings releated with timezone in output
date_default_timezone_set('Asia/Kolkata');

$accounts = array(array('username' => 'YOUR-USERNAME',
						'password' => 'YOUR-PASSWORD',
						'vndnumber' => 'YOUR-VND',
						),

				);
				
$dbh = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, DB_USER, DB_PASSWORD);