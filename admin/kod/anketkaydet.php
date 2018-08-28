<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	if($_POST)
	{		
	@$baslik =	$_POST['baslik'];
	@$kimlik =	$_POST['kimlik'];
	
	if(isset($baslik) )
	{
		$sql = $db->prepare('INSERT INTO anket_sorular (soru,kimlik) VALUES (?,?)');
		$ekle = $sql->execute(array(		
        $baslik,		
        $kimlik,		
        ));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		
		header ("Location:index.php?islem=anketliste"); 
		
	}
	else {
		echo $diller['kayitEklenemedi'];
	}
	
	}
?>