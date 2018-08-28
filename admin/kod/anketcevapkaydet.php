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
	@$baslik =	$_POST['baslik'];	
	@$anketid =	$_POST['anketid'];
	@$soruid =	$_POST['soruid'];
		
	if(isset($baslik))
	{
		$sql = $db->prepare('INSERT INTO anket_secenekler (soru,anketid,soruid) VALUES (?,?,?)');
		$ekle = $sql->execute(array(
        $baslik,
		$anketid,
		$soruid,        
        ));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];		
		header ("Location:index.php?islem=anket&id=".$anketid); 
		
	}
	else {
		echo $diller['kayitEklenemedi'];
	}
	
	
?>