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
	@$kat1=$_POST['kat1'];
	@$kat2=$_POST['kat2'];
	
	echo $kat1;
	echo $kat2;
	echo $link;	
	if(isset($kat1) )
	{
		$sql = $db->prepare('INSERT INTO akkat2 (kat1,ad) VALUES (?,?');
		$ekle = $sql->execute(array(		
        $kat1,
		$kat2,
		$link,		        
        ));		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];				
	}
	else {
		echo $diller['kayitEklenemedi'];
	}	
?>