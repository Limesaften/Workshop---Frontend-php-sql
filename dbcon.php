<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'root';
$DB_NAME = 'sakila_mulb';
	
$link = new MySQLi($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
//$link = new MySQLi($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME)
if ($link->connect_error) {
	die('Connect Error ('.$link->connect_errno.')'.$link->connect_error);
}

$link->set_charset('utf8');




?>
