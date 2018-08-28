<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Yeniden Yazıldı
		-- ============================================= 
	*/
?>
<?php
	ob_start();
	session_start();
	include("../Connections/baglantim.php");
	if(isset($_POST["sifre"]) && $_POST["sifre"]!="" && isset($_POST["mail"]) && $_POST["mail"]!="")
	{		
		
		$sorgu="select * from kullanici where email = :email and sifre= :sifre";
		$sql = $db->prepare($sorgu);
		$sql->bindParam(":email",$_POST["mail"]); //Parametreler
		$sql->bindParam(":sifre",$_POST["sifre"]);//Parametreler
		$sql->execute();
		$cookie_name = "tso";
		$cookie_value = $_POST["mail"];
		
		if($_POST['beniHatirla']=="on")
		{							
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");			
		}
		else
		{
			setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
		}
		if ( $sql->rowCount()){
			
			$row=$sql->fetch(PDO::FETCH_ASSOC);		
			
			$_SESSION["kid"]  = $row["id"];
			$_SESSION["kullanici"]  = $row["adsoyad"];
			$_SESSION["giris"] = "true";
			
			
			header("Location:index.php?d=$_POST[beniHatirla]");			
		}
		else{
			
			header("Location:giris.php?hata=1");				
		}
	}
	else
	{
		header("Location:giris.php?hata=2");		
	}
?>