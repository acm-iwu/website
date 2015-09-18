<?php
  require 'config.php';

	mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD) or die ("error connecting to the db");
	mysql_select_db(SQL_DATABASE) or die("cannot select the db");

?>
