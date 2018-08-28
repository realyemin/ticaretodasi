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
	if($_POST)
	{
		@$ad=	$_POST['ad'];
		@$tarih	= $_POST['tarih'];
		$gun=substr($tarih, 0, 2);
		$ay=substr($tarih, 3, 2);
		$yil=substr($tarih, 6, 4); 
		$tarih="$yil-$ay-$gun" ;
		
		@$yeri =	$_POST['yer'];
		@$gerceklestiren=	$_POST['gerceklestiren'];
		@$sure =	$_POST['sure'];
		@$tur =	$_POST['tur'];
		
		@$katilanlar =	$_POST['katilanlar'];
		@$aciklama =	$_POST['detay'];
		
		
		$sql = $db->prepare('INSERT INTO etkinliktky (adi,egitim_tarihi,yeri,gerceklestiren,suresi,tur,katilanlar,aciklama) VALUES (?,?,?,?,?,?,?,?)');
		$ekle = $sql->execute(array(		
		$ad,
		$tarih,
		$yeri,
		$gerceklestiren,
		$sure,
		$tur,
		$katilanlar,
		$aciklama,		
		));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		header ("Location:index.php?islem=etkinliktkyliste"); 
	}
?>