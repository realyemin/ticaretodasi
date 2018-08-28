<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	if($_POST)
	{
		@$kat1 =	$_POST['kat1'];
		@$link =	$_POST['link'];
		@$kat2 =	$_POST['kat2'];
		
		echo $kat1;
		echo $kat2;
		echo $link;
		
		if(isset($kat1) )
		{
			$sql = $db->prepare('INSERT INTO kat2 (kat1,kat2,link,dil) VALUES (?,?,?,?)');
			$ekle = $sql->execute(array(
			
			$kat1,
			$kat2,
			$link,
			$dil,
			
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
			
							
			header ("Location:index.php?islem=kat2liste1&kat1=".$kat1); 			
									
		}
		else {
			echo $diller['basarisiz'];
		}
	}	
?>