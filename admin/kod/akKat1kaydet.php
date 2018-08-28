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
	if(isset($baslik) )
	{
		$sql = $db->prepare('INSERT INTO akkat1 (ad) VALUES (?)');
		$ekle = $sql->execute(array(
        $baslik,		        
        ));		
		$hata = $sql->errorInfo();
		header ("Location:index.php?islem=akkat1liste"); 	
		
		echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];	
		
	}
	else {
		echo "Kategori Eklenemedi";
	}
		
?>