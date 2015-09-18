<?php
	require_once 'config.php';
	
	$conn = mysql_connect('localhost', 'root', '') or die ("error connecting to the db");
	mysql_select_db('website', $conn) or die("cannot select the db");

?>
