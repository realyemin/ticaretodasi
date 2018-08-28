<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018 01:15
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	@$baslik =	$_POST['baslik'];	
	
	if(isset($baslik) )
	{
		$sql = $db->prepare('INSERT INTO etkinliktkytur (ad) VALUES (?)');
		$ekle = $sql->execute(array(		
        $baslik,		     
        ));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		
		header ("Location:index.php?islem=etkinliktkyturliste"); 		
	}
	else {
		echo $diller['basarisiz'];
	}	
?>