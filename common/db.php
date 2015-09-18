<?php
  require 'config.php';

	mysql_connect('localhost', 'root', '') or die ("error connecting to the db");
	mysql_select_db('website') or die("cannot select the db");

?>
