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
		@$baslik =	$_POST['baslik'];
		@$detay	= $_POST['detay'];
		@$link	= $_POST['link'];
		@$onay	= $_POST['onay'];			
		@$tarih =	$_POST['tarih'];
		$tarih=date("Y-m-d",strtotime($tarih)); // d:gün, m:ay, Y:yıl
		
		
		if(isset($baslik) && !empty($detay) )
		{
			$sql = $db->prepare('INSERT INTO etkinlik (etkinlik_adi,etkinlik_aciklama,etkinlik_link,etkinlik_tarih,etkinlik_onay, dil) VALUES (?,?,?,?,?,?)');
			$ekle = $sql->execute(array(			
			$baslik,
			$detay,
			$link,
			$tarih,
			$onay,
			$dil,
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
			
										
			header ("Location:index.php?islem=etkinlikliste"); 	
			
			
		}
		else {
			echo $diller['basarisiz'];
		}
	}	
?>