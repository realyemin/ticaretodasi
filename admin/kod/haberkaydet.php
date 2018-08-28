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
	@$baslik =	$_POST['baslik'];
	@$detay	= $_POST['detay'];
	@$ekleyen =	  $_SESSION["kid"];
	$gun=date("d");
	$ay=date("m");
	$yil=date("Y");
	
	@$tarih	= $yil.".".$ay.".".$gun;
	@$durum =	$_POST['durum'];
	@$manset =	$_POST['manset'];
	@$kategoriID =	$_POST['kategoriID'];
	
	if(isset($baslik) && !empty($detay) )
	{
		$sql = $db->prepare('INSERT INTO haber (kisa,uzun,tarih,kadi,onay,manset,dil,kategoriID) VALUES (?,?,?,?,?,?,?,?)');
		$ekle = $sql->execute(array(		
        $baslik,
        $detay,
        $tarih,
		$ekleyen,
        $durum,
        $manset,
        $_SESSION["dil"],
		$kategoriID
        ));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		
		header ("Location:index.php?islem=haberliste"); 					
	}
	else {
		echo $diller['basarisiz'];
	}
?>