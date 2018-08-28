<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 15.07.2018 17:05
		-- Description	: Güncelleme kategoriID eklendi
		-- ============================================= 
	*/
?>
<?php
	if($_POST)
	{		
		@$baslik =	$_POST['baslik'];
		@$detay =	$_POST['detay'];
		@$durum =	$_POST['durum'];
		@$manset =	$_POST['manset'];		
		@$id =	$_POST['id'];
		@$kategoriID =	$_POST['kategoriID'];
		
		if(isset($baslik) )
		{
			$sql = $db->prepare('update haber set kisa=? ,uzun=?, onay=?, manset=?, kategoriID=? where id='.$id );
			$ekle = $sql->execute(array(
			$baslik,
			$detay,
			$durum,
			$manset,			
			$kategoriID			
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
										
			header ("Location:index.php?islem=haberliste"); 	
				
		}
		else 
		{
			echo $diller['basarisiz'];
		}
	}	
	
?>