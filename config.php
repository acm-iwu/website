<?php

define('SQL_HOST', 'localhost');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');
define('SQL_DATABASE', 'website');

	$conn = mysql_connect('localhost', 'root', '') or die ("error connecting to the db");
	mysql_select_db('website', $conn) or die("cannot select the db");

?>