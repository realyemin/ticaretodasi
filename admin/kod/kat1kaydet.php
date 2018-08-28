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
		
		@$baslik =	$_POST['baslik'];
		@$link =	$_POST['link'];
		
		if(isset($_POST["alt"]) and $_POST["alt"]=1)
		{
			$sorgu = $db->prepare("SELECT COUNT(*) FROM kat1 where sira1>0");
			$sql='INSERT INTO kat1 (ad,link,sira1,dil) VALUES (?,?,?,?)';
		}
		else
		{
			$sorgu = $db->prepare("SELECT COUNT(*) FROM kat1 where sira>0");
			$sql='INSERT INTO kat1 (ad,link,sira,dil) VALUES (?,?,?,?)';
			
		}
		$sorgu->execute();
		$say = $sorgu->fetchColumn();
		$sira=$say+1;
		if(isset($baslik) )
		{
			$sql = $db->prepare($sql);
			$ekle = $sql->execute(array(		
			$baslik,
			$link,
			$sira,
			$dil,        
			));
			
			$hata = $sql->errorInfo();
			
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
			
			if(isset($_POST["alt"]) and $_POST["alt"]==1)						
			header ("Location:index.php?islem=kat1liste1"); 
			else
			header ("Location:index.php?islem=kat1liste"); 
			
		}
		else {
			echo $diller['basarisiz'];
		}	
	}
?>	