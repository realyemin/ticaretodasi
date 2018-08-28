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
	@$soru=	$_POST['soru'];
	@$cevap =	$_POST['cevap'];
	@$id =	$_GET['id'];
	@$akid =	$_GET['akid'];
	
	if(isset($soru) && !empty($cevap) )
	{
		$sql = $db->prepare('update akreditasyon set soru=?, cevap=? where id='.$id);
		$ekle = $sql->execute(array(		
        $soru,
        $cevap,					
        ));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		@$gecici_ad=$_FILES["dosya"]["tmp_name"];
		
		$kalici_yol_ad="../tcrt/akreditasyon/akreditasyon_".$id.".pdf"; 
		if(file_exists($kalici_yol_ad)) unlink($kalici_yol_ad);
		if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya 					
		header ("Location:index.php?islem=akrelinkler?id=".$akid); 	
		
	}
	else {
		echo $diller['kayitGuncellenemedi'];
	}
	
	
?>