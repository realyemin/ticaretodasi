<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	if($_POST)
	{
		@$ad =	$_POST['adsoyad'];
		@$mail	= $_POST['mail'];
		@$sifre =	$_POST['sifre'];
		@$telefon =	$_POST['telefon'];
		@$adres =	$_POST['adres'];
		@$tc =	$_POST['tcno'];
		
		if(isset($mail) && !empty($sifre) )
		{
			$sql = $db->prepare('INSERT INTO kullanici (adsoyad,email,sifre,telefon,adres,tcno) VALUES (?,?,?,?,?,?)');
			$ekle = $sql->execute(array(			
			$ad,
			$mail,
			$sifre,
			$telefon,
			$adres,
			$tc,					
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
			header ("Location:index.php?islem=kullaniciliste"); 	
			
			
		}
		else {
			echo $diller['basarisiz'];
		}
		
	}
?>