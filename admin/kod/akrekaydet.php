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
	@$kat1 =$_POST['kat1'];
	@$soru=	$_POST['soru'];
	@$cevap =$_POST['cevap'];
	
	if(isset($soru) && !empty($cevap) )
	{
		$sql = $db->prepare('INSERT INTO akreditasyon (kat1,soru,cevap) VALUES (?,?,?)');
		$ekle = $sql->execute(array(		
        $kat1,
        $soru,
        $cevap,			
        ));		
		$hata = $sql->errorInfo();
        header ("Location:index.php?islem=akreliste"); 			
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];				
	}
	else {
		echo $diller['kayitEklenemedi'];
	}
	
	
?>