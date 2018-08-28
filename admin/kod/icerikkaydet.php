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
		
		if(isset($baslik) && !empty($detay) )
		{
			$sql = $db->prepare('INSERT INTO icerik (aciklama,detay,dil) VALUES (?,?,?)');
			$ekle = $sql->execute(array(		
			$baslik,
			$detay,
			$dil,
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
			
			
			header ("Location:index.php?islem=icerikliste"); 								
			
			
		}
		else {
			echo $diller['basarisiz'];
		}
	}
	
?>