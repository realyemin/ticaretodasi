<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>

<?php
	if($_POST)
	{		
		@$baslik =	$_POST['baslik'];
		@$dokumanno =	$_POST['dokumanno'];
		@$yayintarihi =	$_POST['yayintarihi'];
		@$revizyonno =	$_POST['revizyonno'];
		@$revizyontarihi =	$_POST['revizyontarihi'];
		@$sayfa =	$_POST['sayfa'];
		@$surecadi =	$_POST['surecadi'];
		@$surecsahibi =	$_POST['surecsahibi'];
		@$surechedefi =	$_POST['surechedefi'];
		@$id =	$_POST['isoid'];
		@$risk =	$_POST['risk'];
		if(isset($baslik) )
		{
			$sql = $db->prepare('update dokuman set baslik=? ,dokumanno=? ,yayintarihi=? ,revizyonno=? ,revizyontarihi=? ,sayfa=? ,surecadi=?, surecsahibi=? ,surechedefi=? where id='.$id );
			$ekle = $sql->execute(array(
			$baslik,
			$dokumanno,
			$yayintarihi,
			$revizyonno,
			$revizyontarihi,
			$sayfa,
			$surecadi,
			$surecsahibi,
			$surechedefi,		
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ? $diller['basarili'] : $hata[2];
			header ("Location:index.php?islem=risk&id=".$risk);
			
		}
		else {
			echo $diller['basarisiz'];
		}
	}
	
?>	