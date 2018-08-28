<?php
if(!isset($_SESSION))
{
	session_start();
}
unset($_SESSION["kid"]);
unset($_SESSION["kullanici"]);
unset($_SESSION["giris"]);
session_destroy();
	header("Location: giris.php");
?>