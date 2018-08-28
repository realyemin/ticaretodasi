
<?php
ob_start();
session_start();
include "db.php";

	$sifre=$_POST["sifre"];
		$mail=$_POST["mail"];
		
		$sorgu="select * from kullanici where email = '{$mail}' and sifre= '{$sifre}'";

$sql = $db->prepare($sorgu);
$sql->execute(array('5'));
 
$row=$sql->fetch(PDO::FETCH_ASSOC);

$sifre1 = $row['sifre'];
$mail1 = $row['email'];

 if( $sifre1 != $sifre and  $mail1!= $mail)
  {
	    echo "Kullanıcı adı ya da şifre yanlış girildi.";
  
   
  }
  else{
 
  $_SESSION["kid"]  = $row["id"];
$_SESSION["kullanici"]  = $row["adsoyad"];
		$_SESSION["giris"] = "true";

header("Location:index.php");


  }



 
?>