<?php

class Meta {
	public static $Title = "PHP Bootstrap";
	public static $Description = "Starter kit for PHP";
}

$DB_USER 		= "root";
$DB_PASS 		= "";
$DB_NAME 		= "test";
$DB_PATH 		= "localhost";

date_default_timezone_set("Europe/Berlin");
		
$DB = mysql_connect($DB_PATH, $DB_USER, $DB_PASS) or die("MySQL-Verbindung fehlgeschlagen");
mysql_select_db($DB_NAME, $DB) or die(mysql_error());

?>