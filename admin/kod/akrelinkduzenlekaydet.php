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
	@$baslik =	$_POST['baslik'];
	@$link=	$_POST['link'];
	@$aciklama =	$_POST['aciklama'];
	@$id = $_POST["id"];
	@$akid = $_POST["akid"];
	
	if(isset($link))
	{
		$sql = $db->prepare('update aklink set baslik=? ,link=? ,aciklama=? where id='.$id);
		$ekle = $sql->execute(array(		
        $baslik,
        $link,
        $aciklama,			
        ));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		
		$gecici_ad=$_FILES["dosya"]["tmp_name"];
		
		//$id1 = $db->lastInsertId();
		echo $id;
		$kalici_yol_ad="tcrt/akreditasyon/akreditasyon_".$id.".pdf"; // dosya kendi adıyla upload dizinine kaydedilecek
		if(file_exists($kalici_yol_ad))
		unlink($kalici_yol_ad);
		
		if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosyakaydedilirse
		echo $diller['basarili'];
		
	}
	else {
		echo echo $diller['kayitEklenemedi'];
	}	
	header ("Location:index.php?islem=akrelinkler&id=".$akid); 
	
?>
