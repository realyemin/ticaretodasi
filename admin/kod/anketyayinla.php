<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 16.07.2018
		-- Description	: Güncelleme
		anket için yeni bir alan eklendi. duyurulara eklenmeyecek artık
		-- ============================================= 
	*/
?>
<?php
	
	@$id =$_GET['id'];
/*	@$baslik =$_GET['deger']." konulu anket";//anket sorusu
	@$detay	= '<p>'. $_GET['deger'].' konulu ankete katılmak için <a href="?anket='.base64_encode($id).'">tıklayınız</a></p>';
	
	@$ekleyen =	 $_SESSION["kid"];
	$gun=date("d");
	$ay=date("m");
	$yil=date("Y");
	
	@$tarih	= $yil.".".$ay.".".$gun;
	$onay=1;
	*/
	if(isset($id))
	{
/* 
		$sql = $db->prepare('INSERT INTO duyuru (kisa,uzun,tarih,kadi,onay,dil) VALUES (?,?,?,?,?,?)');
		$ekle = $sql->execute(array(		
        $baslik,
        $detay,
        $tarih,
        $ekleyen,
		$onay,
		$dil,
		));
	*/	
		$sql = $db->prepare('UPDATE anket_sorular SET onay=1 WHERE id=:id');
		$sql->bindParam(":id",$id);
		$sql->execute();
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		header ("Location:index.php?islem=anketliste&ok=1"); 
		
	}
	else {
		echo $diller['kayitEklenemedi'];
	}
	
	
?>