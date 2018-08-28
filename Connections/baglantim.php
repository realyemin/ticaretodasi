<?php
if(!isset($_SESSION))
{
	session_start();
}
//error_reporting(0);
try {
		
		//$db = new PDO("mysql:host=94.73.148.248;dbname=sto_ticaret", "sto_ticaret_veri", "HDveri123");
		//$db = new PDO("mysql:host=94.73.150.132;dbname=u7636032_dbD01", "u7636032_userD01", "HDveri123");
		//$db = new PDO("mysql:host=94.73.150.132;dbname=u7636032_ticarethane", "u7636032_ticaret", "HDveri123");
	$db = new PDO("mysql:host=localhost;dbname=ticaret_odasi", "root", "nichtwar");
	 	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
		} catch ( PDOException $e ){
			print $e->getMessage();
}
?>