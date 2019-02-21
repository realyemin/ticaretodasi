<?php
if(!isset($_SESSION))
{
	session_start();
}
//error_reporting(0);
try {
		
		
	$db = new PDO("mysql:host=localhost;dbname=ticaret_odasi", "root", "");
	 	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
		} catch ( PDOException $e ){
			print $e->getMessage();
}
?>
